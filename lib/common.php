<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
function alertMes($mes,$url){
    echo"<script>alert('{$mes}');</script>";
    echo"<script>window.location='{$url}';</script>";
}

