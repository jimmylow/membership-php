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
   
   define("SCRIPTNAME",	"Simple Member");
	define("BASEHREF",	"http://www.free-php.net/demo/SimpleMember");
	define("DOMAIN",	"localhost");
	define("FROMEMAIL",	"drunkenmenace@gmail.com");
	define("SITENAME",	"Free-Php.net");
	define("INC_DIR",	"/home/www/codemunkyx/www/www.free-php.net/htdocs/demo/SimpleMember/inc/");
	define("PAG_DIR",	INC_DIR."pages/");

	define("INC_DB",	INC_DIR."db.php");

	define("MYSQLUSER",	""); // mysql username
	define("MYSQLPASS",	""); // mysql password
	define("MYSQLDB",	"");    // mysql database name

	require(INC_DB);

?>