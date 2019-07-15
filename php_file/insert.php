<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "languages_rating";

//database connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql="INSERT INTO languages_rating_user_info (FirstName, MiddleName, LastName, email, sex, m_number, addr, city, stat, radC, radCplus, radJava, radPython)
        VALUES ('$_POST[first_name]','$_POST[middle_name]','$_POST[last_name]','$_POST[email]', '$_POST[sex]','$_POST[m_number]','$_POST[h_address]',
                '$_POST[city]','$_POST[states]','$_POST[optRadioC]','$_POST[optRadioCplus]','$_POST[optRadioJava]','$_POST[optRadioPython]')";


if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);

?>