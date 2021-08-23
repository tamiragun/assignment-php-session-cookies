<?php

//Check if there is no cookie set but there is form data
//(i.e. a brand new user/session

if (!isset($_COOKIE["full_name"]) && isset($_POST["full_name"])){
    

    setcookie( 'full_name' , $_POST["full_name"] , time() + ( 60 * 60 * 24 ), '/' );
    setcookie( 'username' , $_POST["username"] , time() + ( 60 * 60 * 24 ), '/' );
    setcookie( 'date_of_birth' , $_POST["date_of_birth"] , time() + ( 60 * 60 * 24 ), '/' );
    
    //redirect to the next page where the cookie will be used to display
    header("Location: /user2b.php");
    exit;
    
  //If there is already a cookie set, redirect to the display page
  //(i.e. a logged in user revisiting this page after navigating elsewhere)
} else {
    header("Location: /user2b.php");
    exit;
}


?> 