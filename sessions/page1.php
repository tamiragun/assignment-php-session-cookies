<?php
setcookie( 'user_name' , 'Nkosi' , time() + ( 60 * 60 * 24 ), '/' );

echo "<p>Cookie is set.</p>" ;
echo '<a href="page2.php">Next page</a>'
?>