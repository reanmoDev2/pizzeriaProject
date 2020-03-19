<?php
class Setting
{
  public $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getSettings()
  {
    $this->db->query('SELECT
                          users.email,
                          users.first_name,
                          users.last_name,
                          opening_hours.mo_start,
                          opening_hours.mo_end,
                          opening_hours.di_start,
                          opening_hours.di_end,
                          opening_hours.mi_start,
                          opening_hours.mi_end,
                          opening_hours.do_start,
                          opening_hours.do_end,
                          opening_hours.fr_start,
                          opening_hours.fr_end,
                          opening_hours.sa_start,
                          opening_hours.sa_end,
                          opening_hours.so_start,
                          opening_hours.so_end
                      FROM
                          `users`
                      JOIN opening_hours
                      WHERE users.id = :session_id');
    $this->db->bind(':session_id', $_SESSION['user_id']);
    $row = $this->db->single();
    return $row;
  }
  public function setOpeningHours($data)
  {
    $this->db->query('UPDATE `opening_hours` 
                      SET `mo_start` = :mo_start, `mo_end` = :mo_end, `di_start` = :di_start, `di_end` = :di_end,
                      `mi_start` = :mi_start, `mi_end` = :mi_end, `do_start` = :do_start, `do_end` = :do_end, 
                      `fr_start` = :fr_start, `fr_end` = :fr_end,`sa_start` = :sa_start, `sa_end` = :sa_end,
                      `so_start` = :so_start, `so_end` = :so_end
                      WHERE `id` = 1');
    $this->db->bind(':mo_start', $data['mo_start']);
    $this->db->bind(':mo_end', $data['mo_end']);
    $this->db->bind(':di_start', $data['di_start']);
    $this->db->bind(':di_end', $data['di_end']);
    $this->db->bind(':mi_start', $data['mi_start']);
    $this->db->bind(':mi_end', $data['mi_end']);
    $this->db->bind(':do_start', $data['do_start']);
    $this->db->bind(':do_end', $data['do_end']);
    $this->db->bind(':fr_start', $data['fr_start']);
    $this->db->bind(':fr_end', $data['fr_end']);
    $this->db->bind(':sa_start', $data['sa_start']);
    $this->db->bind(':sa_end', $data['sa_end']);
    $this->db->bind(':so_start', $data['so_start']);
    $this->db->bind(':so_end', $data['so_end']);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function setUserCredentials($data)
  {
    $this->db->query('UPDATE users
                      SET email = :email, first_name = :first_name, last_name = :last_name, password = :password
                      WHERE users.id = :session_id');
    $this->db->bind(':session_id', $_SESSION['user_id']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':first_name', $data['first_name']);
    $this->db->bind(':last_name', $data['last_name']);
    $this->db->bind(':password', $data['password']);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
