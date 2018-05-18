<?php
function getBirthday($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));
	$db = null;
	return $query->fetch();
}

function getAllBirthdays() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays ORDER BY maand, dag, jaar";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();

}

function editBirthday() {
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$maand = isset($_POST['maand']) ? $_POST['maand'] : null;
	$dag = isset($_POST['dag']) ? $_POST['dag'] : null;
	$jaar = isset($_POST['jaar']) ? $_POST['jaar'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($person) == 0 && strlen($maand) == 0 && strlen($dag) == 0 && strlen($jaar) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET person = :person, maand = :maand, dag = :dag, jaar = :jaar WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':maand' => $maand,
		':dag' => $dag,
		':jaar' => $jaar,
		':id' => $id));
	$db = null;
	return true;
}

function deleteBirthday($id = null) {
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	return true;
}

function createBirthday() {
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$dag = isset($_POST['dag']) ? $_POST['dag'] : null;
	$maand = isset($_POST['maand']) ? $_POST['maand'] : null;
	$jaar = isset($_POST['jaar']) ? $_POST['jaar'] : null;
	
	if (strlen($person) == 0 || strlen($dag) == 0 || strlen($maand) == 0 || strlen($jaar) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO birthdays(person, dag, maand, jaar) VALUES (:person, :dag, :maand, :jaar)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':dag' => $dag,
		':maand' => $maand,
		':jaar' => $jaar));
	$db = null;
	return true;
}

