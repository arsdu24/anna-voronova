<?php
if (file_exists('some')) {
    file_put_contents($argv[1], "\n yess", FILE_APPEND | LOCK_EX);
}

