<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>


<!DOCTYPE html>
<html>

<head>

    <title>home</title>
</head>

<body>
    <table align="center" width='60%' border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <h3 align="center">Admin</h3>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Admin Dashboard</a></li>
                    <li><a href="adminList.php">Admin List</a></li>
                    <li><a href="adminEdit.php">Edit Profile</a></li>
                    <li><a href="adminChangePass.php">Change Password</a></li>
                    <li><a href="addAdmin.php">Add Admin</a></li>
                    <li><a href="stuffList.php">Staff List</a></li>
                    <li><a href="addStaff.php">Add Staff</a></li>
                    <li><a href="supplierList.php">Supplier List</a></li>
                    <li><a href="addSupplier.php">Add Supplier</a></li>
                    <li><a href="../../controls/admin/logout.php">Log Out</a></li>
                </ul>
            </td>
            <td>
                <h1 align='center'>Edit Profile</h1>

                <center>
                    <form method="POST" action="../../../controls/admin/editProfile.php" enctype="multipart/form-data" onsubmit="return formValidation()">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" id="name"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" id='email'></td>

                            </tr>

                            <tr>
                                <td>Image</td>
                                <td><input type="file" name="file" id='file'></td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Update User">
                                    <button type="reset">Reset</button>
                                </td>

                            </tr>

                        </table>
                    </form>
                    <?php

                    if (isset($_SESSION["edit_msg"]))
                        echo $_SESSION["edit_msg"];
                    unset($_SESSION["edit_msg"]);
                    ?>
                </center>
            </td>
        </tr>
    </table>
    <script src="../../js/adminEdit.js"></script>
</body>

</html>