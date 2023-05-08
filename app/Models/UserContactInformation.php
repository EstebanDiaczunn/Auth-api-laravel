<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContactInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'address',
        'zipCode',
        'city',
        'stateProvince',
        'country',
    ];



    public function User()
    {
        return $this->belongsTo(User::class);
    }


}
