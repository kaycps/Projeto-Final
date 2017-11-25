<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialNeed extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'special_needs';

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


    public function profiles()
    {
        return $this->belongsToMany('App\Profile');
    }

     public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
