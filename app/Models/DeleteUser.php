<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeleteUser extends Model
{
    use HasFactory;

    protected $table = 'delete_users'; // Ensure this matches your table name
    protected $fillable = ['last_name', 'first_name', 'sex', 'cin', 'birth', 'email', 'phone', 'address'];

}
