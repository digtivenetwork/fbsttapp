<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrizeClaimed extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'iduser', 'id');
        
    }

    public function prizes()
    {
        return $this->belongsTo(User::class,'idprize', 'id');
        
    }
}
