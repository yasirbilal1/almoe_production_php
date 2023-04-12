<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Application | Almoe Production</title>
  </head>
  <body>
    <h1>Almoe Production</h1>
    <p>This is sample test to perform CRUD on user images. I hope this sample test will fulfill all the requirements.</p>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
      <label for="image">Image:</label>
      <input type="file" name="image" id="image"><br><br>
      <label for="text">Text:</label>
      <input type="text" name="text" id="text"><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
