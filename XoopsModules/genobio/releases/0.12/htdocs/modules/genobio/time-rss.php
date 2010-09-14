<?php

if ($_GET['GMT']<>0){
	$gmt = $_GET['GMT'];
	$tme = time() + (60*60*($gmt+0));//- (60*60*12);;
} else {
	$tme = time(); //- (60*60*12);
}

if ($_GET['gmt']<>0){
	$gmt = $_GET['gmt'];
	$tme = time() + (60*60*($gmt+0));//- (60*60*12);;
} else {
	$tme = time(); //- (60*60*12);
}
require_once('calendars.php');

	// Ounion Movement for Time - doc: http://www.chronolabs.org.au/bin/roun-time-article.pdf


?>
<? $roun =RounCalendar($tme,$GMT);
   $roun_egypt = EgyptianCalendar($tme,$GMT); 
   $roun_mayan = MayanTihkalCalendar($tme,$GMT);
	header("Content-type: text/xml; charset=UTF-8");  
?>
<?php echo '<?xml version="1.0" encoding="iso-8859-1"?>'.chr(10).chr(13); ?>
<rss version="2.0"> 

<channel> 
<title>Roun Calendar JTL : <?php echo htmlspecialchars($roun['jtl']); ?></title> 
<description>Roun Time JTL, Total amount of time left in cycle of roun calendar system. Document can be found on our site in the news section on how to run some of these calendars in PHP. (Final 02-11-2007+10)</description> 
<link>http://www.chronolabs.org.au/</link>


<item> 
<title>Hijri Calendar : <?php 
$hijri = HijriCalendar::GregorianToHijri( $tme );
echo htmlspecialchars($hijri[1].' '.HijriCalendar::monthName($hijri[0]).' '.$hijri[2]);
 ?>
</title> 
<description>The lunar calendar used by islamic culture.</description> 
<link>http://en.wikipedia.org/wiki/Islamic_calendar</link> 
</item> 

<item> 
<? 
	list($y,$m,$d)=gregorian_to_jalali(date('Y',$tme ),date('m',$tme ),date('d',$tme ));?>
<title>Jalali Calendar : <?php echo htmlspecialchars($d.'-'.$m.'-'.$y); ?></title> 
<description>The lunar calendar used by Iranian.</description> 
<link>http://en.wikipedia.org/wiki/Iranian_calendar</link> 
</item> 

<item> 
<title>Julian Day Calendar : <?php echo htmlspecialchars(jdtojulian($julianDate) . ' | '. $julianDate); ?></title> 
<description>Julian Number Day Calendar.</description> 
<link>http://en.wikipedia.org/wiki/Julian_calendar</link> 
</item> 

<item> 
<title>Roun Movement : <?php echo htmlspecialchars($roun['strout']); ?></title> 
<description>Radial Ounion Movement.</description> 
<link>http://time.chronolabs.org.au/roun-time-article.pdf</link> 
</item> 

<item>
<title>Jewish Calendar : <?php echo htmlspecialchars("$hebrewDay $hebrewMonthName $hebrewYear"); ?></title>
<description>Jewish Calendar Calendar.</description> 
<link>http://en.wikipedia.org/wiki/Jewish_calendar</link> 
</item>

<item> 
<title>Egyptian : <?php echo htmlspecialchars($roun_egypt['strout']). ' '.$roun_egypt['mname']; ?></title> 
<description>Egyptian Calendar.</description> 
<link>http://en.wikipedia.org/wiki/Egyptian_calendar</link> 
</item> 

<item> 
<title>Mayan Tikal : <?php echo htmlspecialchars($roun_mayan['strout']). ' ('.$roun_mayan['dayname'].' '. $roun_mayan['mname'].')'; ?></title> 
<description>Mayan Tikal Calendar.</description> 
<link>http://en.wikipedia.org/wiki/Mayan_calendar</link> 
</item> 

<item> 
<title>Mayan Long Count : <?php echo htmlspecialchars($roun_mayan['longcount']); ?></title> 
<description>Mayan Long Count.</description> 
<link>http://en.wikipedia.org/wiki/Mayan_long_count</link> 
</item> 
<?
	$japan = JapaneseCalendar($tme,0,rand(0,1));
?>
<item> 
<title>Japanese Calendar : <?php echo $japan['date'].' '.$japan['time']; ?></title> 
<description>Japanese Calendar - elements = <?php echo $japan['cause']; ?></description> 
<link>http://en.wikipedia.org/wiki/Japanese_calendar</link> 
</item> 

</channel> 
</rss> 

