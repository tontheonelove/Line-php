<?php

$ip = "192.168.104.105";

$exe= shell_exec("ping -n 5 $ip");

print_r(nl2br($exe));

?>