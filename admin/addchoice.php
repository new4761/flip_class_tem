<?php
include '../include/session.php';
if (isset($_GET['l_id'])) {
    $colname_lesson = $_GET['l_id'];
} else {
    header('location: index.php');
}
?>

<head>
    <title>ADD Choice Test</title>
    <?php include '../include/header.php'; ?>
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
            <p>จำนวนข้อสอบ <?php echo $row_choice; ?> ข้อ <a href="showall.php">ดูชุดข้อสอบทั้งหมด</a><p>
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
                                    <tr id="allchoice">
                                        <td>A:<br><input type="text" name="name[]" placeholder="choiceA" class="form-control name_list" id="choiceA" /></td>
                                        <td>B:<br><input type="text" name="name[]" placeholder="choiceB" class="form-control name_list" id="choiceB" /></td>
                                        <td>C:<br><input type="text" name="name[]" placeholder="choiceC" class="form-control name_list" id="choiceC" /></td>
                                        <td>D:<br><input type="text" name="name[]" placeholder="choiceD" class="form-control name_list" id="choiceD" /></td>
                                        <input type="hidden" name="id" value="<?php echo $lessonid; ?>">
                                        <td><button type="button" name="add" id="add" class="btn btn-success">Add Choice</button></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                <label>คำตอบที่ถูก :</label>
                                <select name="selectcc" title="Select" id="selectcc">
                                    <option value="0">เลือกคำตอบที่ถูกต้อง </option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">D</option>
                                </select>
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
                $('#dynamic_field').append('<tr id="row' + i + '"><td>E :<input type="text" name="name[]" placeholder="ChoiceE" class="form-control name_list" id="choiceE"/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            }
        });
        $(document).on('click', '.btn_remove', function() {
            i--;
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            $.ajax({
                url: "../name.php",
                method: "POST",
                data: $('#add_name').serialize(),
                success: function(data) {
                    alert(data);
                    $('#add_name')[0].reset();
                    location.reload();
                }
            });
        });
        /*$("#choiceA")
            .keyup(function() {
                var typedValue = $(this).val();
                $('#selectcc').append($("<option></option>").attr("value", typedValue).text(typedValue));
            })
            .keyup();*/
    });
</script>