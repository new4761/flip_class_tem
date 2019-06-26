<?php
include '../include/session.php';
if (isset($_POST['submit'])) {
    $header = mysqli_escape_string($con, $_POST['topicname']);
    $descript = mysqli_escape_string($con, $_POST['descript']);
    $lessonlevel = mysqli_escape_string($con, $_POST['lessonlevel']);


    if (empty($header)) {
        array_push($errors, "-header is required");
    }
    if (empty($descript)) {
        array_push($errors, "-descript is required");
    }
    if (count($errors) == 0) {
        $query = "INSERT INTO lesson (lesson_name,lesson_level,lesson_content) VALUES ('$header','$lessonlevel','$descript')";
        if (mysqli_query($con, $query)) { ?>
        <script>alert("Success");</script>
        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=../exam.php">
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
            <label>ชื่อบทเรียน: </label>
            <input type="text" name="topicname">
        </div>
        <div>
            <label>ระดับของบทเรียน: </label>
            <input type="text" name="lessonlevel">
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
        <button type="submit" name="submit">Register</button>
    </form>

</body>

</html>