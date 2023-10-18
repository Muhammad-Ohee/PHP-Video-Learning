<?php
$name = "Ohee";

$string1 = "My name is {$name}.\n";
$string2 = 'My name is {$name}.\n \t'; //dont parse also dont parse string literal 

echo $string1;
echo $string2;
echo "\n";

//heredoc
$heredoc = <<<EOD
data 1
new line\t{$name}
more text
EOD;
echo $heredoc;

echo "\n";

//nowdoc
$nowdoc = <<<'EOD'
data 1
new line\t{$name}
more text
EOD;
echo $nowdoc;

?>