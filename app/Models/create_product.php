<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_product extends Model
{
    use HasFactory;
    public $table ="product";

    protected $fillable=[
        'name',
        'type',
        'price',
    ];
}
