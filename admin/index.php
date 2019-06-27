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
                <script src="http://code.jquery.com/jquery-latest.js"></script>
                สถานะบทเรียน : <button name="lesson_status" type="submit" value="<?php echo $data_lesson['lesson_id']; ?>" class="btn btn-info button"><?php echo $data_lesson['lesson_status']; ?></button>
                สถานะบททดสอบ : <button name="exam_status" type="submit" value="<?php echo $data_lesson['lesson_id']; ?>" class="btn btn-info button"><?php echo $data_lesson['exam_status']; ?></button>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('button[name="lesson_status"]').click(function() {
            var id = $(this).val();
            $.ajax({
                url: "active.php",
                method: "POST",
                data: {
                    getid: id
                },
                success: function(status) {
                    alert(status);
                    location.reload();
                }
            });
        });
        $('button[name="exam_status"]').click(function() {
            var id = $(this).val();
            $.ajax({
                url: "activeexam.php",
                method: "POST",
                data: {
                    getid: id
                },
                success: function(status) {
                    alert(status);
                    location.reload();
                }
            });
        });
    });
</script>