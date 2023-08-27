<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    
    protected $fillable = ['city_id', 'name', 'last_name', 'identification_card', 'telephone_number', 'address', 'mail', ];


    public function city() 
    {
        return $this->belongsTo(City::class);
    }

    public function bills() {

        return $this->hasMany(Bill::class);
        
    }
}

