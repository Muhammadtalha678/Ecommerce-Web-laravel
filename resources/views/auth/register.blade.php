
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
                 <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Register Form</h1>
            <!-- Name -->
            <div>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus class="form-control" placeholder="Username"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required class="form-control" placeholder="Email"/>
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" class="form-control" placeholder="Password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required class="form-control" placeholder="Confirm Password"/>
            </div>
            <div>
              <select name="role" class="form-control">
                <option value="admin">Admin</option>
                <option value="user">User</option>
              </select>
            </div>
            <div>
                <button class="btn btn-default submit">Submit</button>
              </div>
            <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="{{ route('login') }}" class="to_register"> Log in </a>
                </p>

              </div>
            
        </form>
          
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
