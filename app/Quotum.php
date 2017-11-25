<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quotas';

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
    protected $fillable = ['descrição'];

    public function select_processes()
    {
        return $this->belongsToMany('App\SelectProcess');
    }

    public function inscription()
    {
        return $this->belongsTo('App\Inscription');
    }
}
