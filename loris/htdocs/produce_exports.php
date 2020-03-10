<?php
    $ret = system ( "bash produce_exports.sh", $return_value );
    echo "<div id='stat'>";
        echo "<hr> $ret </hr>";
        echo "<hr> $return_value </hr>";
    echo "</div>";
?>
