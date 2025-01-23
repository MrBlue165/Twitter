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
    public function destroy(Post $post){


        if($post){
            $post->delete();

            session()->flash('success', 'Idea deleted successfully');
        }
        return redirect()->route('dashboard.index');
    }
    public function show(Post $post)
    {

        return view('show', compact('post'));

    }
    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
        ]);
        // Update the post content
        $post->content = $validatedData['content'];

        // Save the changes to the database
        $post->save();

        session()->flash('success', 'Idea updated successfully');
        // Redirect back with a success message
        return redirect()->route('dashboard.index', $post->id);
    }

}
