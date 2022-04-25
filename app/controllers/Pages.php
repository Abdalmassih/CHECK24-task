<?php
class Pages extends Controller {
    public function __construct() {
        $this->postsModel = $this->model('Post');
    }

    public function index() {
        $data = [
            'title' => 'Blog Home Page'
        ];

        $posts = $this->postsModel->getPosts();

        $this->view('post/index', $posts);
    }

    public function add()
    {
        
    }
}
