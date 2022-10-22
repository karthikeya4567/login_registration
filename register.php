<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style> 
        body{
          background-image: url('data:image/jpeg;base64,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');
          background-size: cover;
        }
        form{
          background-color:white;
          margin-top: 4em;
          margin-left: 20em;
          margin-right: 20em;
          padding:30px;
          box-shadow: 10px 10px 8px #000000;
          box-shadow: 10px 10px 8px 10px #364;
        }
        
    </style>

    <title>Registration</title>
</head>
<body>
      
    <div class="container"></div>
    <form method="POST">
    <h3>  <p style="text-align:center;">Registration Form </h3>
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="name">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Contact Number</label>
    <input type="number" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="number">
   
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="register">Submit</button>
  <br>
  Aready Registered? <a href="login.php">Login</a>
</form>
    </body>
</html>