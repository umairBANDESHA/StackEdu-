<?php
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');


session_start();
// if (!isset($_SESSION['role'])) {
//     header("Location:../login.php");
//     exit();
// }
// Include header.php
include './include/admin_header.php';
?>

<body>
    <div class="container">
        <aside id="sidebar">
            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="toggle-btn">
                <i class="lni lni-grid-alt"></i>
            </label>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./addUser.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Add User</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="./updateUserPage.php" class="sidebar-link ">
                        <i class="lni lni-user"></i>
                        <span>Update Website</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="./deleteUserPage.php" class="sidebar-link ">
                        <i class="lni lni-user"></i>
                        <span>Remove User</span>
                    </a>
                </li>


            </ul>
            <div class="sidebar-footer">
                <a href="../main.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class=" main">
            <!-- DASHBOARD -->
            <div id="dashboard" class=" content">
                <h2>
                    <?php echo $_SESSION['ERROR'] ?>
                </h2>
                <div class="dashboard-card">
                    <a href="../main.php">
                        <div class="card">
                            <h6 class="title">Website</h6>
                        </div>
                    </a>
                    <div class="card">
                        <h6 class="title">Edit Website</h6>
                        <form action="upload.php" method="post" enctype="multipart/form-data"
                            style="margin-top: 20px; text-align: center;">
                            <label for="image" style="font-weight: bold; font-size: 18px;">Select Image:</label>
                            <input type="file" name="image" id="image" required style="margin-top: 10px;">
                            <button type="submit" name="submit"
                                style="margin-top: 10px; padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Upload
                                Image</button>
                        </form>


                    </div>

                </div>
                <div style="overflow-x:auto;">
                    <table id="posts">
                        <thead>
                            <tr>
                                <!-- <th style="width:5%">SN</th> -->
                                <th style="width:15%">Name</th>
                                <th style="width:25%">Email</th>
                                <th style="width:25%">Address</th>
                                <th style="width:15%">Phone Number</th>
                                <th style="width:15%">Role</th>
                                <th style="width:5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // includes\db_connection.php
                            include "../includes\db_connection.php";
                            // Database connection
                            // $conn = new mysqli($server, $user, $passwd, $DB);
                            $sql = "select * from logindetails";
                            $result = $conn->query($sql);
                            if (!$result) {
                                die("Invalid query!");
                            }
                            while ($row = $result->fetch_assoc()) {
                                echo "
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[address]</td>
                                <td>$row[phoneNbr]</td>
                                <td>
                                <a class='btn btn-success' href='./updateUserPage.php'>Edit</a>
                                <a class='btn btn-danger' href='./deleteFromDashboard.php?email=$row[email]'>Delete</a>
                                </td>
                            </tr>";
                            }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>
            <!-- ADD USER -->
<?php
include '../includes/footer.php';
?>
        </div>

    </div>



    <script>
        function toggleDiv(divId) {
            var selectedDiv = document.getElementById(divId);
            selectedDiv.style.display = (selectedDiv.style.display === 'none') ? 'block' : 'none';
        }
        function toggleOtherDivs(clickedDiv) {
            var allDivs = document.querySelectorAll('.hidden-div');
            for (var i = 0; i < allDivs.length; i++) {
                if (allDivs[i] !== clickedDiv) {
                    allDivs[i].style.display = 'none';
                }
            }
        }
    </script>
</body>

</html>