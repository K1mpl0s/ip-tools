<!DOCTYPE html>
<html>
<body>
    <?php
    /*
    Save to path logs/date_time.txt
    Can be saved as .json if $content is swapped with $json
    */
    $file = 'logs/' . date('mdy') . '_' . date('His') . '.txt';
    //Json format
    $json = '{"time":"' . date('H:i.s') . '","address":"' . $_SERVER['REMOTE_ADDR'] . '","agent":"' . $_SERVER['HTTP_USER_AGENT'] . '"}';
    //Plain format
    $content = date('H:i.s') . '\nIP:\n' . $_SERVER['REMOTE_ADDR'] . '\nAgent:\n' . $_SERVER['HTTP_USER_AGENT'];
    //Write content to file in path.
    file_put_contents($file, $content);
    ?>
</body>
</html>
