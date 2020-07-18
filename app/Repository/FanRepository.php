<?php
/**
 * Created by PhpStorm.
 */

namespace App\Repository;

use App\Fan;
use Illuminate\Support\Facades\Auth;

class FanRepository {

    public function createFan($user)
    {
        return Fan::create(['fan_id' => Auth::user()->id,'follow_id' => $user->id]);
    }

    public function getFan($user)
    {
        return Fan::where(['fan_id' => Auth::user()->id,'follow_id' => $user->id]);
    }

}