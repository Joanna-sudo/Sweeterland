<?php

	function connect()
	{
		$connection = mysqli_connect('localhost', 'root', '', 'sweeterland');

		if(mysqli_errno($connection))
			die('Greska prilikom konekcije');

		return $connection;
	}

	function disconnect($connection)
	{
		mysqli_close($connection);
	}

?>