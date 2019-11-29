<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'user_email', 'user_name', 'admin', 'address', 'phone_number', 'mottoes'
    ];

    // User와 Member는 1:1 관계
    public function user() {
        return $this->hasOne(User::class);
    }
}
