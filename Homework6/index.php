<?php
    $bitbyte = $bitkilo = $bytebit = $bytekilo = $kilobyte = $kilobit = $out = "";

    if (isset($_POST['bitbyte'])) $bitbyte = sanitizeString($_POST['bitbyte']);
    if (isset($_POST['bitkilo'])) $bitkilo = sanitizeString($_POST['bitkilo']);
    if (isset($_POST['bytebit'])) $bytebit = sanitizeString($_POST['bytebit']);
    if (isset($_POST['bytekilo'])) $bytekilo = sanitizeString($_POST['bytekilo']);
    if (isset($_POST['kilobyte'])) $kilobyte = sanitizeString($_POST['kilobyte']);
    if (isset($_POST['kilobit'])) $kilobit = sanitizeString($_POST['kilobit']);

 if ($bitbyte != '')
  {
    $temp = $bitbyte;
    $bitbyte = $bitbyte *0.125;
    $out = " $temp bits equals $bitbyte bytes";
  }
  elseif($bitkilo != '')
  {
    $temp = $bitkilo;
    $bitkilo = $bitkilo *0.000125;
    $out = " $temp bits equals $bitkilo kilobytes";
  }
  elseif($bytekilo != '')
  {
    $temp = $bytekilo;
    $bytekilo = $bytekilo *0.001;
    $out = " $temp bytes equals $bytekilo kilobytes";
  }
 elseif($bytebit != '')
  {
    $temp = $bytebit;
    $bytebit = $bytebit *0.001;
    $out = " $temp bytes equals $bytebit bits";
  }
 elseif($kilobyte != '')
  {
    $temp = $kilobyte;
    $kilobyte = $kilobyte *1000;
    $out = " $temp kilobytes equals $kilobyte bytes";
  }
elseif($kilobit != '')
  {
    $temp = $kilobit;
    $kilobit = $kilobit *1000;
    $out = " $temp kilobits equals $kilobit bytes";
  }
    
  else $out = "";
echo <<<_END
<html>

  <head>
    <meta charset="UTF-8"/>
    <title>Bit Converter</title>
  </head>
  <body>
      <div id = "converter">
           <h1>Bit Converter</h1>
           <form method="post" action="index.php">
    <p>
         1. Enter the number of bits/bytes/kilobytes. In the desired conversion box and hit convert!<p>
         <ol id = "list">
            <li>Bits to Bytes<input type="text" name="bitbyte" /></li>
           
            <li>Bits to kilobytes<input type="text" name="bitkilo" /></li>
            
            <li>Bytes to bits<input type="text" name="bytebit" /></li>
            
            <li>Bytes to Kilobytes<input type="text" name="bytekilo" /></li>
            
            <li>Kilobytes to bytes<input type="text" name="kilobyte" /></li>
            
            <li>Kilobit to bits<input type="text" name="kilobit" /></li>
        </ol>
        
        <input type="submit" value="Convert">
           </form>
        <b>$out</b>
       
    
   
    <script src="bits.js"></script>
    <link href="bits.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fr" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
  </body>
</html>
_END;

function sanitizeString($var)
  {
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
  }


?>