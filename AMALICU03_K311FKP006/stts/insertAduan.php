<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aduan</title>
</head>

<body>
	
	<?php
    include('connection.php');
    
    if(isset($_POST['submit'])) {
        
        $perkara = $_POST['perkara'];
        $aduan = $_POST['aduan'];
        
        $insertQuery = "INSERT INTO aduan (perkara, aduan) VALUES ('$perkara','$aduan')";
        
        if (mysqli_query($conn, $insertQuery)) {
            
            echo "Successful";
        }
        else {
            
            echo "Something is wrong".$insertQuery."".mysqli_error($conn);
        }
        
        mysqli_error($conn);
    }
    ?>
    
</body>
</html>