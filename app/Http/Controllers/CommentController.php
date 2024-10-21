<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        // Generate some comments with replies
        $comments = [
            [
                'name' => 'Ivan',
                'hoursAgo' => rand(1, 24),
                'likes' => rand(1, 1000),
                'message' => 'This is a random comment by Ivan.',
                'replies' => $this->generateRandomReplies()
            ],
            [
                'name' => 'Matej',
                'hoursAgo' => rand(1, 24),
                'likes' => rand(1, 1000),
                'message' => 'Matej says something insightful here.',
                'replies' => $this->generateRandomReplies()
            ],
            [
                'name' => 'Matúš',
                'hoursAgo' => rand(1, 24),
                'likes' => rand(1, 1000),
                'message' => 'Matúš leaves a thoughtful reply.',
                'replies' => $this->generateRandomReplies()
            ],
            [
                'name' => 'Rišian',
                'hoursAgo' => rand(1, 23),
                'likes' => rand(1, 1000),
                'message' => 'Rišian shares a philosophical comment.',
                'replies' => $this->generateRandomReplies()
            ]
        ];

        return view('comments.index', ['comments' => $comments]);
    }

    private function generateRandomReplies()
    {
        $randomReplies = [
            ['name' => 'Luigi', 'message' => 'Luigi agrees with the point made.', 'hoursAgo' => rand(1, 24)],
            ['name' => 'Peach', 'message' => 'Peach adds her perspective.', 'hoursAgo' => rand(1, 24)],
            ['name' => 'Mario', 'message' => 'Mario thinks this is a great discussion!', 'hoursAgo' => rand(1, 24)],
        ];

        // Pick two random replies to display for each comment
        shuffle($randomReplies);
        return array_slice($randomReplies, 0, 2);
    }
}
