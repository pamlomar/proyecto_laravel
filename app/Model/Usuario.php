<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }

}