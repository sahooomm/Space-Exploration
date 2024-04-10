<html>
    <?php
        
		$name= $_POST['name'];
        $username = $_POST['username'];
		$DOB = $_POST['dob'];
        $password = $_POST['pass'];

        $dbc = mysqli_connect('127.0.0.1:3306','root','rootroot','SpaceExplorer') or die("error connecting database");
        $query = "INSERT INTO users values ('$name','$username','$DOB','$password');";
        $result = mysqli_query($dbc,$query) or die('error Querring database');
		echo "<script>alert('Hello! $username');</script>";
		mysqli_close($dbc);
		header("Location: home/home1.html");
        exit(0);
       
    ?>
</html>