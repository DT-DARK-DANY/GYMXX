<?php
if(!empty($_REQUEST['fn'])){
    $question="number is not allow?";
    $question2="Accepted";
    $q=$_REQUEST['fn'];
    $sugg = "";
    if($q !== ""){
    if(!preg_match("/^[A-Za-z]+$/",$q)){
        $sugg = $question;
    }else{
        $sugg = $question2;
}
}
echo  $sugg;
}
elseif(!empty($_REQUEST['ls'])){
  
    $question="number is not allow?";
    $question2="Accepted";
    $q= $_REQUEST['ls'];
    $sugg = "";
    if($q !== ""){
    if(!preg_match("/^[A-Za-z]+$/",$q)){
        $sugg = $question;
    }else{
        $sugg = $question2;
}
}
echo  $sugg;

}
elseif(!empty($_REQUEST['em'])){
  
    $question="... @example.com";
    $question2="Accepted";
    $q= $_REQUEST['em'];
    $sugg = "";
    if($q !== ""){
    if(!preg_match("/[a-zA-Z0-9_-]+@[a-zA-Z0-9-]+.[a-zA-Z]+/",$q)){
        $sugg = $question;
    }else{
        $sugg = $question2;
}
}
echo  $sugg;
}elseif(!empty($_REQUEST['US'])){

    $question="Invalid";
    $question2="Accepted";
    $q= $_REQUEST['US'];
    $sugg = "";
    if($q !== ""){
    if(!preg_match("/^[A-Za-z]\w{1,10}$/",$q)){
        $sugg = $question;
    }else{
        $sugg = $question2;
}
}
echo  $sugg;
}elseif(!empty($_REQUEST['ps'])){
    session_start();
   $question="weak password";
    $question2="Strong password";
    $q= $_REQUEST['ps'];
    $sugg = "";
    if($q !== ""){
        $_SESSION['pass']=$q; 
        if(!preg_match("/^[A-Za-z]\w{1,10}$/",$q) ||strlen($q) < 8) {
        $sugg = $question;
    }else{
        $sugg = $question2;
}
}
echo  $sugg;
}
elseif(!empty($_REQUEST['rps'])){
    session_start();
    $pss=$_SESSION['pass'];
    $question=" Correct";
    $question2="check that Repassword=password";
    $q= $_REQUEST['rps'];
    
    $sugg = "";
    if($q!==""){
        if($q !==$pss){
     $sugg = $question2;
    }else{
        $sugg = $question;
     }
    }
echo  $sugg;
}