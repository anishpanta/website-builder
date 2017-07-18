<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Password change :: zWebbed</title>
    <link href="/start/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/start/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <a href="/login"><img src="/start/images/logo.png"/></a>
            <p>Change Password</p>
            @if(Session::has('success'))
                  <div class="alert alert-success">
                          {!! Session::get('success') !!}
                  </div>
                @endif
              @if(Session::has('error'))
                  <div class="alert alert-error">
                          {!! Session::get('error') !!}
                  </div>
                @endif
            <label for="inputEmail" class="">Username</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus><br/>
            <label for="inputPassword" class="">New Password</label>
            <input type="password" id="inputPassword" class="form-control" name="newpassword" placeholder="New Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
      </form>

    </div> 
  </body>
</html>




