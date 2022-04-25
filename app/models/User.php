<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query("SELECT * FROM users");

        $result = $this->db->resultSet();

        return $result;
    }


    public function authenticate($email, $password)
    {
        $this->db->query("SELECT password FROM users where email = '$email'");

        $result = $this->db->single();

        if (password_verify($password, $result->password)) {
            return true;
        }

        return false;
    }
}
