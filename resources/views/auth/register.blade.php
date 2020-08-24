<!-- <!DOCTYPE html>
<html>
<head>
    <title>Halaman Register</title>
</head>
<body>

    <h1>Register</h1>

    <form method="post" action="/admin/register">
        @csrf

        <label>
            Name
            <input type="text" name="name">
        </label>
        <br>
        <br>

        <label>
            Email
            <input type="email" name="email">
        </label>
        <br>
        <br>

        <label>
            Password
            <input type="password" name="password">
        </label>
        <br>
        <br>

        <button>REGISTER</button>
    </form>

    <a href="/admin/login">Ke halaman Login >></a>


</body>
</html> -->

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

     <h2 style="color:white;">Register Form</h2>
     <form method="post" action="/admin/register">
      @csrf    
      <div class="scholarship">
           <label> 
             <i class="fas fa-envelope"></i>
             <input type="text" name="name" placeholder="nama...">
           </label>
      </div> 
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
        <a href="/admin/login">Log in</a>
        <a href="">Forgot Password</a>
     </div>
 </div>
     </form>

</body>
</html>