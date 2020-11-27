<?php
  class Post
  {
      //int AI
    public $id;
    //nom de l'auteur de l'article
    public $authorID;

    //article
    public $content;

    public function __construct($id, $authorID, $content)
    {
        $this->id      = $id;
        $this->authorID  = $authorID;
        $this->content = $content;
    }

      /**
       * fetchAll poir afficher la liste des articles
       */
    public static function all()
    {
    //  Your code here
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts');

        foreach($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content']);
        }

        return $list;
    }

      /**
       *requete sql pour crée un article avec le contenu
       */
    public static function create($author, $content)
    {
        //  Your code here
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO posts (author, content) VALUES (:author, :content)');
        $req->execute(array('author' => $author, 'content' => $content));
        return self::all();

    }

      /**
       * delete by id
       */
    public static function delete($id)
    {
          //  Your code here
        $db = Db::getInstance();
        $req = $db->prepare('DELETE FROM posts WHERE id = :id');
        $req->execute(array('id' => $id));

        return self::all();

    }

      /**
       *find by id
       */
    public static function find($id)
    {
        //  Your code here
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        $req->execute(array('id' => $id));
        $post = $req->fetch();

        return new Post($post['id'], $post['author'], $post['content']);
    }
  }
