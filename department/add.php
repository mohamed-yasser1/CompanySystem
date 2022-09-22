<?php 
include '../shared/header.php';
include '../shared/navbar.php';
include '../genaral/conn.php';
include '../genaral/functions.php';
// session_start();


if(isset($_POST['send'])){
    $depName = $_POST['depName'];
    $manageName = $_POST['manageName'];
    $numEmp = $_POST['numEmp'];

    $insert ="INSERT INTO `department` VALUES (null,'$depName','$manageName',$numEmp)";
    $i= mysqli_query($conn, $insert);
    echo testMessage($i , "good work");
}

     

//ودهاللي موج department id  عشان اخليه يختار من 
$select = "SELECT * FROM `department`";
$department= mysqli_query($conn , $select);

auth();
?>


<h1 class="text-center display-4">Add Department Page</h1>


<div class="container col-6">
    <div class="card">
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Department Name</label>
                    <input name="depName" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Manager Name</label>
                    <input name="manageName" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Number Of Employee</label>
                    <input name="numEmp" type="text" class="form-control">
                </div>
                

                <button name="send" class="btn btn-info">Send Data </button>
            </form>
        </div>
    </div>
</div>


<?php  
include '../shared/footer.php'

?>

