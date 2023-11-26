<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style type="text/css">
      *{
          margin: 0;
          padding: 0;
          font-family: 'Poppins', sans-serif;
          box-sizing: border-box;
        }

        body{
          background: #080808;
          color: #fff;
        }

        #header{
          width: 100%;
          height: 100vh;
          background-image: url(images/background.jpg);
          background-size: cover;
          background-position: center;
        }
    </style>
  </head>
  <body>
    <div id="header">
      <center>
      <form action="" method="POST">
        <fieldset style="height: 50%; background: rgba(214, 76, 147, 0.4); padding: 39.5vh 0px; margin: 0px 600px">
          <label>Username:</label><br>
          <input type="text" name="username" placeholder="Enter your username" value=""><br>
          <label>Password:</label><br>
          <input type="password" name="password" placeholder="Enter your password" value=""><br><br>
          <input type="submit" name="submit" value="Login">
        </fieldset>
      </form>
  </center>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
</body>
</html>

