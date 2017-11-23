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
    <a class="navbar-brand" href="/films/all">Films Website</a>
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
  <div class="container">
  <img src="/images/{{$film->photo}}" class=" col-md-4" alt="{{$film->name}}" width="800">
  <h2 >{{$film->name}} : {{substr($film->release_date,0,4)}}</h2>
  <p class="font-weight-bold">{{$film->description}}</p>
  <div class="jumbotron ">
      <h4>Rating : {{$film->rating}}</h4><br>
      <h4>Price : {{$film->ticket_price}} $</h4><br>
      <h4>Genre :{{$film->genre}}</h4>
  </div>
</div><br><br>



    </div> <!-- /container -->
    @if(Auth::user())
    <div class="container col-md-6 col-md-offset-3">
      <form method="post" action="/films/films/{{$film->id}}" >
        {{csrf_field()}}
        <div class="form-group">
          <label class="col-form-label" for="comment">Want to say something {{Auth::user()->name}} ? </label>
          <textarea class="form-control" id="comment" placeholder="Post your comment here" name="comment" required></textarea>
        </div>
        <div class="form-group col-md-3 col-md-offset-8">
          <input class="form-control" type="submit" value="Add Comment">
        </div>
      </form>
      @endif
    </div>
    <div class="container col-md-6 col-md-offset-3">
      @foreach($comments as $comment)
      <h4 class="col-form-label" for="comment">{{$comment->user->name}} said : </h4>
      <div class="jumbotron">
        <blockquote class="blockquote" id="comment" placeholder="Post your comment here" name="comment"><i>{{$comment->body}}</i></blockquote>
      </div>
      @endforeach
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
