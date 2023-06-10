<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form for mySQL insertion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    body {background-color: coral;}  
  </style>  
  <body>
    <h1>Adding a Movie</h1>
    <div class="justify-content-center">
    <form action="Insert.php" method="POST">
        <div class="form-group">
        <label>Movie Name</label>
        <input type="text" name="MovieName" class="form-control" value="Enter your movies name">
        </div>
        <div class="form-group">
        <label>Movie Start</label>
        <input type="text" name="MovieStart" class="form-control" value="Enter when the movie starts (00:00:00) (hrs:mins:secs)">   
        </div>
        <div class="form-group">
        <label>Movie Length</label>
        <input type="text" name="MovieLength" class="form-control" value="Enter your movies Length (00:00:00) (hrs:mins:secs)">
        </div>
        <div class="form-group">
        <label>Date Released</label>
        <input type="text" name="DateReleased" class="form-control" value="Enter your movies Date Released (Year-Month-Day)">
        </div>
        <div class="form-group">
        <label>Director</label>
        <input type="text" name="Director" class="form-control" value="Enter your movies Director">
        </div>
        <div class="form-group">
        <label>Genre</label>
        <input type="text" name="Genre" class="form-control" value="Enter your movies Genre">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </div>    
    </form> 
    <form action="CA2.php">
    <button type="submit" class="btn btn-primary">Cinema DB</button>
    </form>
    </div>  

  </body>
</html>