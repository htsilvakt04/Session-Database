<?php 
try {
	$db = new PDO("mysql:host=localhost;dbname=persistent", 'sess_admin', 'secret');
} catch (Exception $e) {
	$error = $e->getMessage();
}