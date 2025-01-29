<?php
include("header.php");
include("menu.php");
?>

<html>
          <head></head>
          <body>
                    <div id="contact">
                              <br><br><br>
                                        <form action="actionpage.php" method="post" onsubmit="return checkForm()">
                                                  <label for="name">Name:</label>
                                                  <input type="text" id="name" name="name" placeholder="Enter your name" required><br>

                                                  <label for="email">Email:</label>
                                                  <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

                                                  <label for="subject">Subject:</label>
                                                  <input type="text" id="subject" name="subject" placeholder="Enter subject" required><br>

                                                  <label for="message">Message:</label>
                                                  <textarea id="message" rows="4" name="message" placeholder="Enter your message" required></textarea><br>

                                                  <button type="submit">Submit</button>
                                        </form>
                    </div>
                    <script src="checkForm.js"></script>
          </body>
</html>
<?php
include("footer.php");
?>