<?php
/**
 * Created by PhpStorm.
 */

namespace App;

class Category extends Model {

    protected $table = 'categorys';

    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class,'category_id','id');
    }

}