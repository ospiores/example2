<?php

class User {
	private $pdo;

	public function __construct() {
		$this->pdo = new PDO( 'mysql:host=localhost;dbname=website', 'root', '');

	}
	public function create( $name, $email) {
		$stmt = $this->pdo->prepare( 'INSERT INTO 'users' ('name', 'email') VALUES ( :name, :email)' );
		$stmt->bindParam( 'name', $name, PDO::PARAM_STR );
		$stmt->bindParam( 'email', $email, PDO::PARAM_STR);
		RETURN $stmt->execute();

	}
}