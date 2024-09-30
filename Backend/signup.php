<?php
include $_SERVER['DOCUMENT_ROOT']."/Backend/connect.php";

function inserData($nameArr, $tableName) {
    global $con;
    $data = [];

    foreach ($nameArr as $arr) {
        $data[$arr] = $_POST[$arr] ?? null; 
    }
    $email = $data['email'];
    // $name = $data['name'];

    $sql = "SELECT * FROM `$tableName` where `email` = '$email' ";
    $result = mysqli_query($con, $sql);
    
    if($result){
        $row = mysqli_num_rows($result);
        if($row > 0){
          echo " <script>
                  alert('email address already exists');
                  window.location.href = './signup.php';
                </script> ";
        }
    }
        
    $sql = "INSERT INTO $tableName(  `name`, `email`, `password`, `checkbox`) VALUES (?,?,?,?)";

    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, 'ssss', $data['name'], $data['email'], $data['password'], $data['checkbox']);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
     session_start();
     $_SESSION['name'] = $data['name'];
echo "
    <script>
    alert('Hello: " . $_SESSION['name'] . "');
    window.location.href = './signin.php';
    </script>";    
           
        
    } else {
        echo 'Error: ' . mysqli_error($con);
    }
    mysqli_stmt_close($stmt);
      

    return $data;
}
?>
 