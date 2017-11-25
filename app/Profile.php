<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'RG', 'CPF', 'DataNascimento', 'Sexo', 'NomePai', 'NomeMãe', 'Passaporte', 'Naturalidade', 'Telefone', 'Escolaridade', 'EmissorRG'];

    public function special_needs()
    {
        return $this->belongsToMany('App\SpecialNeed');
    }

    public function adresses()
    {
        return $this->hasMany('App\Adress');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
