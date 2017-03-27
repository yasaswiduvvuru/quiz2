<?php
echo '<link href="../CSS/stylin.css" rel="stylesheet">';
?>

<?php
    if (!isset($_COOKIE['userdata'])) {
		$dat = unserialize($_COOKIE['userdata'])
?>
<p>Hi, <?php echo $dat['firstname'] ?>, you recently signed up with the email address: <?php echo $dat['email'] ?>, thank you! </p>
<?php } else { ?>
<form action="/register.php">
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  E-mail Address<br>
  <input type="text" name="email">
  <br><br>
  <input type="submit" name="subm" value="Submit">
</form> 

<?php } ?>