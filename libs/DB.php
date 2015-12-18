<?php

/**
*   @author Emad Ehsan
*   @license GNU Public License
*
*   DB class holds generic methods for DB communication
*/
class DB
{
    private var $servername = "localhost";
    private var $username   = "prs";
    private var $password   = "secret";
    private var $dbname     = "prs";

    /**
    *   Holds Database Connection Object
    */
    private var $conn = null;

    /**
    *   Connects to database & sets Connection Object
    */
    private function connect ()
    {
    	// Create connection
    	$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    	// Check connection
    	if ($conn->connect_error) {
    	    die("Connection failed: " . $conn->connect_error);
    	}
    	$this->conn = $conn;
    }

    /**
    *   Sets connection Object $conn if not already set
    *   @return connection object
    */
    public function getConnection()
    {
        if ( $this->conn == null )
	    $this->connect();
        return $this->conn;
    }


}
