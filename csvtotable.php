<?php
echo "<html><body><table>\n\n";
//simple error handling
if(!file_exists("csvin.csv")) {
  die("File not found");
} else {
  $f = fopen("csvin.csv", "r");
}

while (($line = fgetcsv($f)) !== false) 
{
        echo "<tr>";
        foreach ($line as $cell) 
        {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";

?>