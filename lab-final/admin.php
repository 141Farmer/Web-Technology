<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true){
          header("Location: contactlist.php");
          exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = $_POST['username'];
          $password = $_POST['password'];
    

          if ($username==="admin" && $password==="123456") {
                    $_SESSION['admin_logged_in']=true;
                    header("Location: contactlist.php");
                    exit();
          }
}

include("header.php");
include("menu.php");
?>

<html>
<head>
    <title>Admin login</title>
</head>
<body>
    <div id="admin">
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php include("footer.php"); ?>