<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gategory extends Model
{
    protected $fillable = ['name', 'iten_id'];
    public function itens()
    {
        return $this->belongsToMany(Iten::class);
    }
}
