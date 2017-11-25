<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inscriptions';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pago', 'dataPagamento', 'dataInscrição'];

    public function select_processes()
    {
        return $this->belongsTo('App\SelectProcess');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function exemption()
    {
        return $this->hasOne('App\Exemption');
    }

    public function career()
    {
        return $this->hasOne('App\Career');
    }

    public function quota()
    {
        return $this->hasOne('App\Quotum');
    }
}
