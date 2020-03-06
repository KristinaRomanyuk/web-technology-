<?php
$string = file_get_contents('index.html');
$count = preg_match_all("/<p>.+<\/p>/", $string, $match);
echo "Tad quantity <b>&lt;p&gt;...&lt;/p&gt;</b> in the document: " . $count . "<br>";
echo "<br>Lines found: <br>";
for ($i=0; $i < $count; $i++) { 
    echo strip_tags($match[0][$i]) . "<br>";
}
?>