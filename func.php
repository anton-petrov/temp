<?php
declare(strict_types=1);

echo mt_rand(0, 3) . "<br>";
echo mt_rand(0, 3) . "<br>";
echo mt_rand(0, 3) . "<br>";

?>

<!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>

   <?php

    function selectItems($items, $selected = 0) {
        $text = "";
        foreach ($items as $k => $v) {
            if ($k === $selected) {
                $ch = "selected";
            } else {
                $ch = "";
            }
            $text .= "<option$ch value='$k'>$v</option>\n";
        }
        return $text;
    }

    $capitals = [
        "GB" => "London",
        "GER" => "Berlin",
        "RUS" => "Moscow"
    ];

    if (isset($_REQUEST['country'])) {
        $capital = $capitals[$_REQUEST['country']] ?? '';
        echo "The capital of {$_REQUEST['country']} is $capital";
    }

   ?>

 <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    Select country:
     <select name="country">
         <?=selectItems($capitals, $_REQUEST['country'])?>)
     </select>
     <input type="submit" value="What is the capital?">
     <br/>
 </form>

   <?php
        function tooManyArgs(...$args) {
            foreach ($args as $arg) {
                echo "$arg ";
            }
        }
   ?>

 </body>

 </html>
