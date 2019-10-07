<?php

function open_database (){
	try {
		$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	catch (PDOException $exc){
		echo $exc->getMessage();
		return null;
	}
}
function close_database($pdo){
	try {
		unset($pdo);
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
}

function find($table=null, $id=null){
	$database = open_database();
	$found = null;

	try
	{
		if ($id)
		{
			$sql = $database->prepare("SELECT * FROM ".$table." WHERE id= :id;");
			$sql->bindParam(':id', $id, PDO::PARAM_INT);
			$sql->execute();
			if($sql->rowCount() > 0)
			{
				$found = $sql->fetch(PDO::FETCH_ASSOC);
			}
		}
			else 
			{
				$sql = $database->prepare("SELECT * FROM ".$table);
				$sql->execute();

				if ($sql->rowCount() > 0)
				{
					$found = $sql->fetchall();
				}
			}
	}
		catch (Exception $e)
		{
			$_SESSION['message'] = $e->GetMessage();
			$_SESSION['type'] = 'danger';
		}
		close_database($database);
		return $found;
	}
	function find_all($table)
	{
		return find($table);
	}
	 function remove ($table = null, $id = null)
	 {
		 $database = open_database();
	 }
?>