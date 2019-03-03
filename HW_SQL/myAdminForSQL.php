<!DOCTYPE html>
<html>
<head>
		
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />

	<title></title>
</head>
<body>



<form method="POST">
	<textarea name="sql" rows=10 style="width: 50%">enter ...</textarea><br/>
		<input type="submit" value='Run...'>

</form>

<?php 

$dbhost = "localhost";
$dbname = "register";
$username = "php";
$password = "toor";
$sql = '';
 if(isset($_POST['sql'])){
 	$sql = $_POST['sql'];
}
$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);
	$users = $db->query($sql);
 print('<table>');
  foreach($users as $us){
        print_r('<tr>');
        foreach($us as $key => $u){
            if (is_numeric($key))
            print_r('<td>'. $u .'</td>');
        }
       print_r('</tr>');    
    }
    print('</table>');
?>

</body>
</html>