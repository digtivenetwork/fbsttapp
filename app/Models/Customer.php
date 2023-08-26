<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'users_profiles';
    protected $primaryKey = 'idprofiles';
    protected $fillable = ['iduser', 'full_name', 'address', 'country', 'phone', 'mt4_id', 'deposit', 'lots', 'update_by'];
    
}
