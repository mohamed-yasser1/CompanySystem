<?php 
include '../shared/header.php';
include '../shared/navbar.php';
include '../genaral/conn.php';
include '../genaral/functions.php';


$message= "";
if(isset($_POST['add'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
    $role =$_POST['role'];
    $insert= "INSERT INTO `admin` values (null ,'$email' ,'$password',$role )";
    $i = mysqli_query($conn , $insert);
     echo testMessage($i ,"insert Admin");

}

auth();
?>


<h1 class="text-center display-4">Add Admin Page</h1>


<div class="container col-6">
    <div class="card">
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Admin Email <span class="text-danger"> <?= $message ?> </span></label>
                    <input name="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Admin Password <span class="text-danger"> <?= $message ?> </span></label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Admin Role <span class="text-danger"> <?= $message ?> </span></label>
                    All Access<input name="role" type="radio" value="1">
                    Semi Access<input name="role" type="radio" value="2">
                    <!-- <input name="password" class="form-control"> -->
                </div>
                

                <button name="add" class="btn btn-info">Add Admin </button>
            </form>
        </div>
    </div>
</div>


<?php  
include '../shared/footer.php'

?>

