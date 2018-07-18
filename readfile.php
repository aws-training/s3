<?php
//connection string
include 'connecttoaws.php';

//code to get our bucket and key names
$bucket = $_GET["bucket"];
$key = $_GET["key"];

//code to read the file on S3
$result = $client->getObject(array(
    'Bucket' => $bucket,
    'Key'    => $key
));
$data = $result['Body'];

//HTML to create our webpage
echo "<h2 align=\"center\">The Bucket is $bucket</h2>";
echo "<h2 align=\"center\">The Object's name is $key</h2>";
echo "<h2 align=\"center\">The Data in the object is $data</h2>";
echo "<div align = \"center\"><img src=\"https://www.google.com/imgres?imgurl=https%3A%2F%2Fmedia.screwfix.com%2Fis%2Fimage%2F%2Fae235%3Fsrc%3Dae235%2F6114K_P%26%24prodImageMedium%24&imgrefurl=https%3A%2F%2Fwww.screwfix.com%2Fp%2Factive-galvanised-steel-bucket-13ltr%2F6114k&docid=7pFAxSvC7wVrkM&tbnid=nqUYBK4hV2h-6M%3A&vet=10ahUKEwiNraXkpJTaAhUjTI8KHY4RCo0QMwicAigCMAI..i&w=330&h=330&bih=716&biw=1280&q=bucket&ved=0ahUKEwiNraXkpJTaAhUjTI8KHY4RCo0QMwicAigCMAI&iact=mrc&uact=8\"></img></div>";
echo "<div align = \"center\"><a href=\"cleanup.php?bucket=$bucket&key=$key\">Click Here To Remove Files & Bucket</a></div>";
?>
