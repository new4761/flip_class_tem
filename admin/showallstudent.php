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
    $sql_student = "SELECT * FROM member";
    $query_student = mysqli_query($con,$sql_student);
    $row_student = mysqli_num_rows($query_student);
    if($row_student > 0){
        while($data_student = mysqli_fetch_assoc($query_student)) { ?>
            <h4>username : <?php echo $data_student['m_username']; ?> </h4>
            <p>Firstname : <?php echo $data_student['m_firstname']; ?> Lastname : <?php echo $data_student['m_lastname']; ?></p>
            <p>Year : <?php echo $data_student['m_year']; ?> E-mail : <?php echo $data_student['m_email']; ?></p>
            <p>ระดับของบททดสอบ : <?php echo $data_student['m_level']; ?> </p>
            <hr>
<?php        }
    }



?>

</body>