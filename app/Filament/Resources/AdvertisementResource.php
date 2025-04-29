<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisementResource\Pages;
use App\Filament\Resources\AdvertisementResource\RelationManagers;
use App\Models\Advertisement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class AdvertisementResource extends Resource
{
    protected static ?string $model = Advertisement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	protected static ?string $navigationGroup = 'Review Tasks';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
		
			return $form
            ->schema([
                Forms\Components\TextInput::make('advertisement_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('advertisement_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('advertisement_description')
					->maxLength(255),
			    Forms\Components\FileUpload::make('advertisement_image')
					->label('Attachment')
                    ->directory('uploads/advertisements')
                    ->image(),
            ]);
                //
	}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('advertisement_id'),
                Tables\Columns\TextColumn::make('advertisement_name')
				->sortable()
				->searchable(),				
                Tables\Columns\TextColumn::make('advertisement_image')
                    ->sortable()
					->searchable(),
                Tables\Columns\TextColumn::make('advertisement_description')
                    ->sortable()
					->searchable(),
               Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAdvertisements::route('/'),
            'create' => Pages\CreateAdvertisement::route('/create'),
            'edit' => Pages\EditAdvertisement::route('/{record}/edit'),
        ];
    }
}
