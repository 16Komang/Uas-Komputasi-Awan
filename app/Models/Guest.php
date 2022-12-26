<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'invitation_id',
        'presence',
        'name',
        'congratulation'
    ];

    public $timestamps = true;

    public function invitation()
    {
        return $this->belongsTo(Invitations::class);
    }
}
