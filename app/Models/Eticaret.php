<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eticaret extends Model
{
    use HasFactory;

    protected $table = "eticaret";

    protected $guarded = [];

    public function renkler(){
        return $this->hasOne(Renk::class, 'id', 'renk_id');
    }
    public function bedenler(){
        return $this->hasOne(Beden::class, 'id', 'beden_id');
    }
}
