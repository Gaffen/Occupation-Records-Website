<?php
header('Content-disposition: attachment; filename=images/10092011.jpg');
header('Content-type: image/jpg');
readfile('http://www.hearsepileup.co.uk/images/10092011.jpg');
?>
