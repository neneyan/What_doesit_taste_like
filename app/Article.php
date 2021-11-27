<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    // リレーションシップ
    public function texts() { 

        return $this->hasMany(\App\Text::class, 'articles_id', 'id');

    }
}
