<?php 
$na=$_POST["na"];
$ml=$_POST["ml"];
$ph=$_POST["ph"];
$web=$_POST["web"];
$zntxt=$_POST["zntxt"];
if(!(empty($ml)&&empty($zntxt))){

}else{
    echo "email and password fields is required";
    if(filter_var($ml,FILTER_VALIDATE_EMAIL)){
        $receiver="YOUR EMAIL USERNAME";
        $subject="From". $na ."<".$ml.">";
        $body ="Name : $na \n Email: $ml \n ente he enter this message to u $zntxt";
        $sender="FRom $ml";
        if(mail($receiver,$subject, $body, $sender)){

        }else{
            echo "enter a validate email";
        }

    }else{
        echo "enter a vildate email";
    }
}
?>