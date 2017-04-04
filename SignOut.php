<!DOCTYPE html>
<html>
<head>
    <title>FoodStanza</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
</head>
<body>
<?php
session_start(); 
unset($_SESSION['login_user']); 
session_destroy();
print_r($_SESSION); 
header("Location: index.php");
header("Cache-Control","no-cache,no-store,must-revalidate");
exit();
?>
</body>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</html>