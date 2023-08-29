<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrading extends Model
{
    use HasFactory;

    protected $table = 'users_trading';
    protected $fillable = ['iduser', 'mt4_id', 'deposit', 'lots', 'created_at', 'updated_at', 'update_by'];

    public function users()
    {
        return $this->belongsTo(User::class,'iduser', 'id');
    }

    public function users_profiles()
    {
        return $this->belongsTo(UserProfile::class,'iduser', 'id');
    }
}
