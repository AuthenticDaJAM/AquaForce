<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $primaryKey = 'device_id';
    protected $keyType = 'int';
    protected $fillable = [
        'user_id',
        // other fields...
    ];

    // Define a relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}