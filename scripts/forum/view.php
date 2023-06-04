<?php
    function show_section($num = -1) {
        require '/home/s/s913704h/s913704h.beget.tech/public_html/scripts/forum/sections.php';
        if($num == -1) return $__section_name[$_GET['sect']];
        else return $__section_name[$num];
    }
?>