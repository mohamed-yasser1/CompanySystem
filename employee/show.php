<?php
    include '../shared/header.php';
    include '../shared/navbar.php';
    include '../genaral/conn.php';
    include '../genaral/functions.php';

    if(isset($_GET['show'])){
        $id =$_GET['show'];
        $select = "SELECT * FROM `employeejoinwithdepartment` where EmpId =$id";
        $s= mysqli_query($conn , $select);
        $row = mysqli_fetch_assoc($s);
    }



    auth();
?>

<h1 class="text-center display-4 ">Show Employee : <?php echo $row['EmpName']?> </h1>

<div class="container col-md-4">
    <div class="card">
    <img src="/Taskes-Instant/weak4/employee/upload/<?=  $row['EmpImage']  ?>" alt="">
        <div class="card-body">
            <h1><?php echo $row['EmpName'] ?></h1>
            <h6><?php echo $row['EmpEmail'] ?></h6>
            <h1><?php echo $row['depName'] ?></h1>
        </div>
                
    </div>
</div>
    


<?php  
include '../shared/footer.php'
?>


    