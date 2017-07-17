<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author asus
 */
class DB {
    private $_dbname;
    private $_dbuser;
    private $_dbpass;
    private $_dbhost;
    
    /**
     * object mysqli
     * @var type 
     */
    private $conn;
    
    private $result;


    public function setDbname($val) {
        $this->_dbname = $val;
    }
    
    public function getDbname() {
        return $this->_dbname;
    }
    
    
    
    public function setDbuser($val) {
        $this->_dbuser = $val;
    }
    
    public function getDbuser() {
        return $this->_dbuser;
    }
    
    public function setDbpass($val) {
        $this->_dbpass=$val;
    }
    public function getDbpass() {
        return $this->_dbpass;
    }
    
    public function setDbhost($val) {
        $this->_dbhost = $val;
    }
    public function getDbhost() {
        return $this->_dbhost;
    }
    
    
    public function connect() {
        if(!empty($this->_dbhost) && !empty($this->_dbname) && isset($this->_dbpass) && !empty($this->_dbuser))
        {
            $conn = new mysqli($this->_dbhost, $this->_dbuser, $this->_dbpass, $this->_dbname);
            $conn->set_charset('utf8');
            $this->conn = $conn;
        }
    }
    
    public function query($sql) {
        $this->result = $this->conn->query($sql);
    }
    
    
    public function all() {
        return $this->result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function one() {
        return $this->result->fetch_assoc();
    }
    
    
    public function find($tablename) {
        $this->result = $this->conn->query('select * from '.$tablename);
        return $this;
    }

}
