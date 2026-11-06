<?php

echo "PHP Server is work !";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $ips = $_POST['IP'] ?? '';
    $cmd = 'ping -n 4 '. escapeshellarg($ips) . "2>&1";
    $result = shell_exec($cmd);
    if($result){
    echo '<pre style="color: #000;">'. htmlspecialchars($result) . "</pre>";
    }else{
        echo "Ping failed .";
    }

}

?>