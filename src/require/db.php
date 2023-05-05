<?php

class DB { 

    private $hostname = "localhost";
    private $dbname = "justmma";
    private $username = "root";          //...
    private $password = "Pa23004263501"; //...
    private $charset = "utf8mb4";

    public $conn;
    
    public function __construct()
    {
      $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
      if (!$this->conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
    }

    // public function get_info($id) {
    //     $info = $this->conn->query("SELECT * FROM info WHERE id = $id");
    //     return $info;
    // }

    // public function get_info() {
    //     $info = $this->conn->query("SELECT * FROM info");
    //     return $info;
    // }

    public function get_info() {
        $result = $this->conn->query("SELECT * FROM info");
        $info = $result->fetch_assoc();
        return $info;
    }

    public function get_ufc() {
        $result = $this->conn->query("SELECT * FROM ufc_page");
        $ufc = $result->fetch_assoc();
        return $ufc;
    }


    // *для страницы прелимс брать данные из таблицы Info в БД
    ////////////////////////////////////////////////////////////////////////
        
    // etf info by id
    public function get_etf_info_by_id($id) {
        $info_by_id = $this->conn->query("SELECT * FROM etf_info WHERE id = $id");
        return $info_by_id;
    }

    // name and code by id
    public function get_etf_name_by_id($id) {
        $etf_info = $this->conn->query("SELECT * FROM etf_info WHERE id = $id");
        foreach ($etf_info as $etf_infosy) {
            return $etf_infosy["name_id"];
            return $etf_infosy["code_id"];
        }
    }

    public function get_etf_specializations() {
        $specializations = $this->conn->query("SELECT * FROM etf_specializations");
        return $specializations;
    }
    
    // etf specializations by id
    public function get_etf_specializations_by_id($id) {
        $specializations_by_id = $this->conn->query("SELECT etf_specializations.id, etf_info.name, new_name, etf_info.code, exam_1, exam_2, exam_3, text_about, qualification, field_activity_1, field_activity_2, field_activity_3, video FROM etf_specializations JOIN etf_info ON etf_specializations.id = etf_info.id WHERE etf_specializations.id = $id");
        foreach ($specializations_by_id as $specialization_by_id) {
            return $specialization_by_id;
        }
    }

    // etf info by id
    public function get_qualification_by_id($id) {
        $qualifications_by_id = $this->conn->query("SELECT * FROM qualifications WHERE id = $id");
        foreach ($qualifications_by_id as $qualification_by_id) {
            return $qualification_by_id;
        }
    }

    // bosses info by id
    public function get_bosses_by_id($id) {
        $bosses_by_id = $this->conn->query("SELECT bosses.id, bosses.photo, qualifications.fio, qualifications.post, tel_first, tel_second, email FROM bosses JOIN qualifications ON bosses.id = qualifications.id WHERE bosses.id = $id");
        foreach ($bosses_by_id as $boss_by_id) {
            return $boss_by_id;
        }
    }

    public function get_etf_questions() {
        $questions = $this->conn->query("SELECT * FROM questions");
        return $questions;
    }

    public function get_timetables() {
        $timetables = $this->conn->query("SELECT * FROM timetable");
        return $timetables;
    }

    public function get_sports() {
        $sports = $this->conn->query("SELECT * FROM sports");
        return $sports;
    }

    public function get_peculiarity() {
        $peculiarity = $this->conn->query("SELECT * FROM peculiarity");
        return $peculiarity;
    }

    public function get_news() {
        $news = $this->conn->query("SELECT * FROM news");
        return $news;
    }

    public function get_signup() {
        $entrant = $this->conn->query("SELECT * FROM signup");
        return $entrant;
    }

    // Users data
    public function get_user_data($email) { 
        $usersData = $this->conn->query("SELECT * FROM entrants_info WHERE id = $email");
        return $usersData;
    }
  }