<?php

class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function CreateNewUser($email, $pass, $uniq)
    {
        $this->db->query('INSERT INTO users (user_email, user_password, user_uniq) VALUES (:email, :password, :uniq)');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $pass);
        $this->db->bind(':uniq', $uniq);
        $status = $this->db->execute();
        return $status;
    }

    public function SelectUserByUniq($id)
    {
        $this->db->query('SELECT user_photo, user_desc, user_contact, user_email, user_name FROM users WHERE user_uniq = :id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    public function CheckEmailExists($email)
    {
        $this->db->query('SELECT * FROM users WHERE user_email = :email');
        $this->db->bind(':email', $email);
        return $this->db->resultSet();
    }

    public function GetUserData($id)
    {
        $this->db->query('SELECT * FROM users WHERE user_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function UpdateUserImage($name, $uniq)
    {
        $this->db->query('UPDATE users SET user_photo = :photo WHERE user_uniq = :uniq');
        $this->db->bind(':photo', $name);
        $this->db->bind(':uniq', $uniq);
        return $this->db->execute();
    }

    public function UpdateUserDetails($id, $email, $desc, $contact)
    {
        $this->db->query('UPDATE users SET user_email = :email, user_desc = :desc, user_contact = :contact WHERE user_id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':email', $email);
        $this->db->bind(':desc', $desc);
        $this->db->bind(':contact', $contact);
        return $this->db->execute();
    }

    public function uploadImage($name, $tmp_name, $size, $path)
    {
        $supported = array('jpg', 'jpeg', 'png');
        $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (in_array($extension, $supported)) {
            if ($size < 5000000) {
                if (move_uploaded_file($tmp_name, $path)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
