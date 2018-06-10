<?php

//connection string
include 'connecttoaws.php';

// Create a unique bucket name
$bucket = uniqid("myownbucket11123", true);
// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">Hello AWS Enthusiasts!</h1>";
echo "<div align = \"center\"><img src=\"https://www.google.com/imgres?imgurl=https%3A%2F%2Fmedia.screwfix.com%2Fis%2Fimage%2F%2Fae235%3Fsrc%3Dae235%2F6114K_P%26%24prodImageMedium%24&imgrefurl=https%3A%2F%2Fwww.screwfix.com%2Fp%2Factive-galvanised-steel-bucket-13ltr%2F6114k&docid=7pFAxSvC7wVrkM&tbnid=nqUYBK4hV2h-6M%3A&vet=10ahUKEwiNraXkpJTaAhUjTI8KHY4RCo0QMwicAigCMAI..i&w=330&h=330&bih=716&biw=1280&q=bucket&ved=0ahUKEwiNraXkpJTaAhUjTI8KHY4RCo0QMwicAigCMAI&iact=mrc&uact=8\"></img></div>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div>";
?>
