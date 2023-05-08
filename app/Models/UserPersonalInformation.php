<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalInformation extends Model
{
    use HasFactory;


    protected $fillable = [
        name,
        surname,
        image,
        idKind,
        idValue,
        nationality,
    ];

    protected $casts = [
        'birthDate' =>'datetime',
    ];

    //Relaciona a el modelo User
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
