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

    public function SelectAnnouncementById($id)
    {
        $this->db->query('SELECT * FROM announcements WHERE ann_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function SelectAllAnnouncementsByUserUniq($uniq)
    {
        $this->db->query('SELECT * FROM announcements WHERE ann_user = :uniq');
        $this->db->bind(':uniq', $uniq);
        return $this->db->resultSet();
    }

    public function AddNewAnnoucement($img, $title, $desc, $footer, $type, $user, $images, $dir, $payment, $active)
    {
        $this->db->query('INSERT INTO announcements (ann_img_general, ann_title, ann_desc, ann_footer, ann_type, ann_user, ann_images, ann_dir, ann_payment, ann_active)
        VALUES (:img, :title, :desc, :footer, :type, :user, :images, :dir, :payment, :active)');
        $this->db->bind(':img', $img);
        $this->db->bind(':title', $title);
        $this->db->bind(':desc', $desc);
        $this->db->bind(':footer', $footer);
        $this->db->bind(':type', $type);
        $this->db->bind(':user', $user);
        $this->db->bind(':images', $images);
        $this->db->bind(':dir', $dir);
        $this->db->bind(':payment', $payment);
        $this->db->bind(':active', $active);
        return $this->db->execute();
    }

    public function DeleteAnnouncement($id)
    {
        $this->db->query('DELETE FROM announcements WHERE ann_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function UpdateImagesArray($id, $array)
    {
        $this->db->query('UPDATE announcements SET ann_images = :array WHERE ann_id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':array', $array);
        return $this->db->execute();
    }
}
