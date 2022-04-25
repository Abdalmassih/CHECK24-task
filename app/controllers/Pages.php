<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->postsModel = $this->model('Post');
    }

    public function index($offset = 0, $count = 3)
    {

        $posts = $this->postsModel->getPosts($offset, $count);

        $this->view('post/index', $posts);
    }

    public function add()
    {
    }
}
