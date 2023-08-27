<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_details extends Model
{
    use HasFactory;

    protected $fillable = ['bill_id', 'product_id', 'cantidad'];

    public function bill() {

        return $this->belongsTo(Bill::class);  
    }

    public function product() {

        return $this->belongsTo(Product::class);  
    }
}
