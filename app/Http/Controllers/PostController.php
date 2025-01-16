<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        $validate = request()->validate([
            'content' => 'required|min:1|max:255',
        ]);

        Post::create([
            'content' => $validate['content'],
            'likes' => 0,
        ]);

        session()->flash('success', 'Idea created successfully');

        return redirect()->route('dashboard.index');
    }
    public function destroy($id){

        $post = Post::where('id', $id);
        if($post){
            $post->delete();

            session()->flash('success', 'Idea deleted successfully');
        }
        return redirect()->route('dashboard.index');
    }
}
