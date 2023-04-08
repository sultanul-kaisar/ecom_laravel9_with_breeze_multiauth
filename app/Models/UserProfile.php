<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $guarded = [
        'user_id',
        'first_name',
        'last_name',
        'profile_image',
        'phone',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
