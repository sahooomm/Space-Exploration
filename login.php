<html>
    <?php
        
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $dbc = mysqli_connect('127.0.0.1:3306','root','rootroot','SpaceExplorer') or die("error connecting database");
        $query ="Select username,password from Users";
		$result = mysqli_query($dbc,$query) or die('error Querring database');
        while($row = mysqli_fetch_array($result)){   
            if ($username == $row['username']  and $password == $row['password']){
                echo "<script>alert('Hello! $username');</script>";
				echo "<script>window.location.href = 'home/home1.html';</script>";
                exit(0);
            }

            else{
                echo '<script>alert("Wrong Username or Password, please try again!");</script>';
				echo "<script>window.location.href = 'login.html';</script>";
				exit(0);
            }
			
		}
    ?>
</html>