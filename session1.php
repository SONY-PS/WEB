<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["username"] = "felix";
$_SESSION["email"] = "felix@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>
