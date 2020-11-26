<?php
  class Post
  {
      //int AI
    public $id;
    //nom de l'auteur de l'article
    public $author;

    //article
    public $content;

    public function __construct($id, $author, $content)
    {
      // Your code here
    }

    public static function all()
    {
    //  Your code here
    }

    public static function create($author, $content)
    {
        //  Your code here

    }

    public static function delete($id)
    {
          //  Your code here

    }

    public static function find($id)
    {
        //  Your code here
    }
  }
?>