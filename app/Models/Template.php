<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'cover',
        'filename',
        'desc'
    ];

    public $timestamps = true;
    
    public function invitation()
    {
        return $this->hasMany(Invitations::class);
    }
}
