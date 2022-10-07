<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iten extends Model
{
    protected $table = 'itens';
    
    protected $fillable = ['description', 'qtd'];

    public function iten(){
        return $this->belongsTo(Iten::class, 'iten_id');
    }
    public function categoria()
    {
        return $this->belongsToMany(Categoria::class, 'id_categoria');
    }
}
