<?php
	class db_actions{
		private $server, $db_user, $db_pass, $db;
		public $connection;

		function __construct(){
			$this->server = "localhost";
			$this->db_user = "root";
			$this->db_pass = "";
			$this->db = "curso";
			$this->connection = new mysqli($this->server, $this->db_user, $this->db_pass, $this->db);
		}

		function connectionSuccess(){
			if($this->connection->connect_error) {
				return die("Ha fallado la conexión: " . $this->connection->connect_error);
			}

			return true;
		}

		function setInsertQuery($first, $last1, $last2, $email, $user, $password){
			return "INSERT INTO user (first, last1, last2, email, user, password) 
				VALUES ('$first', '$last1', '$last2', '$email', '$user', '$password')";
			//return 'INSERT INTO user () VALUES ($first, $last1, $last2, $email, $user, $password)';
		}

		function getAllUsersQuery(){
			return "SELECT first, last1, user from user";
		}
	}
?>