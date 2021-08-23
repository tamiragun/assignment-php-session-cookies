<?php

session_start();

//Displays the error messages
function error($msg){
    echo '<p style="color:red;">'.$msg.'</p>';
}

//Check if there is no active session but there is form data 
//(i.e. a brand new user/session

if (!isset($_SESSION["full_name"]) && isset($_POST["full_name"])){
    
    //Define the session variables
    $_SESSION[ "full_name" ] = $_POST["full_name"] ;
    $_SESSION[ "username" ] = $_POST["username"] ;
    $_SESSION[ "date_of_birth" ] = $_POST["date_of_birth"] ;
    
    //Print the user's data to the page
    echo "<h1>Welcome. Your details are:</h1>
          <ul>
             <li>Full name: " . $_SESSION[ "full_name" ] . "</li>
             <li>Preferred username: " . $_SESSION[ "username" ] . "</li>
             <li>Date of birth: " . $_SESSION[ "date_of_birth" ] . "</li>
          </ul>
          <form action=\"/logout.php\">
                     <input type=\"submit\" value=\"Logout\" />
          </form>";

//Check if there is already and active session
//(i.e. a logged in user revisiting this page after navigating elsewhere)
} elseif (isset($_SESSION["full_name"])) {

    //Print the user's data to the page
    echo "<h1>Welcome. Your details are:</h1>
          <ul>
              <li>Full name: " . $_SESSION[ "full_name" ] . "</li>
              <li>Preferred username: " . $_SESSION[ "username" ] . "</li>
              <li>Date of birth: " . $_SESSION[ "date_of_birth" ] . "</li>
          </ul>
          <form action=\"/logout.php\">
              <input type=\"submit\" value=\"Logout\" />
          </form>";

//If there is no session going, and no new form data,
//(i.e. a logged out user revisiting this page after navigating elsewhere)
} else {
    
    //Print an arror message to the page and help them navigate back to the home
    error("Error. You are not logged in. <br><br>
            <a href=\"/home.html\">Back to home</a>");
}




?>