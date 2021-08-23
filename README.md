# Fictional register / login page

This was an assignment for the PHP portion of my coding bootcamp. It is a fictional register page that displays the user data based on whether they are logged in or not. It achieves this first with PHP session management, and secondly with cookies.

**Stack used**: PHP - HTML

## The brief
These were the detailed instructions for the assignment:

Sessions:
- Create three PHP scripts: home.html , user.php and logout.php.
- home.html should have a sign-up HTML form that takes a user’s full name, preferred username, and date of birth.
- Upon POST this data, the user.php script should initialise a session, store the posted data, and display it back to the user in a neat HTML list.
- It should also display a “logout” button that directs to logout.php.
- logout.php should end the session and show a link back to the home page.
- After logging out, an attempt to visit user.php should result in an error message.

Cookies:
- Implement the same logic as above, but by directly using cookies instead of PHP built-in session management.

## How to install this project
1. Clone this Github repository into a directory of your choice.
2. Within the project folde, open the session or the cookies subfolder, and then open the home.html page in your browser.
3. After playing around with that, open the other subfolder and open that subfolder's home.html in your browser.