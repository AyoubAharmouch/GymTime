<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpiredSubscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_name', 'first_name', 'email', 'phone', 'address', 
        'sex', 'CIN', 'birth', 'payement', 'start_date', 'end_date'
    ];

    public function user()
{
    return $this->belongsTo(Userinfo::class, 'user_id');
}


}
