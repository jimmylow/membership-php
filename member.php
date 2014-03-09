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

    session_start();

    if (!isset($_SESSION['uid'])) {
       $_SESSION['uid'] = $_REQUEST['uid'];
       $_SESSION['pwd'] = $_REQUEST['pwd'];
    }

    $uid = $_SESSION['uid'];
    $pwd = $_SESSION['pwd'];

	db_connect();

	$res = mysql_query("SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd' and status='active'");
	$re  = mysql_fetch_array($res);

    if(mysql_num_rows($res) != 0) {

	  include(INC_DIR."header.php");

      echo "<br><b>What? Did you actually think you might get something for becoming a member? Anyways, this is where you would put your member content.</b>";

	} else {

	include(INC_DIR."header.php");
    unset($_SESSION['uid']);
    unset($_SESSION['pwd']);

    echo "<br><b>Login Failed</b> Try Again!";
	include(INC_DIR."login.php");

	}


	include(INC_DIR."footer.php");
	db_disconnect();




?>
























