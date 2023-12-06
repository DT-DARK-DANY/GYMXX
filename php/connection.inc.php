<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="gymx";
$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
$First_Name;
$Last_Name;
$Email;
$Username;
$password;
$Re_Password;
$Date_of_birth;
$ID;
$Usernamelog;
$Passwordlog;
///////////////registeration form///////////////////
if(isset($_POST['submit'])){
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Email=$_POST['Email'];
$Username=$_POST['Username'];
$password=$_POST['password'];
$Re_Password=$_POST['Re_Password'];
$Date_of_birth=$_POST['Date_of_birth'];
if(!preg_match("/^[A-Za-z]+$/",$First_Name)|| !preg_match("/^[A-Za-z]+$/",$Last_Name) || !preg_match("/[a-zA-Z0-9_-]+@[a-zA-Z0-9-]+.[a-zA-Z]+/",$Email) || !preg_match("/^[A-Za-z]\w{1,10}$/",$Username) || empty($password) || empty($Re_Password) || empty($Date_of_birth)){
echo "<script> alert('Invalid registeration'); window.location.href='Login and Registeration.php';</script>";

}else{
    if($password==$Re_Password){
$ID=rand(1,1000);
$sql ="INSERT INTO `security`(`First Name`, `Last Name`, `Email`, `Username`, `Password`, `Date_of_birth`,`ID`) VALUES ('$First_Name','$Last_Name','$Email','$Username','$password','$Date_of_birth','$ID');";
mysqli_query($conn,$sql);
echo "<script> alert('JOIN US SUCCESS'); window.location.href='Login and Registeration.php';</script>";
}else{echo "<script> alert('JOIN US FAILED REPASSWORD NOT EQUAL PASSWORD'); window.location.href='Login and Registeration.php';</script>";
}
}
}
//////////////////login form with circ//////////////////////////
if(isset($_POST['login'])){
    session_start();
    $_SESSION['Username']="";
    $_SESSION['kind']="";
    $_SESSION['start']="";
    $_SESSION['end']="";
    $_SESSION['firstname']="";
     $Usernamelog=$_POST['Username'];
    $Passwordlog=$_POST['Password']; 
    if(empty($Usernamelog)||empty($Passwordlog)){
        echo "<script> alert('Invalid login'); window.location.href='Login and Registeration.php';</script>";

    }else{

    $sql ="SELECT Password FROM `security` WHERE `Username` ='$Usernamelog';";
    $result = mysqli_query($conn,$sql);
    $dbuspassword;
    while($row=mysqli_fetch_array($result)){
        $dbuspassword=$row['Password'];
    }
 

    if($dbuspassword == $Passwordlog){
        $_SESSION['Username'] =  $Usernamelog;
        $sql3 ="SELECT * FROM `security` WHERE `Username` ='$Usernamelog';";
        $result1 = mysqli_query($conn,$sql3);
        while($row=mysqli_fetch_array($result1)){
            $_SESSION['firstname'] =$row['First Name'];
            $ID=$row['ID'];
        }
        $sql1 ="SELECT * FROM `plan` WHERE `ID` ='$ID';";
        $result2 = mysqli_query($conn,$sql1);

      while($row2=mysqli_fetch_array($result2)){
        if(!empty($row2)){
      $_SESSION['kind'] =$row2['kind_of_class'];
      $_SESSION['start'] =$row2['Date_of_start'];
      $_SESSION['end'] =$row2['Date_of_End'];
        }elseif(empty($row2)){
            $_SESSION['kind']="";
            $_SESSION['start']="";
            $_SESSION['end']="";
                }
           }
           
    
        header("Location:../Html/gymx.html?login=success");

    }else{
        header("Location:Login and Registeration.php?login=fail");
    }

 }}
/////////////////logout button////////////////////////////////////
 if(isset($_POST['logout'])){
    session_start();
    $_SESSION['firstname']="";
    $_SESSION['Username']="";
    $_SESSION['kind']="";
    $_SESSION['start']="";
    $_SESSION['end']="";
    header("Location:../Html/gymx.html?logout=success");
}
/////////////////////s page///////////////
///////////////////////////one month///////////////////////////////////
  if(isset($_POST['1_month'])){ 
    session_start();
    
     
     if(empty($_SESSION['Username'])){
        echo "<script> alert('please login or Registeration'); window.location.href='Login and Registeration.php';</script>";

     }else{
        $Usernamelog =$_SESSION['Username'];
        $kind="1 Month Unlimited";
        $price="$ 39.0";
        $sql3 ="SELECT * FROM `security` WHERE `Username` ='$Usernamelog';";
         $result1 = mysqli_query($conn,$sql3);
        while($row=mysqli_fetch_array($result1)){
        $ID=$row['ID'];
   $sql1 ="SELECT * FROM `plan` WHERE `ID` ='$ID';";
   $result2 = mysqli_fetch_array(mysqli_query($conn,$sql1));
   if(!empty($result2)){
    $date_of_start=date("Y-m-d");
    $date_of_end=date('Y-m-d', strtotime($date_of_start. ' + 30 days'));
    $sql2="UPDATE `plan` SET `kind_of_class`='$kind',`Date_of_start`='$date_of_start',`Date_of_End`='$date_of_end',`Price`='$price' WHERE `ID` ='$ID';";
    mysqli_query($conn,$sql2);
    $_SESSION['kind'] =$kind;
    $_SESSION['start'] =$date_of_start;
    $_SESSION['end '] =$date_of_end;
    echo "<script> alert('now you convert to another plan:1 Month Unlimited'); window.location.href='../Html/CLASSESS.html';</script>";

    }else{
$date_of_start=date("Y-m-d");
$date_of_end=date('Y-m-d', strtotime($date_of_start. ' + 30 days'));
$sql2="INSERT INTO `plan`(`ID`, `kind_of_class`, `Date_of_start`, `Date_of_End`, `Price`) VALUES ('$ID',' $kind','$date_of_start','$date_of_end',' $price');";
mysqli_query($conn,$sql2);
$_SESSION['kind'] =$kind;
$_SESSION['start'] =$date_of_start;
$_SESSION['end'] =$date_of_end;
echo "<script> alert('now you are in plan:1 Month Unlimited'); window.location.href='../Html/CLASSESS.html';</script>";
}}}
}
//////////////////////12 month////////////////////////////
elseif(isset($_POST['12_month']))
{ 
    session_start();
    if(empty($_SESSION['Username'])){
  
    echo "<script> alert('please login or Registeration'); window.location.href='Login and Registeration.php';</script>";

 }else{
    $Usernamelog =$_SESSION['Username'];
    $kind="12 Month unlimited";
    $price="$ 99.0";
    $sql3 ="SELECT * FROM `security` WHERE `Username` ='$Usernamelog';";
$result1 = mysqli_query($conn,$sql3);
while($row=mysqli_fetch_array($result1)){
    $ID=$row['ID'];
}
$sql1 ="SELECT * FROM `plan` WHERE `ID` ='$ID';";
$result2 = mysqli_fetch_array(mysqli_query($conn,$sql1));
if(!empty($result2)){
    $date_of_start=date("Y-m-d");
    $date_of_end=date('Y-m-d', strtotime($date_of_start. ' + 365 days'));
    $sql2="UPDATE `plan` SET `kind_of_class`='$kind',`Date_of_start`='$date_of_start',`Date_of_End`='$date_of_end',`Price`='$price' WHERE `ID` ='$ID';";
    mysqli_query($conn,$sql2);
    $_SESSION['kind'] =$kind;
    $_SESSION['start'] =$date_of_start;
    $_SESSION['end'] =$date_of_end;
    echo "<script> alert('now you convert to another plan:12 MONTH UNLIMITED'); window.location.href='../Html/CLASSESS.html';</script>";

}else{
$date_of_start=date("Y-m-d");
$date_of_end=date('Y-m-d', strtotime($date_of_start. ' + 365 days'));
$sql2="INSERT INTO `plan`(`ID`, `kind_of_class`, `Date_of_start`, `Date_of_End`, `Price`) VALUES ('$ID',' $kind','$date_of_start','$date_of_end',' $price');";
mysqli_query($conn,$sql2);
$_SESSION['kind'] =$kind;
$_SESSION['start'] =$date_of_start;
$_SESSION['end'] =$date_of_end;
echo "<script> alert('now you are in plan:12 MONTH UNLIMITED'); window.location.href='../Html/CLASSESS.html';</script>";

}}
}
/////////////////////////6month unlimted//////////////////////////////
elseif(isset($_POST['6_month']))
{ 
    session_start();
    
if(empty($_SESSION['Username'])){
    echo "<script> alert('please login or Registeration'); window.location.href='Login and Registeration.php';</script>";

 }else{
    $Usernamelog =$_SESSION['Username'];
    $kind="6 Month unlimited";
    $price="$ 59.0";
    $sql3 ="SELECT * FROM `security` WHERE `Username` ='$Usernamelog';";
$result1 = mysqli_query($conn,$sql3);
while($row=mysqli_fetch_array($result1)){
    $ID=$row['ID'];
}
$sql1 ="SELECT * FROM `plan` WHERE `ID` ='$ID';";
$result2 = mysqli_fetch_array(mysqli_query($conn,$sql1));
if(!empty($result2)){
    $date_of_start=date("Y-m-d");
    $date_of_end=date('Y-m-d', strtotime($date_of_start. ' + 180 days'));
    $sql2="UPDATE `plan` SET `kind_of_class`='$kind',`Date_of_start`='$date_of_start',`Date_of_End`='$date_of_end',`Price`='$price' WHERE `ID` ='$ID';";
    mysqli_query($conn,$sql2);
    $_SESSION['kind'] =$kind;
    $_SESSION['start'] =$date_of_start;
    $_SESSION['end'] =$date_of_end;
    echo "<script> alert('now you convert to another plan:6 MONTH UNLIMITED'); window.location.href='../Html/CLASSESS.html';</script>";

}else{
$date_of_start=date("Y-m-d");
$date_of_end=date('Y-m-d', strtotime($date_of_start. ' + 180 days'));
$sql2="INSERT INTO `plan`(`ID`, `kind_of_class`, `Date_of_start`, `Date_of_End`, `Price`) VALUES ('$ID',' $kind','$date_of_start','$date_of_end',' $price');";
mysqli_query($conn,$sql2);
$_SESSION['kind'] =$kind;
$_SESSION['start'] =$date_of_start;
$_SESSION['end'] =$date_of_end;
echo "<script> alert('now you are in plan:6 MONTH UNLIMITED'); window.location.href='../Html/CLASSESS.html';</script>";

}
}}

