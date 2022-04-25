<?php
class Posts extends Controller {
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

    public function list()
    {
        $posts = $this->postsModel->getPosts();
        return $posts;
    }

    public function show($id)
    {
        $post = $this->postsModel->find($id);

        $this->view('post/show', $post);
    }
}
