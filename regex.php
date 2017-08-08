<pre>
<?php

$text = htmlspecialchars(file_get_contents(__FILE__));
$html = preg_replace('/(\$[a-z]\w*)/xis', '<b>$1</b>', $text);
echo "<pre>$html</pre>";

preg_match_all('/(\d+)/s', "bla45--bdfgas9823-f3",  $matches);
preg_match_all('/(\W+)/s', "abcde",  $matches);

print_r($matches);

?>
</pre>
