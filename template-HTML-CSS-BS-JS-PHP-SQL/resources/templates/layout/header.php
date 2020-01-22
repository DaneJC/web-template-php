<!-- set <title>"To page basename"</title> -->

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Web Template <?="&ndash;{$title}" ?? ''; ?></title>
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
   <!-- if calling view has custom CSS: -->
   <?php if (isset($cssFile)): ?>
      <!-- load associated CSS file -->
      <link href="/css/<?=$cssFile?>.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
   <?php endif; ?>





</head>
<body>

   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="/index.php">Template</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="/link_a.php">Link A</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/link_b.php">Link B</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/link_c.php">Link C</a>
            </li>
         </ul>
      </div>
   </nav>
   <div class="container jumbotron mt-2">
