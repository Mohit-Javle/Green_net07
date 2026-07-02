<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'company', 'product_interest', 'message', 'is_read'
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
