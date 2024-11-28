<?php
    include 'db_connection.php'


    <?php
      
       echo $sfname = $_POST['rid']; 
       echo $slname = $_POST['rname'];
        echo $sjob = $_POST['job'];
       
       
               include 'DBCon.php';
               $sql="insert into student(rid,rname,job)values('{$sfname}','{$slname}','{$sjob}')";
               $result= mysqli_query($conn,$sql)or die("query An Unsuccessfully");
       
               mysqli_close($conn);
               header('location:index.php')
?>