<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('/assets/css/signin.css')}}" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      {{Form::open(['route'=>'login','class'=>'form-signin'])}}

          <div class="row">
              @if ($errors->any())
              	<ul>
              		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
              	</ul>
              @endif
          </div>
          <div class="row">
              @if(Session::has('flash_message'))
                  {{Session::get('flash_message')}}
              @endif
          </div>

        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="1" name="remember"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      {{Form::close()}}

    </div> <!-- /container -->


  </body>
</html>
