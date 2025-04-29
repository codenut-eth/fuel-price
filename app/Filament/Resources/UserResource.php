<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Cheesegrits\FilamentPhoneNumbers;
use Illuminate\Support\Facades\Hash;



class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Review Tasks';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
					 ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('surname')
					->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_of_birth')
				      ->maxDate(Carbon::now()->subYears(18))
					->required(),
                Forms\Components\TextInput::make('phone1')
				    ->mask('99-9999999999')
					->placeholder('07-1234567890')
					->required(),
		        Forms\Components\TextInput::make('phone2')
              	    ->mask('99-9999999999')
					->placeholder('07-1234567890')
					->required(),
		      Forms\Components\TextInput::make('street_address')
					->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->maxLength(255),
                Forms\Components\TextInput::make('country')
                    ->maxLength(255),
                Forms\Components\TextInput::make('zip')
                    ->numeric()	
                    ->maxLength(50),
				Forms\Components\TextInput::make('identity_number')
                    ->maxLength(50),
				Forms\Components\FileUpload::make('identity_doc')
					->directory('uploads/user') 
					->downloadable() 
					->imagePreviewHeight('100')
					->openable()
					->visibility('public'),
				Forms\Components\FileUpload::make('photo')
					->directory('uploads/user') 
					->downloadable() 
					->imagePreviewHeight('100')
					->openable()
					->visibility('public'),
	            Forms\Components\TextInput::make('model')
                    ->maxLength(255),
                Forms\Components\TextInput::make('make')
                    ->maxLength(255),
                Forms\Components\TextInput::make('year')
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at')
				->timezone(session('timezone', config('app.timezone')))
				->disabled(),
                Forms\Components\TextInput::make('password')
                ->dehydrateStateUsing(fn ($state) => Hash::make($state)) 
                ->required(fn (string $context): bool => $context === 'create' || $context === 'edit')
				->minLength(8)
				->visibleOn('create'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $user = auth()->user();

                if ($user->hasRole('Super Admin')) {
                    // Super Admin sees only approved by Admin and not rejected
                    $query->whereNotNull('approved_by')
                        ->whereNotIn('approved_by', ['Pending']);
                }
                // Admins see all records
                // You can add additional role-based queries here if needed
                return $query;
            })
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('surname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
			        ->sortable(),
                Tables\Columns\TextColumn::make('phone1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('street_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('zip')
                    ->searchable(),
			  	Tables\Columns\TextColumn::make('identity_number')
                    ->searchable(),	
			  	Tables\Columns\TextColumn::make('identity_doc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable(),
                Tables\Columns\TextColumn::make('make')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->searchable(),
				Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
				    ->timezone(session('timezone', config('app.timezone')))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
				    ->timezone(session('timezone', config('app.timezone')))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('approve')
                    ->label('Approve')
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->action(function (User $record, $data) {
                        $user = auth()->user();

                        $status = $data['status'];
                        $record->approved_by = $status === 'Approved' ? $user->name : 'Rejected';
                        $record->save();

                        Notification::make()
                            ->title('Success')
                            ->success()
                            ->body("User has been $status Successfully")
                            ->send();
                    })->form([
                        Forms\Components\Radio::make('status')
                            ->label('Approval Status')
                            ->options([
                                'Approved' => 'Approved',
                                'Rejected' => 'Rejected',
                            ])
                            ->default('Approved')
                            ->required(),
                    ])
                    ->visible(fn (User $record) => (auth()->user()->hasRole('Admin') && in_array($record->approved_by, ['Pending', null])) || (auth()->user()->hasRole('Super Admin') && $record->approved_by == 'Admin')),
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
