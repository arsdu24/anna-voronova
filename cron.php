<?php
$lastInstallFilePath = "last-commit.log";
$currentCommit = trim(exec("git log -n 1 --decorate='short'"));
$shouldInstall = false;

if (file_exists($lastInstallFilePath)) {
    $shouldInstall = trim(file_get_contents($lastInstallFilePath)) != $currentCommit;
} else {
    $shouldInstall = true;
}

if (!$shouldInstall) {
    die("No updates required ... Current git version $currentCommit");
}

rename("./public/index.php", "./public/index.hold.php");
rename("./public/index.deploy.php", "./public/index.php");

file_put_contents($lastInstallFilePath, $currentCommit);

echo exec("php composer.phar install");
echo exec("php artisan key:generate");
echo exec("php artisan migrate");

rename("./public/index.php", "./public/index.deploy.php");
rename("./public/index.hold.php", "./public/index.php");
