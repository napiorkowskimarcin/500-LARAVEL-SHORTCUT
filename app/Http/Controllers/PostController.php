<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        $post = new Post();
        $post->title = 'First Post Title';
        $post->body = 'First Post BOdy';
        $post->save();
        return "comment has been created";
    }

    public function addComment($id){
    
    $post = Post::find($id);
    $comment = new Comment();
    $comment->comment = "this is first comment.";
    $post->comments()->save($comment);
    return "comment has been posted";
    }
    
    public function getCommentsByPost($id){
        $comments = Post::find($id)->comments;
        return $comments;
    }
    public function getPost(){
        return  Post::findAll();

    }
}