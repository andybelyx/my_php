<?php

$conn = mysqli_connect("localhost","php","toor","kino");


$sqltab = "CREATE TABLE name_film (
id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
film VARCHAR(50) NOT NULL
)";

if ($conn->query($sqltab) === TRUE) {
    echo "Table created successfully name_film".PHP_EOL;
} else {
    echo "Error creating table: " . $conn->error;
}

	for($i = 5; $i < 10; $i++){

		if (!$conn) {
      		die("Connection failed: " . mysqli_connect_error());
		} echo "OK".PHP_EOL;

			$string = file_get_contents('http://api.lostcut.net/hdgo/videos?id='.$i);
			$exp = explode(",", $string);

			if($string != "[]") {
							$str = str_replace(['"',':','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',']','}'],"",$exp[1]);
						if($str != '') {
							$sql = "INSERT INTO name_film(film) VALUES ('$str')";
						}else continue;
			}else continue;

		if (mysqli_query($conn, $sql)) {
      		echo "$str".PHP_EOL;
		}else { 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		sleep(2);
	}



$sqltab = "CREATE TABLE director (
id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL
)";

if ($conn->query($sqltab) === TRUE) {
    echo "Table created successfully director".PHP_EOL;
} else {
    echo "Error creating table: " . $conn->error;
}

	for($i = 5; $i < 10; $i++){

		if (!$conn) {
      		die("Connection failed: " . mysqli_connect_error());
		} echo "OK".PHP_EOL;

			$string = file_get_contents('http://api.lostcut.net/hdgo/videos?id='.$i);
			$exp = explode(",", $string);

			if($string != "[]") {
$str = str_replace(['"',':','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',']','}'],"",$exp[7]);
						if($str != '') {
							$sql = "INSERT INTO director(name) VALUES ('$str')";
						}else continue;
			}else continue;

		if (mysqli_query($conn, $sql)) {
      		echo "$str".PHP_EOL;
		}else { 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		sleep(2);
	}



	$sqltab = "CREATE TABLE actor (
id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL
)";

if ($conn->query($sqltab) === TRUE) {
    echo "Table created successfully actor".PHP_EOL;
} else {
    echo "Error creating table: " . $conn->error;
}

	for($i = 5; $i < 10; $i++){

		if (!$conn) {
      		die("Connection failed: " . mysqli_connect_error());
		} echo "OK".PHP_EOL;

			$string = file_get_contents('http://api.lostcut.net/hdgo/videos?id='.$i);
			$exp = explode(",", $string);

			if($string != "[]") {
$str = str_replace(['"',':','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',']','}'],"",$exp[10]);
						if($str != '') {
							$sql = "INSERT INTO actor(name) VALUES ('$str')";
						}else continue;
			}else continue;

		if (mysqli_query($conn, $sql)) {
      		echo "$str".PHP_EOL;
		}else { 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		sleep(2);
	}



	$sqltab = "CREATE TABLE producer (
id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL
)";

if ($conn->query($sqltab) === TRUE) {
    echo "Table created successfully producer".PHP_EOL;
} else {
    echo "Error creating table: " . $conn->error;
}

	for($i = 5; $i < 10; $i++){

		if (!$conn) {
      		die("Connection failed: " . mysqli_connect_error());
		} echo "OK".PHP_EOL;

			$string = file_get_contents('http://api.lostcut.net/hdgo/videos?id='.$i);
			$exp = explode(",", $string);

			if($string != "[]") {
$str = str_replace(['"',':','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',']','}'],"",$exp[13]);
						if($str != '') {
							$sql = "INSERT INTO producer(name) VALUES ('$str')";
						}else continue;
			}else continue;

		if (mysqli_query($conn, $sql)) {
      		echo "$str".PHP_EOL;
		}else { 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	sleep(2);
	}



	$sqltab = "CREATE TABLE genre (
id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL
)";

if ($conn->query($sqltab) === TRUE) {
    echo "Table created successfully genre".PHP_EOL;
} else {
    echo "Error creating table: " . $conn->error;
}

	for($i = 5; $i < 10; $i++){

		if (!$conn) {
      		die("Connection failed: " . mysqli_connect_error());
		} echo "OK".PHP_EOL;

			$string = file_get_contents('http://api.lostcut.net/hdgo/videos?id='.$i);
			$exp = explode(",", $string);

			if($string != "[]") {
$str = str_replace(['"',':','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',']','}'],"",end($exp));
						if($str != '') {
							$sql = "INSERT INTO genre(name) VALUES ('$str')";
						}else continue;
			}else continue;

		if (mysqli_query($conn, $sql)) {
      		echo "$str".PHP_EOL;
		}else { 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			
		}
		sleep(2);
	}



mysqli_close($conn);
