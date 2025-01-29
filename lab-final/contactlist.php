<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])){
          header("Location: admin-login.php");
          exit();
}
?>

<?php
include("header.php");
include("menu.php");
include("db_config.php")
?>

<html>
          <head></head>
          <body>
                    <p><a href="logout.php">LOG OUT</a></p>
                    <div id="contactlist">
                              <?php
                              $conn = new mysqli($servername,$username,$password,$dbName);

                              if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                              }

                              $sql = "select * from `user`";

                              if ($result = $conn->query($sql)) {
                              }
                              if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                                  echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Email:" . $row["email"]. " -subject: ". $row["subject"]. " message ".$row["message"]."<br>";
                                        }
                              } 
                              else {
                                        echo "0 results";
                              }
                              $conn->close();
                              ?>
                    </div>
          </body>
</html>
<?php
include("footer.php");
?>
