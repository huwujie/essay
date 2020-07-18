<?php
/**
 * Created by PhpStorm.
 */

namespace App\Service;
use App\Repository\CategoryRepository;
use Illuminate\Support\Facades\Cache;

class CategoryService {

    protected $categoryRepositoy;

    /**
     * CategoryService constructor.
     * @param $categoryRepositoy
     */
    public function __construct(CategoryRepository $categoryRepositoy)
    {
        $this->categoryRepositoy = $categoryRepositoy;
    }

    /**
     * @return mixed
     */
    public function getCategorys()
    {
        $categorys = Cache::get('categorys');
        if (!$categorys) {
            $categorys = $this->categoryRepositoy->getCategorys();
            if ($categorys->count() > 0) {
                Cache::put('categorys', $categorys, 60);
            }
        }
        return $categorys;
    }

}