<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/12/2016
 * Time: 7:22 PM
 */

session_start();
require_once('database.php');

class Adminpanel{
    public function __construct(){
    }
}

class Posts extends Adminpanel{
    public function __construct(){
        parent::__construct();
    }
    public function listPosts(){
    }
    public function editPosts(){
    }
    public function addPost(){
    }
    public function savePost(){
    }
    public function deletePost(){
    }
}
class Comments extends Adminpanel{
    public function __construct(){
        parent::__construct();
    }
    public function listComments(){
    }
    public function deletePost(){
    }
}
$admin = new Adminpanel();