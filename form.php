<!DOCTYPE html>
<html>
  <head>
    <title>D TECH Test</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="style.css"/>
    
    
</head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid nav-buttons">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">D Tech Pvt Ltd</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Register</a></li>
      
    </ul>
  </div>
</nav>
 
    <div class="col-sm-6 col-sm-offset-3">
      <h1>Form</h1>

      <form method="post" action="savedata.php" id="formValidation" > 
        <div id="name-group" class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required/>
         
        </div>

        <div id="email-group" class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com" required/>
          
          </div>

        <div id="email-group" class="form-group">
          <label for="mobile">Mobile:</label>
          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required/>
          
          </div>

        <div id="email-group" class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Type Valid Password" required/>
          
          </div>

        <button type="submit" class="btn btn-warning" >
          Register
        </button>
        <div id="submitted"></div>
        
      </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    
    <script type="text/javascript" src="form.js"></script>

  </body>
</html>