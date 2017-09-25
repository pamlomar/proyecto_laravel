<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $timestamps = false;

    public function usuarios()
    {
        return $this->hasOne('App\Model\Usuario');
    }

}