<?php

//Connection string
include 'connecttoaws.php';

/*
Files in Amazon S3 are called "objects" and are stored in buckets. A specific
object is referred to by its key (or name) and holds data. In this file
we create an object called acloudguru.txt that contains the data 
'Hello AWS Enthusiasts!'
and we upload/put it into our newly created bucket.
*/

//get the bucket name
$bucket = $_GET["bucket"];

//create the file name
$key = 'aws.txt';

//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "Hello AWS Enthusiasts!"
));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket</h2>";
echo "<div align = \"center\"><img src=\"https://www.google.com/imgres?imgurl=https%3A%2F%2Fmedia.screwfix.com%2Fis%2Fimage%2F%2Fae235%3Fsrc%3Dae235%2F6114K_P%26%24prodImageMedium%24&imgrefurl=https%3A%2F%2Fwww.screwfix.com%2Fp%2Factive-galvanised-steel-bucket-13ltr%2F6114k&docid=7pFAxSvC7wVrkM&tbnid=nqUYBK4hV2h-6M%3A&vet=10ahUKEwiNraXkpJTaAhUjTI8KHY4RCo0QMwicAigCMAI..i&w=330&h=330&bih=716&biw=1280&q=bucket&ved=0ahUKEwiNraXkpJTaAhUjTI8KHY4RCo0QMwicAigCMAI&iact=mrc&uact=8\"></img></div>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket=$bucket&key=$key\">Click Here To Read Your File</a></div>";
?>
