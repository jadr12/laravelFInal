<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    static public function articlesTrier(){
        $trier = Article::all();
        return $trier;
    }

    protected $table ="articles";
}
