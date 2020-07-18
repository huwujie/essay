<?php
/**
 * Created by PhpStorm.
 */

namespace App\Repository;
use App\Category;


class CategoryRepository {

    /**
     * @return mixed
     */
    public function getCategorys()
    {
        return Category::orderBy('created_at', 'desc')->get();
    }


    public function getPostsByCategory($category)
    {
        return $category->posts()->with('user')->paginate(10);
    }

}