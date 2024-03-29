<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting system</title>
        <!--Boostrap css link--->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class=bg-dark>

<h1 class="text-warning text-center p-4">Brightstar University Voting System</h1>
<div class="bg-warning">
    <h2 class="text-center p-3">LOGIN</h2>

    <div class="container">
    <div class="row">
           
           <div class="menu">
               
       </div>

       <div class="col-md-4 col-md-offset-4">
       
           <div class="login-panel"><!-- has form in it-->
               <div class="form-panel">
                   <i><b>Login As:</b></i>
                   <select onchange = "page(this.value)">
                       <option value = "admin2/index.php">System User</option>
                       <option selected disables>Student Voter</option> 
                   </select>
       
                   <form action="vote.php" role="form" method = "post" enctype = "multipart/form-data" class="index-form">
                       <div class="form-field">
                        <label for="username"><b>ID:</label><br/>
                        <input class="form-control" placeholder="Enter ID" name="idno" type="text" required = "required" autofocus>
                           </div>
                        <br/>
                           
                        <div class="form-field">
									<label for = "username" ><b>Password: </label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div>
                             <br/>

                          <button class="btn btn-lg btn-success btn-block " name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                           <p><strong>Don't have an account?</strong><a href="registration.php"><b> Register here</b></a></p>
                       
                        <br>
                           &nbsp;
                      </form>
        
    </div>
</div>

    
</body>
</html>