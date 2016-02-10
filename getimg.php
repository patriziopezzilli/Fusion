<?php // get image from db 
$imageBlob = getImageFromDB($frammenti); 
// set headers, send image to browser 
echo $imageBlob;