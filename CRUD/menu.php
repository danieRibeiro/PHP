<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    App Help Desk
  </a>
  <div class="d-flex justify-content-evenly">
    <p class="text-light pr-2"><?php echo $_SESSION['email']?></p>
    <a href="logoff.php">
      Sair
    </a>
  </div>
  
</nav>