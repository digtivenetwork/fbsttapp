<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;
    
    protected $table = 'import_logs';
    protected $primaryKey = 'idlogs';
    protected $fillable = ['idlogs','filename', 'imported_by', 'status', 'message'];
    
    public function users()
    {
        return $this->belongsTo(User::class,'imported_by', 'id');
        
    }
}
