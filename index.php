<?php
			$userID = array();
			$username = array();
			$databaseTitle = array();
			$databaseUserType = array();
			$datebasePatientFlag = array();


			error_reporting(E_ALL ^ E_NOTICE);
			Session_start();
			$_SESSION["userID"] = $userID;
			$_SESSION["username"] = $username;
			$_SESSION["title"] = $databaseTitle;
			$_SESSION["userType"] = $databaseUserType;
			$_SESSION["patientFlag"] = $datebasePatientFlag;
error_reporting (E_ALL ^ E_NOTICE); 
session_start();
			
$userID = $_SESSION['userID'];  
$username = $_SESSION['username']; 
$databaseTitle = $_SESSION['title']; 
$databaseUserType = $_SESSION['userType']; 
$datebasePatientFlag = $_SESSION['patientFlag']; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Organ Donation</title>
  <link rel = "stylesheet" type = "text/css" href = "style.css"/>
</head>
<body>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
			<li><a href="index.php"><img src = "12.jpg" width = "40" height = "40" border-radius="2" alt = "heart and hands"  /></a></li>
            <li><a href="index.php">Home</a></li>
        
            <li> <a href="faq.php">FAQ</a></li>
			<?php 
			if(!$userID)
			{
			echo "<li> <a href='register.php'>Register</a>"; 
				echo "<ul>"; 
					echo "<li><a href='register.php'>Donor/Recipient</a></li>"; 
					echo "<li><a href='staffregister.php'>Doctor/Staff</a></li>"; 
                echo "</ul>"; 
			}
			?>
            <li> <a href="profile.php">Account</a>
                <ul>
				<?php
					if(!$username)
						echo "<li><a href='login.php'>Login</a></li>"; 
					else
						echo "<li><a href ='profile.php'>{$username}'s Profile</a></li>";
					?>
				<?php
					if($userID && $databaseUserType != "0") 
					{ echo "<li><a href='reports.php'>Reports</a></li>"; 
					}
					if($userID && ($databaseUserType == "1"))
					{
						echo "<li><a href='matching.php'>Matching</a></li>";
					}
					?>
					<?php
					if($userID && ($databaseUserType == "2"))
					{?>
					<li><a href="scheduler.php">Scheduler</a></li>
					<?php
					}
					?>
					<?php
					if($userID)
					{ ?>
						<li><a href='logout.php'>Logout</a></li> 
					<?php }
					?>
                </ul>
            </li>
			<?php
				if($userID)
				{
					echo "<li> <a href='profile.php'>Hello, {$username}</a>"; 
				}
			?>
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->
	<p>&nbsp;</p>
	<div class = "priority" align = "center">
		<h2 class="title"><font face= "Brush Script MT" size = 13px>Organ Donation </font></h2>
		<p>Your contributions can save many lives , <br>&quot;It's not how much we give but how much love we put into giving.&quot; <br> Sign up as a donor or recipient today!</p>
		<img src = "32.jpg" alt = "image"  />
		<p>&nbsp;</p>
	</div>
</body>
</html>
