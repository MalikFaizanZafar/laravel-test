<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>FilmsWebsite</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="narrow-jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <nav class="navbar navbar-inverse">
<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Films Website</a>
  </div>
  <ul class="nav navbar-nav navbar-right">
    @if(Auth::guest())
    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    @endif
    @if(Auth::user())
    <li><a href="/add/film"><span class="glyphicon glyphicon-log-in"></span>Add a Film</a></li>
    <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    @endif
  </ul>
</div>
</nav>
  @foreach($films as $film)
  <div class="container">
      <img src="/images/{{$film->photo}}" class="col-md-4 col-md-offset-4"  alt="{{$film->name}} ">
      <h2>{{$film->name}} : {{substr($film->release_date,0,4)}}</h2>
      <br><br>
    <p><a class="btn btn-md btn-success" href="/films/{{$film->slug}}" role="button">Visit Movie Page</a></p><br><br><br>
  <br><br>

    @endforeach

    <br><br><br>

      <span class="col-md-offset-5">{{$films->links()}}</span>


    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
