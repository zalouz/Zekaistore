<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders'; // Define the table name

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
        'status',
        // Add other relevant fields here
    ];

    // Add relationships, scopes, and other model methods as needed
}