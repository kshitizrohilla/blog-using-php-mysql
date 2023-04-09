<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Using PHP And MySQL</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css">
  </head>
  <body>
    <div class="top-bar">
      <span id="topBarTitle">Blog | All Posts</span>
    </div>

    <div class="all-posts-container">
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "blog_db";

      $conn = new mysqli($servername, $username, $password, $database);
      if($conn->connect_error) die("Connection Error" . $conn->connect_error);

      $sql = "select topic_title, topic_date, topic_para from blog_table;";
      $result = $conn->query($sql);

      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          echo "<div class='post-container'>";
          echo "<span id='displayTitle'>" . $row["topic_title"] . "</span><br>";
          echo "<span id='displayDate'>" . $row["topic_date"] . "</span><br><br>";
          echo "<span id='displayPara'>" . $row["topic_para"] . "</span><br>";
          echo "</div>";
        }
      }
      else
      {
        echo "<center><span>No Blog Posts Found</span></center>";
        // echo "<center><a style='color: dodgerblue;' href='index.html'>Write a New Post</a></center>";
      }
      $conn->close();
      echo "<br><center><a style='color: dodgerblue; text-decoration: none; background: dodgerblue; padding: 5px 25px; color: #fff; border-radius: 50px;' href='index.html'>Write a New Post</a></center><br>";
      ?>
    </div>
  </body>
</html>