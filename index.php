<?php
include ('header.php');
include ('ParadaFactory.php');
$stop = ParadaFactory::create();
?>
<p><?php print_r($stop->get_data()) ?></p>
<?php
include ('footer.php');
?>

