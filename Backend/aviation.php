<?php 
include $_SERVER['DOCUMENT_ROOT'].'/Backend/connect.php';
  if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])){
    $list = [];
    foreach($_POST['check_list'] as $selected){
      $list[] = $selected;
      $arr_list = implode("\n",$list);
      $sql =" INSERT INTO `aviation`(`check_list`) VALUES ('$arr_list')";
  
        $result = mysqli_query($con, $sql);
      
      if($result){
        echo " <script> alert('your selected list are updated')  </script>  ";
      }else{
        echo "<script> alert('something went to wrong')  </script> ";
      }
    
      
    }
}else{
    echo " <script> alert('please select at least one option')  </script>  ";
}
   
    
  }  
  
  ?>