<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html hackable="off">
<head><title> RJ Business Strategies | consulting, advisory services</title>
<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<meta name="description" content="New York business consulting, business consulting: business planning, business structure, valuation, investor relations, business financing, Marketing plans, PR, digital media marketing, traditional media marketing, investor presentations, data center planning, migration planning, ">
<meta name="keywords" content="New York business consulting, business plans, business structure, valuation, investor relations, marketing plans, investor presentations, customer presentations, data center planning, migration planning, ">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="rjbsstyle.css">
<style>
   #tblmain{  
     /* width: 90%;  */
      width: 500px; 
       background-color:white;
    }
   #var {
      font-size: 1.5em;
   }
  /*
   #h1style {
     font-size: 2em;
    }
    */

@media only screen and (min-width: 500px) {

   #var {
      font-size: 1.5em;
   }
  #tblmain{
     width:33%;  
       background-color:white;
     height: 310px;
     vertical-align: top;
    }
   #h1style {
     font-size: 1.5em;
    }
}



/*   set table white background */
   #clearbg{
       background-color:white;
    }

/* h1, h2 { */
h1, h2 { 
    display: inline;
}
</style>
</head>
<body text=#000000  leftMargin=10 topMargin=10 style="background-color: #EEEEEE;">
<!---div id="var"> test text</div--->
<?php include_once("analyticstracking.php") ?>
<!---body text=#000000  leftMargin=10 topMargin=10 onload="rjs_menu('rjsmenu');"--->
<div id="backgroundImage">
 <div class="main">

<script language="php">
$headerfile="rjsmenu.html";
$header=file_get_contents($headerfile);
print($header);
$referrer=$_SERVER['HTTP_REFERER'];
</script>
<script>
var referrer= "<?php echo $referrer ?>" ;
var menufontsize="1em";var menutblwidth="";var tblmenupb="";var menupb=""; var textcolor="white"; var cellbg="#000000"; var tblwidth="70%"; var mrows=""; var pageimagebelow="<div id='pageimage' > </div>" ;var menutblwinner=window.outerWidth*.75;
var pageimagewidth=window.outerWidth/4;
//var pageimagewidth=window.outerWidth/4;
var imagecell="<img width='400' alt='Operations room' title=' business planning ' style='border:20px solid black;' src='rjstrategiesOps.jpg'>";
var useragent=navigator.userAgent;
var ismobilere="/iPhone/";
var iphone=useragent.search(/iphone/i) + '';  // is -1 if not found else is positive number
 //   desktop width>1200, tablet 1024, phone < 500
var ismobile=0;
   if( screen.width > 0 && screen.width < 500 ) {
      ismobile=1;
   }else if ( iphone > -1 ){ // check if user agent is phone
     ismobile = 1;
   }
    if ( ismobile > 0 ) {
        menufontsize="3em";menutblwidth=" width='" + menutblwinner + "' ";
        menupb="</td><td align='right'><h1 style='font-size:3em; color:blue'>&GT;</h1></table>&nbsp;&nbsp;&nbsp;<p>";
        mrows="</tr><tr><td align=center><div id='pageimage' > </div></td><tr>" ;
           imagecell="<img width=" + pageimagewidth + " alt='Operations room' title='business planning' src='rjstrategiesOps.jpg'>";

     } else {
          imagecell= "<table width=80% border=0 cellspacing=2 cellpadding=0><tr><td align=center bgcolor='#000000' > " + imagecell + "</td></tr></table>";

     }

//document.getElementById( 'pageimage' ).innerHTML = imagecell  ;
 
</script>
<center>
<TABLE BORDER=1  id="tblmain"  style='display: inline-table;vertical-align: top;'><TR><TD align=center><a href='businessservices.php'><img src='images/org-chart-small.jpg' height=50px></a></td></tr><TD style='vertical-align:top;'>
<div id="var">
<h1 id="h1style" style='font-weight:normal;'>&nbsp;<a href='businessservices.php' >Business Services</a></h1><P> 
<a href='businessservices.php' style='color: black; text-decoration: none; '> 
<h1 id="h1style" style='font-weight:normal;'>Sales&nbsp;not&nbsp;growing? Can't&nbsp;get&nbsp;financing? Business&nbsp;growth stagnant? Planning&nbsp;new&nbsp;marketing channels&nbsp;and&nbsp;a&nbsp;clear presentation&nbsp;is&nbsp;our solution.</h1>
<h2 id="h1style" style='font-weight:normal; margin-left:5em; color=black;'>&nbsp;&nbsp;<div style='padding-left: 20px; '>business&nbsp;financing, investor&nbsp;relations, business&nbsp;planning, valuation, marketing&nbsp;planning, business&nbsp;structure, corporate&nbsp;image...</a></div></h2>
</div></td></tr></table>

<TABLE BORDER=1  id="tblmain" style='display: inline-table;vertical-align: top;'><TR><TD align=center style='vertical-align:top;'><a href='itservices.php'><img src='images/computer-center.jpg' height=50px></a></td></tr><tr><td><div id="var">
&nbsp;<a href='itservices.php'>
<h3 id="h1style" style='font-weight:normal;display: inline;'>Data&nbsp;Center&nbsp;Planning</h3></a>
<h3 id="h1style" style='font-weight:normal; margin-left:.5em; color=black;display: inline;'>&nbsp;&nbsp;Keep up with:<BR><UL><LI> Linux devops engineering</li><li> migration issues</li><LI> security&nbsp;requirements</li><li> hybrid environment, virtualization, abstraction...</li></ul></h3></div></TABLE>
<TABLE BORDER=1 width="380px" id="tblmain" style='display: inline-table;vertical-align: top;'><TR><TD style='vertical-align:top;'><div id="var">&nbsp;<BR><B id="h1style" >Trending</B><P><UL id="h1style" >
<LI>Signed an agreement with a financial company to complete their cloud app and provide maintenance and support.</li>
<LI>Signed a marketing agreement with <a href='http://www.principalmc.com'>Principal Media Communications, LLC</a></li>
<li>Provided&nbsp;marketing consulting to a <a href='http://www.wemaketrends.com' target='_blank' style='color:black; text-decoration: none;'>fashion trend app company.</a> <a href='https://itunes.apple.com/tc/app/trendblog/id1181490156?mt=8' target='_blank'>Trendblog</a><li>Reviewed a Brooklyn Co-op's financials and board meeting minutes for an ex-board member looking for irregularities and calculating valuation.</li>
<LI><a href='aboutrjs.php#SELACC'>Prior accomplishments</a></li>
</ul></div></table>
<!--- instagram --->
<table  border=1 id="tblmain" style='display: inline-table;vertical-align: top;'><tr><td align=center valign=top width=8%><a href='https://www.instagram.com/rjbusinessstrategies/' target='_blank' style='text-decoration:none'><IMG SRC='https://www.instagram.com/static/images/ico/apple-touch-icon-76x76-precomposed.png/932e4d9af891.png' alt='Instagram link' title='Instagram link' width=30><p id="h1style" >Over 100 exhibitors at the New York Small Business Expo at the Javits Center. Exciting new businesses concepts (read more...)</a></td></table>
<!--- wordpress --->
<table border=1 id="tblmain" style='display: inline-table;vertical-align: top;' ><TR><td align=center valign=top width=8%><a href='https://rjstrategies.wordpress.com' target='_blank' style='text-decoration:none'><IMG SRC='https://s1.wp.com/i/favicons/android-chrome-192x192.png' alt='Wordpress blog link' title='Wordpress blog link' width=30><p id="h1style" >Improving your networking: Selling your product or service requires a sophisticated marketing plan...</a></td></table>
<!--- twitter --->
<table border=1 id="tblmain" style='display: inline-table;vertical-align: top;'><TR><td align=center valign=top width=8%><a href='https://twitter.com/RichRJohnston' target='_blank' style='text-decoration:none;'><IMG SRC='https://abs.twimg.com/errors/logo23x19.png' alt='IT planning twitter link' title='twitter link' width=30><p id="h1style" >Consumer Electronics Week NY #ceweekny at Metropolitan Pavilion...</a></div></td></table>
<table width=110px border=1 id="clearbg" style='display: inline-table; vertical-align: top;'><tr><td align=center valign=top width=4%><a href='mailformrjs.php' target='_blank'><IMG SRC='images/emailicon.png' alt='feedback email page' title='feedback email form' width=30><P id="h1style">Email&nbsp;Us</a></table></div>

</center>
<script language="php">
$ipaddr=getenv("REMOTE_ADDR");
$host=getenv("HOST");
$hhostname=getenv("HOSTNAME");
$server_referrer=$_SERVER["HTTP_REFERER"];
$thisdate=date("d/m/y:H:i:s",time());
$hostname=gethostbyaddr($ipaddr);

$logfilename="access.txt";
$name=$_GET['name'];
$referrer=$_SERVER['HTTP_REFERER'];
$logmsg=" <div id='logit'></div> <script> var screeninfo=\"<iframe src='access.php?name=Welcome&referrer=$referrer&sw=\" + screen.width + \"' width='4' height='1'> </iframe></p>\"; document.getElementById( 'logit' ).innerHTML = screeninfo;</script>";
print($logmsg);

</script>
</body></html>
