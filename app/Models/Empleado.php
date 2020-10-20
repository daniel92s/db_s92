<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    public $timestamps = true;
    protected $fillable = ['nombre', 'apaterno', 'amaterno','puesto'];

    // public function posts(){
    //     return $this->hasMany('App\Models\Posts');
    


}
