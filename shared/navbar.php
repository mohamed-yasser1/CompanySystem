
<?php 

session_start();
if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
  header('location:/Taskes-Instant/weak4/admin/login.php');
}




?>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/Taskes-Instant/weak4">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php if(isset($_SESSION['admin'])) : ?>

      <li class="nav-item active">
        <a class="nav-link " href="/Taskes-Instant/weak4/admin/add.php" >
         Add Admin 
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
         employee 
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/Taskes-Instant/weak4/employee/list.php">List</a>
          <a class="dropdown-item" href="/Taskes-Instant/weak4/employee/add.php">Add</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
         Department
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/Taskes-Instant/weak4/department/list.php">List</a>
          <a class="dropdown-item" href="/Taskes-Instant/weak4/department/add.php">Add</a>
          
        </div>
      </li>
     <?php endif; ?>
    </ul>

    <?php if(isset($_SESSION['admin'])) : ?>
    <form class="form-inline my-2 my-lg-0">
      <button name="logout"class="btn btn-outline-danger mr-2 my-2 my-sm-0" type="submit">LOGOut</button>
      </form>
      <?php else :?>
      <a href="/Taskes-Instant/weak4/admin/login.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGIN</a>
     <?php endif; ?>
  </div>
</nav>
