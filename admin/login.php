<?php 
include '../shared/header.php';
include '../shared/navbar.php';
include '../genaral/conn.php';
include '../genaral/functions.php';


$message= "";
if(isset($_POST['login'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
    // $newPassword =sha1($password);
    $select ="SELECT * FROM `admin` where email='$email' and password='$password'";
    $s =mysqli_query($conn , $select);
    $numRows =mysqli_num_rows($s);
    if($numRows > 0){
       $_SESSION['admin']=$email;
       path('/');
    }else{
       $message ="Worang data";
    }
    
}
     
if(isset($_SESSION['admin'])){
    path('/');
}



?>


<h1 class="text-center display-4">Login Page</h1>


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
                    <input name="password" class="form-control">
                </div>
                

                <button name="login" class="btn btn-info">LOGIN </button>
            </form>
        </div>
    </div>
</div>


<?php  
include '../shared/footer.php'

?>

