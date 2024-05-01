<?php
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');


session_start();
if (!isset($_SESSION['role'])) {
    header("Location:main.php");
    exit();
}
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
                <li  class="sidebar-item">
                    <a href="./adminDashboard.php" class="sidebar-link">
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
                        <span>Upadte User</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link ">
                        <i class="lni lni-user"></i>
                        <span>Remove User</span>
                    </a>
                </li>

            </ul>
            <div class="sidebar-footer">
                <a href="../log_Out.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class=" main">
           

<div id="addUser" class=" content ">
  <h2>Delete User</h2>
  <form action="deleteUser.php" method="post">
      <div class="input">
          <input type="text" class="form-control" placeholder="User Name To Delete" name="name" required>
          <!-- </div> -->
      </div>
      <!--  -->
      <div>
          <span class="rongPass">

              <?php
              echo $_SESSION['login_failure'];
              unset($_SESSION['login_failure']);
              ?>
          </span>

      </div>
      <div class="button">
          <button class="btn btn-info btn-lg px-2">Delete User</button>
      </div>
  </form>
</div>

           <!--  Display User-->
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