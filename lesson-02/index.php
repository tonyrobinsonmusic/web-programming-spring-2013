<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
	 ?>

<?php
// this function calculates age based on date
function age($birthdate) {
	return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
    }
        $age = age('1963-12-01');
    
    if ($age > 21) {
    ?>
    <h2 style ="color:green">You are of age!, Have fun, but drink responsibly.</h2>
    
    <?php
    
    } else {
    ?>
    <h2 style="color:red">Sorry, you are too young. </h2>
    <?php
    }

    } else {
    ?>
    <form action="" method="post">
    <input name="birthdate" type="text">
    <input name="" type="submit">
    </form>
    <?php
	
}
?>
</body>
</html>