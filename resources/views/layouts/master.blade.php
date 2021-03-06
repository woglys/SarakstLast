<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saraksti</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="//js.pusher.com/2.2/pusher.min.js"></script>
  <script src="/js/pusher.js"></script>
  <link rel="stylesheet" href="/css/bootswatch.min.css">
  <link rel="stylesheet" href="/css/styles.css">
  @if(Route::currentRouteName() == 'home')
    <link rel="stylesheet" href="/css/home.css">
  @endif
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
</head>
<body background="http://searchpartygraphics.com/design/blogs/owl.jpg">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a class="navbar-brand" href="/">Saraksti</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::Route('lists.index') }}">Jūsu saraksti</a></li>
        <li><a href="/about">Par projektu</a></li>
          @if(Auth::check())
            <li><a href="">Sveiki, {{ Auth::user()->name }}!</a></li>
            <li><a href="/auth/logout">Iziet</a></li>
          @else
            <li><a href="/auth/register">Reģistrēties</a></li>
            <li><a href="/auth/login">Ieiet</a></li>
          @endif
        
      </ul>
    </div>

  </div>
</nav>

  <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
    <div class="row">
      <div class="col-md-12">

        <div id="pusher"></div>

        @if(Session::has('message'))
            <div class="alert alert-info">
              {{Session::get('message')}}
            </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
          @yield('content')
      </div>
    </div>

  </div>
    @yield('footer_js')

</body>
</html>
