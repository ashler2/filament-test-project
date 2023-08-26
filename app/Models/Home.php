<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Fillable attributes
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];
}
