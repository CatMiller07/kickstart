<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/12/2016
 * Time: 10:09 PM
 ******/

require_once('database.php');

/**
 * Class Blog
 */
class Blog
{
    public $ksdb = '';
    public $base = '';

    /**
     * Blog constructor.
     */
    public function __construct()
    {
       // parent::__construct();
        $this->comments = new Comments();
        if (!empty($_GET{'id'})) {
            $this->viewPost($_GET['id']);
        } else {
            $this->getPosts();
        }
        /**$this->ksdb = new Database;
         **this->base = new stdClass;
         **$this->base->url = "http://".$_SERVER['SERVER_NAME'];
         ***/
    }
}

class Posts extends Blog{
   public function __construct()
   {
       parent::__construct();

   }
    /**
     *
     */
    public function getPosts(){
        $id = 0;
        $posts = $return = array();
        $template = '';
        $query = $this->ksdb->db->prepare("SELECT * FROM posts");
        try {
            $query->execute();
            for ($i = 0; $row = $query->fetch(); $i++) {
                $return[$i] = array();
                foreach ($row as $key => $rowitem) {
                    $return[$i][$key] = $rowitem;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $posts = $return;
        $template = 'list-posts.php';
        include_once 'frontend/templates/'.$template;
    }
    public function viewPost($postId){
        $id = $postId;
        $posts = $return = array();
        $template = '';
        $query = $this->ksdb->db->prepare("SELECT * FROM posts WHERE id = ?");
        try {
                $query->execute(array($id));
                 for ($i = 0; $row = $query->fetch(); $i++) {
                        $return[$i] = array();
                         foreach ($row as $key => $rowitem) {
                             $return[$i][$key] = $rowitem;
                         }
                 }
            } catch (PDOException $e) {
                         echo $e->getMessage();
              }
        $posts = $return;
        $posts[0]['content'] = $posts[0]['content'];
        $template = 'view-post.php';
        include_once 'frontend/templates/'.$template;
    }
}

/**
 * Class Comments
 */
class Comments extends Blog{
    public function __construct(){
        parent::__construct();
    }
    public function commentNumber($postId){
    }
    public function getComments($postId){
    }
    public function addComment(){
    }
}