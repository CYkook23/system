<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'client_id', 'total', 'subtotal'];

    public function employee() {

        return $this->belongsTo(Employee::class);  
    }

    public function client() {

        return $this->belongsTo(Client::class);  
    }

}
