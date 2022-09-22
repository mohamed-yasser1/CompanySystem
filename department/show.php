

<?php
    include '../shared/header.php';
    include '../shared/navbar.php';
    include '../genaral/conn.php';
    include '../genaral/functions.php';

    if(isset($_GET['show'])){
        $id =$_GET['show'];
        $select = "SELECT * FROM `employeejoinwithdepartment` where depId =$id";
        $s= mysqli_query($conn , $select);
        $row = mysqli_fetch_assoc($s);
    }



    auth();
?>

<h1 class="text-center display-4 ">Show Department : <?php echo $row['depName']?> </h1>

<div class="container col-md-6">
    <div class="card">
        <h4 class="text-center mt-3 mb-5">  <?php echo $row['depName']?></h4>
    <h3>Number Employees In This Department : <?php echo $row['numEmp']?> </h3>
        <div class="card-body">
        <table class="table table-dark"> 
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php foreach($s as $data){ ?>
            <tr>
                <td> <?php echo $data['EmpName']?></td>
                <td> <?php echo $data['EmpEmail']?></td>
                
            </tr>
            <?php }  ?>
        </table>
        </div>
                
    </div>
</div>
    


<?php  
include '../shared/footer.php'
?>

