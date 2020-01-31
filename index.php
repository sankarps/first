<html>
<head>
</head>
<body>
	<p style="color:red; background-color: green">hi pulla</p>
<form method="post" action=<?php echo $_SERVER["PHP_SELF"] ?> > <!-- form tag is used to create text boxes, radio buttons,etc., -->
	<fieldset>
		<legend>BIO DATA</legend>
			<label for="first">FIRST NAME :</label>
			<input type="text" name="first"><br><br><br><!--input tag is used to get input as text or radio or dropdown list, etc., -->
			<label for="last">LAST NAME :</label>
			<input type="text" name="last"><br><br><br>
			<label for="mail">EMAIL :</label>
			<input type="text" name="mail"><br><br><br>
			<label for="numb">CONTACT NUMBER :</label>
			<input type="text" name="numb"><br><br><br>
		    GENDER:
			<input type="radio" name="gend" <?php if(isset($gen) && $gen=="male") echo 'checked'; ?>  value="male" >MALE<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gend"  <?php if(isset($gen)=="true") echo  
			"checked"; ?> value="female">FEMALE<br>
			<input type="submit"><br>
			<a href="https://www.w3schools.com">Click to go to web tutorial page</a>
		</fieldset>	
</form><br>

<?php echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
$a=5;
$b=7;
echo isset($gen)."hi";
echo "<br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$fname=test($_POST["first"]);
$lname=test($_POST["last"]);
$mail=test($_POST["mail"]);
$nu=test($_POST["numb"]);
$gen=test($_POST["gend"]);
}
function test($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	# code...

		if(empty($fname))
			echo "first name is required definitely";
		else
			echo "FIRST NAME :".$fname."<br>";
		if(empty($lname))
			echo "last name is required definitely";
		else
			echo "LAST NAME :".$lname."<br>";
		if(empty($mail))
			echo "mail is required definitely";
		else
			echo "MAIL :".$mail."<br>";
		if(empty($nu))
			echo "number is required definitely";
		else
			echo "CONTACT NUMBER :".$nu."<br>";
		if(empty($gen))
			echo "gender is required definitely";
		else
			echo "GENDER :".$gen."<br>";
}	
?>
</body>
</html>