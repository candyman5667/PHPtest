<?php

$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
?>

<p>私の名前は、<?php echo $my_name; ?></p>
<p>ご希望商品は、<?php echo $choices; ?></p>
<p>注文数は、<?php echo $number; ?></p>
