<?php
include '../shared/header.php';
include '../shared/navbar.php';
include '../genaral/conn.php';
include '../genaral/functions.php';


$select = "SELECT * FROM `department`";
$s= mysqli_query($conn , $select);


// Delete

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `department` WHERE id=$id";
    $d =mysqli_query($conn , $delete);
    path('department/list.php');
    // header("loction:/Taskes-Instant/weak4/employee/list.php");
}
auth(); 
?>



    <h1 class="text-center display-4 ">List Department</h1>

    <div class="container col-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                       <th> #ID</th>
                       <th> Name</th>
                       <th> Manager Name</th>
                       <th> Num employee</th>
                       <th> Action</th>
                    </tr>
                    <?php foreach($s as $data){ ?>
                    <tr>
                        <td> <?php echo $data['id'] ?> </td>
                        <td> <?php echo $data['depName'] ?> </td>
                        <td> <?php echo $data['manageName'] ?> </td>
                        <td> <?php echo $data['numEmp'] ?> </td>
                        <td> 
                            <!-- <a href="show.php?show=<?php echo $data['id'] ?>"><i class="fa-solid fa-eye"></i></a> -->

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="show.php?show=<?php echo $data['id'] ?>" type="button" class="btn btn-info ">Show More</a>
                            <a href="list.php?delete=<?php echo $data['id'] ?>" type="button" class="btn btn-danger">Delete</a>
                            <a href="update.php?edit=<?php echo $data['id'] ?>" type="button" class="btn btn-primary">Edit</a>
                        </div>
                    
                    
                    </td>

                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    


    <?php  
include '../shared/footer.php'

?>

    