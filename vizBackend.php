<?php
    if(isset($_POST['szamol'])) {
        $v = $_POST['sebesseg'];
        $A = $_POST['keresztMetszet'];
        $w = $A * $v;
        echo "<p>Az adott keresztmetszeten átáramló folyadék térfogata: $w m3.</p>";
    }
?>