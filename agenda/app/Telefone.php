<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'id',
        'add',
        'telefone',
        'pessoa=id'
    ];

    protected $table = 'telefones';

    public function pessoa()
    {
        return $this->belongsTo(pessoa::class, 'pessoa_id');
    }
}
