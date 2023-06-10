<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    body {background-color: coral;}  
  </style>  
  <body>
    <h1>Deleting a Movie</h1>
    <div class="justify-content-center">
    <form action="Delete.php" method="POST">
        <div class="form-group">
        <label>ID</label>
        <input type="text" name="ID" class="form-control" value="Please enter the ID of the movie you want to remove (1,2,3)">
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="delete">Delete</button>
        </div>    
    </form>
    <form action="CA2.php">
      <button type="submit" class="btn btn-primary">Cinema DB</button>
    </form>
    </div>  

  </body>
</html>