<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
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
        $posts = Post::orderBy("created_at", "desc")->get();
        return view('dashboard', ['comments' => $comments, 'posts' => $posts]);
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
