<?php
// connecting to database
$conn = mysqli_connect("localhost","root", "chatbot") or die("Database Error");
//getting user message through ajax
$getMesg = mysqli_real_escape_string($conn,$_POST['text']);

//checking user query to database query
$check_data ="SELECT replies FROM chatbot WHERE queries LIKE'%GETMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query watched to database query we`ll show reply otherwise it go to else statement
if(mysqli_num_rows($run_query)>0){
    //fectching reply from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing reply to a varible which we`ll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
}
else{
    echo "Sorry can't be able to understand you";
}
?>