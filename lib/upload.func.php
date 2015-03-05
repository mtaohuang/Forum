<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
header("contern-type:text/html;charset=utf-8");
?>
<!doctype heml>
<body>
    <form action="doAction.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="3145728"/>
        Upload<input type="file" name="head" accept="image/jpeg,image/gif,image/png"/><br/>
        <input type="submit" value="Upload"/>
    </form>
</body>
<?php
