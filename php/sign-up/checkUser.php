<?php
include ('../../connect.php');
    $query="Select * from member";
    $member = mysqli_query($connect,$query);
    $row = mysqli_num_rows($member);
    $arr1 = array();
    $arr2 = array(); 
    $arr3=array();
    while($mb = mysqli_fetch_assoc($member)){
        if($mb['email'] == $_POST['email'] || $mb['phone']== $_POST['phone']){
            array_push($arr1,0);
        }
        else{
            array_push($arr2,1);
        }
    }


    $arr3=array_merge($arr1,$arr2);
    $arr4 = json_encode($arr3);
    echo $arr4;
?>