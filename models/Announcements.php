<?php

class Announcements
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function SelectAllAnnouncements()
    {
        $this->db->query('SELECT * FROM announcements');
        return $this->db->resultSet();
    }
}
