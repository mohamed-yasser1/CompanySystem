<?php 
include '../shared/header.php';
include '../shared/navbar.php';
include '../genaral/conn.php';
include '../genaral/functions.php';

if(isset($_GET['edit'])){
    $id =$_GET['edit'];
    $selectEmp ="SELECT * from employee where id=$id";
    $employee = mysqli_query($conn , $selectEmp);
    $row =mysqli_fetch_assoc($employee);
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $depID = $_POST['depID'];

        if(empty($_FILES['image']['name'])){
            $image_name =$row['image'];
        }else{
            $image_name =time(). $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $location ="./upload/";
            move_uploaded_file($tmp_name , $location . $image_name);
        }
    
        // Image Code :
    
    
       
    
    
        $update ="UPDATE `employee` SET `name`='$name',`email`='$email',`image`='$image_name',`depID`='$depID' WHERE id=$id";
        $i= mysqli_query($conn,  $update);
        echo testMessage($i , "update Employee ");
    }
}


     



//ودهاللي موج department id  عشان اخليه يختار من 
$select = "SELECT * FROM `department`";
$department= mysqli_query($conn , $select);

auth();
?>


<h1 class="text-center display-4">Update Employee : <?php echo $row['name']  ?> </h1>


<div class="container col-6">
    <div class="card">
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Employee Name</label>
                    <input value=" <?php echo $row['name']  ?>" name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Employee Email</label>
                    <input value=" <?php echo $row['email']  ?>" name="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image profile :<img width="20" src="/Taskes-Instant/weak4/employee/upload/<?php $row['image']?>" alt=""> </label>
                    <input name="image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <!-- <input name="depID" type="text" class="form-control"> -->

                    <select class="form-control" name="depID" >
                        <?php foreach($department as $data){ ?>
                        <option value="<?php echo $data['id']  ?>"> <?php echo $data['depName']  ?></option>
                        <?php } ?>
                    </select>
                </div>

                <button name="update" class="btn btn-info">Update Data </button>
            </form>
        </div>
    </div>
</div>


<?php  
include '../shared/footer.php'

?>

