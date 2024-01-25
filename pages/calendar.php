    <?php 
   session_start();
   include "../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) { 
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .navbar-nav .nav-link.btn-light:hover {
        background-color: #2896F7;
    }

    /* Add styles for the calendar */
    .calendar {
        position: absolute;
        top: 50%;
        left: 10px; /* Adjust the left position as needed */
        transform: translateY(-50%);
    }
</style>
<body>

<nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container-fluid">
        <a class="navbar-brand" href="studentinfo.php"><?=$_SESSION['name']?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="student.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="activities.php">Activities</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 10%">
    <!-- Calendar -->
    <div class="calendar">
        <!-- Insert your calendar content here -->
        <h3>Calendar</h3>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
		<div class="elfsight-app-a76bc15b-52fb-4504-ac78-110b788d6060" data-elfsight-app-lazy></div>
</div>
</div>

</body>
</html>

<?php } else {
    header("Location: ../login-index.php");
} ?>
