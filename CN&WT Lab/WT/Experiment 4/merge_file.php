$myFile = "sampleFile.txt";
$myFileLink = fopen($myFile, 'r');
$myFileContents = fread($myFileLink, filesize($myFile));
fclose($myFileLink);
echo “myFileContents is”. $myFileContents;
$myFile2 = "sampleFile2.txt";
$myFileLink2 = fopen($myFile2, 'w+') or die("Can't open file.");
$mynewFileContents = fwrite($myFileLink2, $myFileContents);
fclose($myFileLink2);
echo “mynewFileContents is”. $mynewFileContents;