<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrizeClaimed extends Model
{
    use HasFactory;

    protected $table = 'prize_claimed';
    protected $primaryKey = 'idclaim';
    protected $fillable = ['iduser', 'claim_code', 'idprize', 'status', 'created_at', 'updated_at', 'update_by'];
    protected $casts = [
        'created_at'  => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'iduser', 'id');
        
    }

    public function users_profile()
    {
        return $this->belongsTo(UserProfile::class,'iduser', 'iduser');
        
    }

    public function prizes()
    {
        return $this->belongsTo(Prizes::class,'idprize', 'idprizes');
        
    }

   

    
}
