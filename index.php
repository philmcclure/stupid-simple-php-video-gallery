<?php

echo "<html>\n<head>\n<title>Video Gallery</title>\n";
echo "<meta name='viewport' content='initial-scale=1, width=device-width'>\n";
echo "<link rel='stylesheet' href='styles.css' type='text/css' media='all'>\n";
echo "</head>\n<body>\n";

$files = array_slice(scandir('/gallery'),2);
$reversed = array_reverse($files);

while (list($key, $value) = each($reversed)) {
if ((mime_content_type($value)) == "video/mp4") {
	echo "<video width='320' height='240' controls>\n";
	echo "    <source src='$value' type='video/mp4'>\n";
	echo "</video>\n\n";
}
}

echo "</body>\n</html>";
?>
