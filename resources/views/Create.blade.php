<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraTest</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/films/all">Films Website</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      @if(Auth::guest())
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @endif
      @if(Auth::user())
      <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @endif
    </ul>
  </div>
</nav>


<form class="col-md-6 col-md-offset-3" method="post" action="/films/add" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control"  name="name" id="name" aria-describedby="emailHelp" placeholder="Enter the name of the Film here" required>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control"  name="description" id="description" cols="12" rows="5" placeholder="Enter a few lines describing the film" required></textarea>
  </div>
  <div class="form-group ">
    <label for="release_date">Release Date</label>
    <input type="date" class="form-control" id="release_date" name="release_date" required>
  </div>
  <div class="form-group">
    <label for="rating">Rating</label>
    <select class="" name="rating" required>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ticket_price">Ticket Price</label>
    <input type="number" class="form-control" id="ticket_price" name="ticket_price" required>
  </div>

  <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" id="country" name="country" placeholder="Enter the name of the country here" required>
  </div>

  <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" class="form-control" id="genre" aria-describedby="genreHelp" name="genre" placeholder="Enter the name of categories separated with commas" required>
    <small id="genreHelp" class="form-text text-muted">Example : action,romance,comedy</small>
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo" required>
  </div>
  <button type="submit" class="btn btn-primary">Add This Film</button>
</form>

    </div>

  </div>
    </body>
</html>
