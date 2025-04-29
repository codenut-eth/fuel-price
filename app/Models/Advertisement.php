<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Advertisement extends Model
{

    use HasFactory;

    protected $fillable = [

        'advertisement_id',            // Unique Advertisement identifier

        'advertisement_name',          // Name of the Advertisement

		'advertisement_description',   // Name of Advertisement Description 
		
		'advertisement_image',		 //Advertisement image
		
        'created_at',          // Date the Advertisement was created

        'updated_at',         // Date the Advertisement was verified

    ];





    public function addedBy()

    {

        return $this->belongsTo(User::class, 'added_by', 'user_id');
    }

}
