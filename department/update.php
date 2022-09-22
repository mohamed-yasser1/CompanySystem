<?php 
include '../shared/header.php';
include '../shared/navbar.php';
include '../genaral/conn.php';
include '../genaral/functions.php';

if(isset($_GET['edit'])){
    $id =$_GET['edit'];
    $selectEmp ="SELECT * from department where id=$id";
    $employee = mysqli_query($conn , $selectEmp);
    $row =mysqli_fetch_assoc($employee);
    if(isset($_POST['update'])){
        $depName = $_POST['depName'];
        $manageName = $_POST['manageName'];
        $numEmp = $_POST['numEmp'];

        
    
        // Image Code :
    
    
       
    
    
        $update ="UPDATE `department` SET `depName`='$depName',`manageName`='$manageName',`numEmp`='$numEmp' WHERE id=$id";
        $i= mysqli_query($conn,  $update);
        echo testMessage($i , "update Employee ");
    }
}


     



//ودهاللي موج department id  عشان اخليه يختار من 
$select = "SELECT * FROM `department`";
$department= mysqli_query($conn , $select);

auth();
?>


<h1 class="text-center display-4">Update Department : <?php echo $row['depName']  ?> </h1>


<div class="container col-6">
    <div class="card">
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Department Name</label>
                    <input value=" <?php echo $row['depName']  ?>" name="depName" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Manager Name</label>
                    <input value=" <?php echo $row['manageName']  ?>" name="manageName" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Number Of Employee</label>
                    <input value=" <?php echo $row['numEmp']  ?>" name="numEmp" type="text" class="form-control">
                </div>
               

                <button name="update" class="btn btn-info">Update Data </button>
            </form>
        </div>
    </div>
</div>


<?php  
include '../shared/footer.php'

?>

