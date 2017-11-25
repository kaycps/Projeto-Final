<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exemption extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exemptions';

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
    protected $fillable = ['homologado', 'motivo'];

    public function inscription()
    {
        return $this->belongsTo('App\Inscription');
    }
}
