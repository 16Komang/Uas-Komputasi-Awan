<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'invitation_id',
        'name',
        'image',
        'address',
        'place_desc',
    ];

    use HasFactory;

    public $timestamps = true;
    
    public function invitation()
    {
        return $this->belongsTo(Invitations::class);
    }
}
