<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table= 'transactions';
    protected $primaryKey = "trans_id";
    public function user(){
        return $this->belongsTo('App\User');
    }
}
