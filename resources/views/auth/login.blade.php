<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    @include('auth.style')
</head>
<body>
   
 <div class="turkiye">
        <div class="burlsari">
        <i class="fa fa-user"></i>
            
        </div>

     <h2 style="color:white;">Login Form</h2>
     <form method="post" action="/admin/login">
      @csrf    
     <div class="scholarship">
          <label> 
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" placeholder="email...">
          </label>
     </div> 
     <div class="scholarship">
          <label>
               <i class="fas fa-envelope"></i>
               <input type="Password" name="password" placeholder="Password...">
          </label>
               
     </div>

     
     <button type="submit" class="btn-login">Login</button>
     <div class="ytb">
        <a href="/admin/register">Register</a>
        <a href="">Forgot Password</a>
     </div>
 </div>
     </form>

</body>
</html>