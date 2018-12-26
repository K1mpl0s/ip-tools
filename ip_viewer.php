<!DOCTYPE html>
<html>
<body>
    <?php
    //Grab results of x ip using the API.
    $json = file_get_contents("http://ip-api.com/php/" . $_SERVER['REMOTE_ADDR']);
    //Parse the json as $parse
    $parse = unserialize($json);
    //return results.
    echo '<p class="ip-info">IP: ' . $parse["query"] . "<br>ISP: " . $parse["isp"] . "<br>Country: " . $parse["country"] . "<br>State: " . $parse["regionName"] . "</p>";
    //include user-agent. 
    echo '<p class="user-agent">' . $_SERVER['HTTP_USER_AGENT'] . '</p>';
    ?>
</body>
</html>
