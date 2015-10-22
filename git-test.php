<?php

require 'vendor/autoload.php';

$pathToGit = 'git';

$process = new \Symfony\Component\Process\Process(escapeshellarg($pathToGit) . ' --version');
$process->run();
if ($process->isSuccessful()) {
    echo $process->getOutput();
} else {
    echo "Git not found or Symfony\\Process couldn't read the process output";
}