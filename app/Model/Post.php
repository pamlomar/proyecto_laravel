<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $timestamps = false;

    public function usuarios()
    {
        return $this->belongsTo('App\Model\Usuario');
    }

}