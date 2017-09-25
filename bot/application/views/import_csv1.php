<?php
if(isset($_POST['submit']))
{
	
$host="localhost"; // Host name.
$db_user="root"; //mysql user
$db_password=""; //mysql pass
$db='bot'; // Database name.
$conn=mysqli_connect($host,$db_user,$db_password) or die (mysql_error());
mysqli_select_db($conn,$db) or die (mysql_error());
 
  
echo $filename=$_FILES["file"]["name"];
$ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));
$fname=substr($filename,0,(strlen($filename)-strrpos($filename,"."))+2);
// echo $fname;
$i=0;
//we check,file must be have csv extention
if($ext==".csv")
{
  $sql="";
$row = 1;
if (($handle = fopen($filename, "r")) !== FALSE) {
     while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
         $num = count($data);
         echo "<p> $num fields in line $row: <br /></p>\n";

    
         for ($c=0; $c < $num; $c++) 
         {
          if ($row==1)
         {
  
         }
         else
         {
            $sql = "INSERT into  asset_catalog (id,innovation_area,asset_name,asset_summary,asset_poc,asset_type,asset_keywords,video) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]')";
            mysqli_query($conn,$sql);
          }
         }
         

         $row++;
     }
      
     fclose($handle);
}
}
else {
    echo "Error: Please Upload only CSV File";
}
 
 
}

?>