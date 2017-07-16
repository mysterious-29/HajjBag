<?php
// DB.class.php

class DB {
	
	protected $db_name = 'hajjdb';
	protected $db_user = 'root';
	protected $db_pass = 'root';
	protected $db_host = 'localhost';
	//$database='hajjdb';
	
	
	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.
	
	public function connect() {
	
		//$conn = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		$conn=mysqli_connect("localhost","root","root","hajjdb");

		//$db_handle = $conn->select_db('hajjdb');

		
		if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\
", mysqli_connect_error());
			exit();
		}
		return $conn;
		
	}

}