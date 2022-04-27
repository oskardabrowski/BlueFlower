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
    public function SelectAllPremiumAnnouncements()
    {
        $this->db->query('SELECT * FROM announcements WHERE ann_payment = :payment');
        $this->db->bind(':payment', 'premium');
        return $this->db->resultSet();
    }
    public function SelectAllStandardAnnouncements()
    {
        $this->db->query('SELECT * FROM announcements WHERE ann_payment = :payment');
        $this->db->bind(':payment', 'standard');
        return $this->db->resultSet();
    }
    public function SelectAllFreeAnnouncements()
    {
        $this->db->query('SELECT * FROM announcements WHERE ann_payment = :payment');
        $this->db->bind(':payment', 'free');
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

    public function UpdateAnnouncementById($id, $imgName, $title, $desc, $footer, $type, $images)
    {
        $this->db->query('UPDATE announcements SET ann_img_general = :image, ann_title = :title, ann_desc = :desc, ann_footer = :footer, ann_type = :type, ann_images = :images WHERE ann_id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':images', $images);
        $this->db->bind(':type', $type);
        $this->db->bind(':footer', $footer);
        $this->db->bind(':desc', $desc);
        $this->db->bind(':title', $title);
        $this->db->bind(':image', $imgName);
        return $this->db->execute();
    }

    public function ActiveAnnouncementById($id, $status)
    {
        $this->db->query('UPDATE announcements SET ann_active = :active WHERE ann_id = :id');
        $this->db->bind(':active', $status);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function UpdateCommentOfAnnouncement($id, $json)
    {
        $this->db->query('UPDATE announcements SET ann_comments = :comments WHERE ann_id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':comments', $json);
        return $this->db->execute();
    }
}
