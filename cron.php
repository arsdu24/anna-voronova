<?php
file_put_contents($argv[1], date('l jS \of F Y h:i:s A'), FILE_APPEND | LOCK_EX);

