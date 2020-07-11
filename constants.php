<?php
/* enter your mysql info here */

define("DATABASEHOST","localhost"); // if on the same pi localhost works
define("DATABASEUSER","WB0SIO");          // user name for MySql
define("DATABASEPASS","wa2mno");          // password for MySql


define("DATABASE","fieldday");

// Done with http://www.hcidata.info/obfuscate-email-address.htm
define("EMAIL","<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#107;&#52;&#115;&#120;&#120;&#64;&#97;&#114;&#114;&#108;&#46;&#111;&#114;&#103;\">&#76;&#101;&#101;&#32;&#65;&#108;&#100;&#101;&#114;&#32;&#40;&#75;&#75;&#52;&#83;&#88;&#88;&#41;</a>");
define("TITLE","K4CPO Field day web logger");
define("SHOWIT",FALSE);

$contest['START-OF-LOG:']="3.0";
$contest['Created-By:']="K4CPO Web Logger";
$contest['CONTEST:']="ARRL FD";
$contest['CALLSIGN:']="N0SUW";
$contest['LOCATION:']="Oscar Olson Park, Glencoe, MN";
$contest['ARRL-SECTION:']="MN";
$contest['CATEGORY:']="2B";
$contest['CATEGORY-POWER:']="QRP";
$contest['SOAPBOX:']="";
$contest['CLAIMED-SCORE:']="";
$contest['OPERATORS:']="N0SUW, WB0SIO";
$contest['NAME:']="Lawrence Greenwald";
$contest['ADDRESS:']="1329 Baxter Ave N";
$contest['ADDRESS-CITY:']="Glencoe";
$contest['ADDRESS-STATE:']="MN";
$contest['ADDRESS-POSTALCODE:']="55336";
$contest['ADDRESS-COUNTRY:']="USA";
$contest['EMAIL:']="wb0sio@arrl.net";



$contestend="END-OF-LOG: ";
$textarea="SOAPBOX: 200 points for 100% battery power
SOAPBOX: 100 points for setting in a public place
SOAPBOX: 100 points for 100% solar power
SOAPBOX: 100 points for visit by a pubic safety official
SOAPBOX: 50 points for on line submission";
?>
