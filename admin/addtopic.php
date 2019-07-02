<?php
include '../include/session.php'; // adminonly
if (isset($_POST['submit'])) {
    $header = mysqli_escape_string($con, $_POST['topicname']);
    $descript = mysqli_escape_string($con, $_POST['descript']);
    $postby = mysqli_escape_string($con,$row_loginadmin['admin_username']);
    if (empty($header)) {
        array_push($errors, "-header is required");
    }
    if (empty($descript)) {
        array_push($errors, "-descript is required");
    }
    if (count($errors) == 0) {
        $query = "INSERT INTO announcement (a_head,a_content,a_postby) VALUES ('$header','$descript','$postby')";
        if (mysqli_query($con, $query)) { ?>
        <script>alert("Success");</script>
        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=../index.php">
        <?php       
        }
    }
}   
?>
<!DOCTYPE html>
<html>

<head>
    <title>ADD Choice Test</title>
    <?php include '../include/header.php'; ?>
</head>

<body>
    <h1>เพิ่มบทเรียน</h1>
    <?php
    if (isset($_SESSION['admin_id'])) { ?>
        <h3> HELLO ADMIN <?php echo $row_loginadmin['admin_username']; ?></h3>
    <?php }
?>
    <form method="POST" enctype="multipart/form-data">
        <div>
            <label>หัวข้อบทความ : </label>
            <input type="text" name="topicname">
        </div>
        <div>
            <label>เนื้อหา: </label>
            <textarea name="descript" type="text" id="descript" value="<?php echo $_POST['descript']; ?>" class="ckeditor"></textarea>
            <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
            <script type="text/javascript">
                //<![CDATA[
                CKEDITOR.replace('message', {

                    skin: 'kama',
                    language: 'th',
                    extraPlugins: 'uicolor',
                    uiColor: '#ffffff',
                    height: 300,
                    width: 700,

                    toolbar: [


                        ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],

                        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                        ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley'],
                        ['Undo', 'Redo'],
                        ['Styles', 'Format', 'Font', 'FontSize'],
                        ['TextColor', 'BGColor'],
                        ['Maximize']

                    ],

                    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

                });
            </script>
        </div>
        <button type="submit" name="submit"> POST </button>
    </form>

</body>

</html>