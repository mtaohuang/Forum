<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
/*php.ini中有uploads的相关配置
 * file_uploads=On;表示开启文件上传的支持；
 * upload_tmp_dir=临时文件上传大小；
 * upload_max_size=2M；默认是2M，上传的文件大小为2M
 * post_max_size=8M 表单以POST方式发送数据的最大值
 * 
 * 客户端进行配置：
 * <input type="hidden" name="MAX_FILE_SIZE" value="1024"/>
 * 在文件上传框设定文件上传类型：
 * <input type="file" name="myfile" accept=""/>
 */

header("content-type:text/html;charset=utf-8");
//文件上传
$filename=$_FILES['head']['name'];
$type=$_FILES['head']['type'];
$tmp_name=$_FILES['head']['tmp_name'];
$error=$_FILES['head']['error'];
$size=$_FILES['head']['size'];
if($error==UPLOAD_ERR_OK){
    //判断文件是否是通过HTTP POST方式上传的
    $destination="uploads/.$filename";
    if(is_uploaded_file($tmp_name)){
        if(move_uploaded_file($tmp_name, $destination)){
            $mes="上传成功";
        }
    }else{
        $mes="文件不是通过HTTP POST方式上传的";
    }
}
else{
    switch ($error){
        case 1:
            $mes="超过了配置文件允许的上传文件的大小";//UPLOAD_ERR_INI_SIZE
            break;
        case 2:
            $mes="超过了表单设置的上传文件允许大小";//UPLOAD_ERR_FORM_SIZE
            break;
        case 3:
            $mes="文件部分被上传";//UPLOAD_ERR_PARTIAL
            break;
        case 4:
            $mes="没有文件被上传";//UPLOAD_ERR_NO_FILE
            break;
        case 6:
            $mes="没有找到临时目录";//UPLOAD_ERR_NO_TMP_DIR
            break;
        case 7:
            $mes="文件写入错误";//UPLOAD_ERR_CANT_WRITE
            break;
        case 8:
            $mes="PHP扩展程序中断了文件上传";//UPLOAD_ERR_EXTENSION
            break;
    }
}
echo $mes;

