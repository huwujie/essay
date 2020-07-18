<?php
/**
 * Created by PhpStorm.
 */

namespace App\Repository;
use App\Topic;


class TopicRepository {

    /**
     * @return mixed
     */
    public function getTopics($query)
    {
        return Topic::where('name','like','%'.$query.'%')->get();
    }

    public function createTopic($params)
    {
        return Topic::create($params);
    }

}