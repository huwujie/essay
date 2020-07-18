<?php
/**
 * Created by PhpStorm.
 */

namespace App\Api\Controllers;


use App\Repository\TopicRepository;
use Illuminate\Http\Request;

class TopicController extends Controller{

    protected $topicRepository;

    /**
     * TopicController constructor.
     * @param $topicRepository
     */
    public function __construct(TopicRepository $topicRepository)
    {
        $this->topicRepository = $topicRepository;
    }


    public function index(Request $request)
    {
        $topics = $this->topicRepository->getTopics($request->get('query'));

        return response()->json([
            'topics' => $topics
        ]);

    }

}