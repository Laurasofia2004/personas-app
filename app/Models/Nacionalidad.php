<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;
    protected $table ='tb_nacionalidad';
    protected $primaryKey = 'naci_codi';
    public $timestamps = false;

}
