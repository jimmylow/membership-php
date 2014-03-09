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

    session_start();

    $uid = $_SESSION['uid'];
    $pwd = $_SESSION['pwd'];

	require('main.php');

	db_connect();

	include(INC_DIR."header.php");


		if ($uid){

			echo "<br>already logged in";

		} else {

			echo "<br><Span Class=emph>Members Log In</SPAN>";

    			include(INC_DIR."login.php");

			echo "<Span Class=emph>Not a Member? Join Now!</SPAN>";

    			include(INC_DIR."signup.php");

		}


	include(INC_DIR."footer.php");

	db_disconnect();

?>