<?php
session_start();
include('config/serverconfig-f.php');

if (isset($_SESSION['admin_id'])) {
    $query_loginadmin = "SELECT * FROM admin WHERE admin_id = '" . $_SESSION['admin_id'] . "'";
    $loginadmin = mysqli_query($con, $query_loginadmin);
    $row_loginadmin = mysqli_fetch_assoc($loginadmin);
} else {
    array_push($errors, "-Please Login first");
    include('errors.php');
    exit();
}
if (isset($_GET['l_id'])) {
    $colname_lesson = $_GET['l_id'];
} else {
    header('location: index.php');
}
?>

<head>
    <title>ADD Choice Test</title>
    <?php include 'include/header.php'; ?>
</head>

<body>
    <h1>เพิ่มข้อสอบแบบตัวเลือก</h1>
    <?php
    if (isset($_SESSION['admin_id'])) { ?>
        <h3> HELLO ADMIN <?php echo $row_loginadmin['admin_username']; ?></h3>
    <?php }
?>
    <form method="POST" enctype="multipart/form-data" name="add_name" id="add_name">
        <?php
        $query_choice = "SELECT * FROM choicetest WHERE lesson_id = '" . $colname_lesson . "'";
        $choice = mysqli_query($con, $query_choice);
        $row_choice = mysqli_num_rows($choice);
        $lessonid = $colname_lesson;
        if ($row_choice > 0) { ?>
            <p>จำนวนข้อสอบ <p>
                    <?php echo "เจอผลลัพธ์ " . $row_choice . " ผลลัพธ์"; ?>
                    <?php while ($data_choice = mysqli_fetch_assoc($choice)) { ?>

                    <?php }
            } else { ?>
                    <h1>ไม่มีบทเรียน</h1>
                <?php     }
            ?>
                <div>
                    <label>เพิ่มแบบทดสอบ(แบบตัวเลือก) : </label>
                    <table class="table table-borderd" id="dynamic_exam">
                        <tr>
                            <div class="table-responsive">
                                <label>โจทย์ :</label><input type="text" name="headtopic" id="headtopic" placeholder="โจทย์" class="form-control name_list">
                                <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                        <td><input type="text" name="name[]" placeholder="choiceA" class="form-control name_list" id="choiceA" /></td>
                                        <td><input type="text" name="name[]" placeholder="choiceB" class="form-control name_list" id="choiceB" /></td>
                                        <td><input type="text" name="name[]" placeholder="choiceC" class="form-control name_list" id="choiceC" /></td>
                                        <td><input type="text" name="name[]" placeholder="choiceD" class="form-control name_list" id="choiceD" /></td>
                                        <input type="hidden" name="id" value="<?php echo $lessonid; ?>">
                                        <td><button type="button" name="add" id="add" class="btn btn-success">Add Choice</button></td>
                                        <td><input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" /></td>
                                    </tr>
                                </table>
                                <label>คำตอบที่ถูก :</label>
                                <select name="selectcc" title="Select" id="selectcc">
                                    <option value="0">เลือกคำตอบที่ถูกต้อง </option>
                                </select>
                                <p></p>
                            </div>
                        </tr>
                    </table>
                </div>
    </form>

</body>

</html>
<script>
    $(document).ready(function() {
        var i = 1;

        $('#add').click(function() {
            if (i >= 2) {
                alert("เพิ่มได้มากสุด 5 ตัวเลือก");
            } else {
                i++;
                $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="ChoiceE" class="form-control name_list" id="choiceE"/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            }
        });
        $(document).on('click', '.btn_remove', function() {
            i--;
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            $.ajax({
                url: "name.php",
                method: "POST",
                data: $('#add_name').serialize(),
                success: function(data) {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
        $("#choiceA")
            .keyup(function() {
                var value = $(this).val();
                $("p").text(value);
                $('select[name="selectcc"]').append('<option value="' + value + '">' + value + '</option>');
            })
            .keyup();
    });
</script>