<?php
if(isset($_SESSION["user"]["loggedIn"])) {

print "<form action='account.php' method='post'> <p>Form for the account management</p> </form>";

}else{

//Display the login form

}
?>
