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
        $this->db->query("SELECT * FROM posts ORDER BY created DESC LIMIT $count OFFSET " . $offset * $count);
        
        $result = $this->db->resultSet();


        $this->db->query("SELECT count(*) count FROM posts");
        
        $count = $this->db->resultSet();

        return compact('result', 'count');
    }
}
