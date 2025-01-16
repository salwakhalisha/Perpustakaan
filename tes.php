<?php

$pass1=password_hash('1234',PASSWORD_BCRYPT);
$pass2=password_hash('1234',PASSWORD_BCRYPT);

echo $pass1."<br>";
echo $pass2."<br>";

if(password_verify('1234',$pass1)){
    echo "valid";
}else{
    echo "invalid";
}