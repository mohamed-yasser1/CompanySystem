
<?php

function testMessage($conn , $msg){
    $returnMessage= "";
    if($conn){
        $returnMessage = "$msg true";

    }else{
        $returnMessage = "$msg false"; 
    }

    return $returnMessage;

}



// path to header

function path($go){
    echo "<script>
    window.location.replace('/Taskes-Instant/weak4/$go/')
    </script> ";
}



// admin

function auth(){
   
if(!isset($_SESSION['admin'])){
    path('admin/login.php'); 
}
}






?> 