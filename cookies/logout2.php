<?php

//Delete the cookies
setcookie( 'full_name' , "" , time() - ( 60 * 60 * 24 ), '/' );
setcookie( 'username' , "" , time() - ( 60 * 60 * 24 ), '/' );
setcookie( 'date_of_birth' , "" , time() - ( 60 * 60 * 24 ), '/' );

echo "<a href=\"/home2.html\">Back to home</a>";