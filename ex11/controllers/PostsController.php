<?php


  class PostsController
  {

    public function index()
    {
        $posts = Post::all();
        require_once('views/posts/index.php');
    }
    
    public function create()
    {
        $posts = Post::create($_POST['author'], $_POST['content']);
        require_once('views/posts/index.php');
    }

    public function delete()
    {
        $posts = Post::delete($_GET['id']);
        require_once('views/posts/index.php');
    }


    public function show()
    {
        if (!isset($_GET['id']))
            return call('pages', 'error');

        $post = Post::find($_GET['id']);
        require_once('views/posts/show.php');

    }
  }
?>