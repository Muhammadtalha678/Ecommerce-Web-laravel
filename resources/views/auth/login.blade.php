
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/assets/build/css/custom.min.css" rel="stylesheet">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

            <!-- Validation Errors -->
            <x-auth-validation-errors class="alert alert-danger mb-4" id="errors" :errors="$errors" />
            <script>
                    $("#errors").show();
                setTimeout(function() {
                    $("#errors").hide();
                }, 5000);
                // this can also be use $("#eee").show().delay(5000).fadeOut();

            </script>
              <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login Form</h1>
            <!-- Email Address -->
            <div>
                <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="form-control block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
          <div class="block mt-4">
                  <label for="remember_me" class="inline-flex items-center">
                      <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                      <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                  </label>
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                @if (Route::has('password.request'))
                    <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                @endif
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{route('register')}}" class="to_register"> Create Account </a>
                </p>
              </div>
       
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
