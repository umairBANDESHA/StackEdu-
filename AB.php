<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
     /* PROFILE VIEW */

/* Basic modal styling */
.userModel {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: hidden; /* Disable scroll */
    background-color: rgba(255, 255, 255, 0.5); /* White w/ opacity */
    backdrop-filter: blur(4.5px);
    z-index: 2;
    align-content: center;

}

.userModel-content {
    background-color: #fefefe;
    padding: 20px;
    border: 5px solid #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 100%; /* Adjusted width */
 
}

.clase {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.clase:hover,
.clase:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
@media (min-width: 768px) {
    .userModel-content {
        width: 70%; /* Slightly larger devices use a smaller percentage width */
    }
}

@media (min-width: 1024px) {
    .userModel-content {
        width: 40%; /* Even larger devices */
    }
}


    </style>
  </head>
  <body>
    <form
      action="upload.php"
      method="post"
      enctype="multipart/form-data"
      style="margin-top: 20px; text-align: center"
    >
      <label for="image" style="font-weight: bold; font-size: 18px"
        >Select Image:</label
      >
      <input
        type="file"
        name="image"
        id="image"
        required
        style="margin-top: 10px"
      />
      <button
        type="submit"
        name="submit"
        style="
          margin-top: 10px;
          padding: 8px 16px;
          background-color: #4caf50;
          color: white;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        "
      >
        Upload Image
      </button>
    </form>
    
    <?php
    // Database connection
    require_once('./includes/db_connection.php');
    $userId = "Umair"; // Example user ID
    $query = "SELECT name, email, address, phoneNbr  FROM logindetails WHERE name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    ?>

    <!-- Trigger button -->
    <button id="showDetailsBtn">Show User Details</button>

    <!-- Hidden div for user details -->
    <div id="userDetails" class="userModel">
        <div class="userModel-content">
            <span class="clase">&times;</span>
            <img src="./img/myself.jpg" alt="User Image" style="width: 100px; height: auto;">
            <h2>User Details</h2>
            <p>Name: <?php echo htmlspecialchars($user['name']); ?></p>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>Address: <?php echo htmlspecialchars($user['address']); ?></p>
            <p>Phone Number: <?php echo htmlspecialchars($user['phoneNbr']); ?></p>
        </div>
    </div>

    <script>
        // script.js

var modal = document.getElementById("userDetails");
var btn = document.getElementById("showDetailsBtn");
var span = document.getElementsByClassName("clase")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    </script>
</body>
</html>

  </body>
</html>
