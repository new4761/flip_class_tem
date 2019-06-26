<?php
include '../include/session.php';

?>

<head>
    <title>Admin Page</title>
    <?php include '../include/header.php'; ?>

</head>

<body>
    <h1>ADMIN PANEL</h1>
    <?php
    if (isset($_SESSION['admin_id'])) { ?>
        <h3> HELLO ADMIN <?php echo $row_loginadmin['admin_username']; ?></h3>
    <?php }
?>
    <h3>บทเรียนทั้งหมด</h3>
    <?php
    $query_lesson = "SELECT * FROM lesson";
    $lesson = mysqli_query($con, $query_lesson);

    $row_lesson = mysqli_num_rows($lesson);
    if ($row_lesson > 0) {
        while ($data_lesson = mysqli_fetch_assoc($lesson)) { ?>

            <p>
                <a href="../lesson.php?l_id=<?php echo $data_lesson['lesson_id']; ?>">ชื่อบทเรียน : <?php echo $data_lesson['lesson_name']; ?> </a>
                <a href="editless.php?l_id=<?php echo $data_lesson['lesson_id']; ?>"> แก้ไขบทเรียน</a>
                <a href="addchoice.php?l_id=<?php echo $data_lesson['lesson_id']; ?>"> เพิ่มบททดสอบแบบตัวเลือก</a>
                <a href="editless.php?l_id=<?php echo $data_lesson['lesson_id']; ?>"> เพิ่มบททดสอบแบบข้อเขียน</a>
                สถานะบทเรียน : <button name="submitl" id="submitl" type="submit" value="<?php echo $data_lesson['lesson_id']; ?>" class="btn btn-info"><?php echo $data_lesson['lesson_status']; ?></button>
                สถานะบททดสอบ : <a href="activeexam.php?l_id=<?php echo $data_lesson['lesson_id']; ?>" onClick="alert('Change Active')"> <?php echo $data_lesson['exam_status']; ?></a>
            </p>

        <?php }
} else { ?>
        <h1>ไม่มีบทเรียน</h1>
    <?php     }
?>
    <h3>จำนวนนักเรียนทั้งหมด</h3>
    <?php
    $query_student = "SELECT * FROM member";
    $student = mysqli_query($con, $query_student);

    $row_student = mysqli_num_rows($student); ?>
    <p> <?php echo $row_student; ?>
        <a href="showallstudent.php"> ดูข้อมูลนักเรียนทั้งหมด </a>
    </p>



</body>

</html>

<script>
    $(document).ready(function() {
        $('button').click(function() {
            var getid = $(this).val();
            $.ajax({
                method: "POST",
                url: "active.php",
                data: {
                    id = getid
                },
                success: function(status) {
                    alert(status);
                }
            });
        });
    });
</script>