<?php
class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts($offset = 0, $count = 3)
    {
        $this->db->query("SELECT * FROM posts p LEFT JOIN users u on p.user_id = p.id ORDER BY created DESC LIMIT $count OFFSET " . $offset * $count);

        $result = $this->db->resultSet();


        $this->db->query("SELECT count(*) count FROM posts");

        $count = $this->db->resultSet();

        return compact('result', 'count');
    }

    public function find($id)
    {
        $id = filter_var(
            $id,
            FILTER_VALIDATE_INT,
            array('options' => array('min_range' => 1))
        );

        if (!$id) {
            throw new Exception("Invalid ID passed", 1);
        }
        $this->db->query("SELECT * FROM posts p LEFT JOIN users u on p.user_id = p.id WHERE p.id = $id");

        $result = $this->db->single();


       return $result;
    }
}
