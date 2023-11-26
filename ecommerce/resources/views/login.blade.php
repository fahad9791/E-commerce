<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{ route('login_submit') }}" method="POST">
        <table align="center">
            <tr>
                <br>
                <th>Login</th>
            </tr>
            <tr>
                <td>
                    <br>
                    <label>Email:</label>
                </td>
                <td>
                    <br>
                    <input type="email" name="email" placeholder="Enter your eamil" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <label>Password:</label>
                </td>
                <td>
                    <br>
                    <input type="password" name="password" placeholder="Enter your password" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="checkbox" name="rememberme" value="">Remember Me
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="submit" name="login" value="Login">
                </td>
                <td>
                    <br>
                    <a href="#">Forget Your Password</a>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <a href="{{ route('registration') }}">Create an acoount</a>
                </td>
            </tr>
        </table>
    </form>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>