<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'amount', 'when'];

    protected $dates = ['when', 'created_at', 'updated_at'];
}
