<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //「商品(products)はカテゴリ(category)に属する」というリレーション関係を定義する
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // リレーションシップ
    public function reviews() { 

        return $this->hasMany(\App\Review::class, 'productS_id', 'id');

    }
}