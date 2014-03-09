<?
#########################################################
# Simple Member                                         #
#########################################################
#                                                       #
# Created by: Doni Ronquillo                            #
#                                                       #
# This script and all included functions, images,       #
# and documentation are copyright 2003                  #
# free-php.net (http://free-php.net) unless             #
# otherwise stated in the module.                       #
#                                                       #
# Any copying, distribution, modification with          #
# intent to distribute as new code will result          #
# in immediate loss of your rights to use this          #
# program as well as possible legal action.             #
#                                                       #
#########################################################

	require('main.php');

	db_connect();
 	include(INC_DIR."header.php");

    $email = $_REQUEST['email'];

	if (isset($email)) {

	$sql="select * from users where email='$email'";
	$result=mysql_query($sql);
	$num_row=mysql_num_rows($result);

		if($num_row!=0) {
			$result = mysql_query("select pwd from users where email='$email'");
			$password = mysql_result($result, 0);

			$result = mysql_query("select uid from users where email='$email'");
			$username = mysql_result($result, 0);



			$msg = "

			Below is the password to your account.
			Keep this in a safe place.

			Your username is:   $username
			Your password is:   $password

			- Thank You

			";


			mail("$email", "Your Password for ".SITENAME, "$msg", "From:".FROMEMAIL." \nReply-To: ".FROMEMAIL."");
            echo "<br>Your password has been emailed to you!";

		} else {

			echo "<BR><CENTER><B>This email cannot be found in our database</B></cENTER>";

		}

	} else {

     echo "<br><b>To retrieve your username and password</b>, please supply your email address below and the username and password for that account will be emailed.<br><br>\n";
     echo "<form action=\"forgotpass.php\" method=\"post\"><b>Email: </b><input type=\"text\" name=\"email\" value=\"\"> ";
     echo "<input type=submit name=submit value=Submit></form><br>";

	}


	include(INC_DIR."footer.php");
	db_disconnect();
?>