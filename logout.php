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
    unset($_SESSION['uid']);
    unset($_SESSION['pwd']);

	require('main.php');

	db_connect();

	include(INC_DIR."header.php");
	echo "<br><b>User Logged Out</b> - Thanks for visiting!";
    	include(INC_DIR."login.php");
	include(INC_DIR."footer.php");

	db_disconnect();

?>