<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $tables = 'cliente'; //nome da tabela
    public $fillabe = ['id','primeiroNome','sobrenome'];
    public $timestamps = false;
}

?>