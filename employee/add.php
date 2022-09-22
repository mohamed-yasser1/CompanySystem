<?php 
include '../shared/header.php';
include '../shared/navbar.php';
include '../genaral/conn.php';
include '../genaral/functions.php';
// session_start();


if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $depID = $_POST['depID'];

    // Image Code :
$image_name =time(). $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$location ="./upload/";
 move_uploaded_file($tmp_name , $location . $image_name);
   


    $insert ="INSERT INTO `employee` VALUES (null,'$name','$email','$image_name',$depID)";
    $i= mysqli_query($conn, $insert);
    echo testMessage($i , "good work");
}

     

//ودهاللي موج department id  عشان اخليه يختار من 
$selectdep = "SELECT * FROM `department`";
$department= mysqli_query($conn , $selectdep);

auth();
?>


<h1 class="text-center display-4">Add Employee Page</h1>


<div class="container col-6">
    <div class="card">
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Employee Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Employee Email</label>
                    <input name="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image profile</label>
                    <input name="image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Department Id</label>
                    <!-- <input name="depID" type="text" class="form-control"> -->

                    <select class="form-control" name="depID" >
                        <?php foreach($department as $data){ ?>
                        <option value="<?php echo $data['id']  ?>"> <?php echo $data['depName']  ?></option>
                        <?php } ?>
                    </select>
                </div>

                <button name="send" class="btn btn-info">Send Data </button>
            </form>
        </div>
    </div>
</div>


<?php  
include '../shared/footer.php'

?>

