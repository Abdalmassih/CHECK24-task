<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->usersModel = $this->model('User');
        $this->postsModel = $this->model('Post');
    }

    public function login($offset = 0, $count = 3)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (!empty($_POST["email"]) && !empty($_POST["password"])) {
                    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                    $password = $_POST["password"];
                    // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

                    $authenticated = $this->usersModel->authenticate($email, $password);

                    if ($authenticated) {
                        session_start();
                        $_SESSION["authenticated"] = true;

                        $posts = $this->postsModel->getPosts($offset, $count);
                        $this->view('post/index', $posts);
                    } else {
                        header('Location:' . URLROOT . '/users/login');
                    }
                } else {
                    header('Location:' . URLROOT . '/users/login');
                }
            }
        } else { //GET
            $this->view('user/login');
        }
    }

    public function logout()
    {
        $_SESSION["authenticated"] = false;
        if (isset($_COOKIE["PHPSESSID"])) {
            session_destroy();
            $_COOKIE['PHPSESSID'] = false;
        }
        header('Location:' . URLROOT . '/users/login');
    }

    public function register()
    {

    }
}
