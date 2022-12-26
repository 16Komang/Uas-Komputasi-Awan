<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public $timestamps = true;

    public function guest()
    {
        return $this->hasMany(Guest::class);
    }
}
