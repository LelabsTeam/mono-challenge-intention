<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class intention extends Model
{
    protected $table = 'intentions';

    protected $primaryKey = 'id';

    protected $fillable = [

        'id',
        'title',
        'price',
        'category',
        'description',
        'image'

    ];

    use HasFactory;
}
