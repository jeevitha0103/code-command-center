<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>login page</title>
    
  </head>
  <style>
     #uname{
    width:310px;
    height:40px;
    text-align: center;
    color:gray;
    }
    
    #pass{
    width:310px;
    height:40px;
    text-align: center;
    color:gray;
    }
    
    #button{
    width:310px;
    height:44px;
    background-color:rgb(70, 69, 69);
    color:white;
    font-weight: bold;

    border-style: none;
    border-radius: 10px;
    }
    #button:hover {
    background-color:#741f1f;
    transition: 0.7s;
    }
    h1 {
  color: brown;
    }
    .container{
        margin-top:50px;
    }
    .container{
        display:flex;
        flex-direction:column;
        align-items:center;
    }
  </style>
  <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="LOGO.jpg" width="60" height="60" alt="">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       
      
    
      
      
    
  </div>
  <p style="color:grey"><b>Code command center</b></p>
</nav>
    <div class="container">
        <h1>welcome to login</h1>
       <!-- <div class="form-group">-->
        <form name="login">
            
            <input id="uname" type="text" name="username" placeholder="Enter Username"><br><br>
            <input id="pass" type="password" name="password" placeholder="Enter Password"><br><br>
            <input id="button" type="button" value="login" onclick= "check(this.form)" name="submit"/>     
        </form>
        
        <script language="javascript">
           function check(form)
           {
         if(form.username.value == "camp" && form.password.value == "camp123")
              {
                window.open('codecenter.php');
                   }
              else
              {
                     alert("Error Password or Username");
                       }
           }
</script>
        <!--</div>-->
    </div>
    <p style="text-align: center;color:gray;font-size: 12px;">Copyright 2022 Camp Automation. All Rights Reserved.</p>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>