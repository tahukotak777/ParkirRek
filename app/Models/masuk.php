<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "plat",
        "tanggal",
        "jam",
    ];
}
