<?php

class DB
{
    private var $servername = "localhost";
    private var $username = "forge";
    private var $password = "secret";
    private var $db = "attendance";

    /**
    *   Connects to database & returns Connection Object
    */
    public function getConnection ()
    {
    	// Create connection
    	$conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
    	// Check connection
    	if ($conn->connect_error) {
    	    die("Connection failed: " . $conn->connect_error);
    	}
    	return $conn;
    }

}
