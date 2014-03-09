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

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $uid     = $_POST['uid'];
        $pwd     = $_POST['pwd'];
        $pwd2    = $_POST['pwd2'];
        $email   = $_POST['email'];
        $fname   = $_POST['fname'];
        $lname   = $_POST['lname'];
        $addr    = $_POST['addr'];
        $city    = $_POST['city'];
        $state   = $_POST['state'];
        $country = $_POST['country'];
        $zipcode = $_POST['zipcode'];
        $phone   = $_POST['phone'];

        $u  = strtolower($uid);
		$pw  = strtolower($pwd);
		$pw2 = strtolower($pwd2);
		$today = date("mdY");


		if (!ctype_alnum($u) || strlen($u) < 4 || strlen($u) > 16) {
			echo "<font color=red>Username must be between 4-16 characters (letters and numbers).</font><br>";
			$err = "yes";

        }

		if (!ctype_alnum($pw) || strlen($pw) < 6 || strlen($pw) > 10) {
			echo "<font color=red>Password must be between 6-10 characters (letters and numbers).</font><br>";
            $err = "yes";
		}

		if ($pw != $pw2) {
			echo "<font color=red>Password and password confirmation do not match.</font><br>";
            $err = "yes";
        }

        if ($err == "") {

			$sql="select * from users where email='$email' OR uid like '%$u%'";
			$result=mysql_query($sql) or die("select  fails");
			$no=mysql_num_rows($result);

			if ($no==0) {


				$sql="insert into users(uid,pwd,fname,lname,addr,city,state,country,zipcode,email,phone,status,type,datesignup) values('$u','$pw','$fname','$lname','$addr','$city','$state','$country','$zipcode','$email','$phone','active','sing',NOW())";
				$result = mysql_query($sql) or die("insert fails");

					if (isset($result)) {

					  echo "<br><b>Account Successfully Created!</b> - Login Below";
					  include(INC_DIR."login.php");

					} else {
					  echo "<br>Error Inserting Record. Contact Site Admin<br>";
					}

			} else {

			   echo "<font color=red>User with that Email Address or Username already exists. <a href='".BASEHREF."/forgotpass.php'>Forgot Password?</a></font><br>";

			}
       } else {

         include(INC_DIR."signup.php");

       }

	} else {


	   include(INC_DIR."signup.php");


	}


	include(INC_DIR."footer.php");

	db_disconnect();




?>
