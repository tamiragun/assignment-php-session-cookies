<?php


//Displays the error messages
function error($msg){
    echo '<p style="color:red;">'.$msg.'</p>';
}


//Check if there is a cookie set, i.e. a new or returning visitor
if (isset($_COOKIE["full_name"])){
    
    
    //Print the user's data to the page
    echo "<h1>Welcome. Your details are:</h1>
          <ul>
            <li>Full name: " . $_COOKIE[ "full_name" ] . "</li>
            <li>Preferred username: " . $_COOKIE[ "username" ] . "</li>
            <li>Date of birth: " . $_COOKIE[ "date_of_birth" ] . "</li>
          </ul>
          <form action=\"/logout2.php\">
            <input type=\"submit\" value=\"Logout\" />
          </form>";
    
//Check if there is no cookie set, i.e. a logged out visitor or never signed up
} else {
    
    //Print an arror message to the page and help them navigate back to the home
    error("Error. You are not logged in. <br><br>
            <a href=\"/home2.html\">Back to home</a>");
}




?>