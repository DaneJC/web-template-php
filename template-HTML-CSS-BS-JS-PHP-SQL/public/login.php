<?php require("../resources/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Web Template-Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- BS-CSS -->
   <link rel="stylesheet" type="text/css" media="all" href="/css/bs/bootstrap.css"/>
   <!-- FA -->
   <link rel="stylesheet" type="text/css" media="all" href="/css/fa/all.css"/>

   <!-- Custom CSS UNCOMMENT WHEN LIVE -->
   <!-- <link rel="stylesheet" type="text/css" media="all" href="../../public/css/main.css"/> -->
   <!--
   * COMMENT OUT OR REMOVE WHEN LIVE *
   development CSS link for lagging apache css modification recognition,
   use - $_SERVER['DOCUMENT_ROOT'] . '/public/css/main.css' when live.
-->
<link href="/css/main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

<style media="screen">
html, body {
   height: 100%;
}

.content {
   /* height: 100%; */
   display: -ms-flexbox;
   display: flex;
   -ms-flex-align: center;
   align-items: center;
   padding-top: 40px;
   padding-bottom: 40px;
   /* background-color: #f5f5f5; */
}

.form-signin {
   width: 100%;
   max-width: 330px;
   padding: 15px;
   margin: auto;
}
.form-signin .checkbox {
   font-weight: 400;
}
.form-signin .form-control {
   position: relative;
   box-sizing: border-box;
   height: auto;
   padding: 10px;
   font-size: 16px;
}
.form-signin .form-control:focus {
   z-index: 2;
}
.form-signin input[type="email"] {
   margin-bottom: -1px;
   border-bottom-right-radius: 0;
   border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
   margin-bottom: 10px;
   border-top-left-radius: 0;
   border-top-right-radius: 0;
}
</style>
</head>
<body>
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="/index.php">Template</a>
   </nav>
   <!-- content -->
   <div class="content my-auto">
      <!--# login card #-->
      <form class="form-signin">
         <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
         <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
         <label for="inputEmail" class="sr-only">Email address</label>
         <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
         <label for="inputPassword" class="sr-only">Password</label>
         <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
         <div class="checkbox mb-3">
            <label>
               <input type="checkbox" value="remember-me"> Remember me
            </label>
         </div>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
      </form>
   </div>
   <div id="footer" class="my-auto"><p><small> 2020 &copy; Dane Campbell | Web-Solutions </small></p></div>

</body>
</html>
