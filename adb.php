<?php
// ADB Backdoor Android
// Made by ClumsyLulz
// Define the command to execute
$command = "adb shell ls /sdcard/";

// Execute the command using proc_open to avoid shell injection
$descriptorspec = array(
    0 => array("pipe", "r"),
    1 => array("pipe", "w"),
    2 => array("pipe", "w")
);

$process = proc_open($command, $descriptorspec, $pipes);
if (is_resource($process)) {
    fclose($pipes[0]);
    $stdout = stream_get_contents($pipes[1]);
    $stderr = stream_get_contents($pipes[2]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    $exit_code = proc_close($process);
}

// Check if the command was executed successfully
if ($exit_code !== 0) {
    echo "Error executing the command: $stderr";
    exit;
}

// Process the harvested data here
echo $stdout;
?>
