<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_infos'; // Ensure this matches your table name
    protected $fillable = ['last_name', 'first_name', 'sex', 'cin', 'birth', 'email', 'phone', 'address'];

}
