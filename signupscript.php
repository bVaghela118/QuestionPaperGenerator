<html>
<head></head>
<body>

<?php

 include ('header.php');
 include ('connection.php');
 echo "<div id='bottom'>";
 
 $Fname=$_POST["Fname"];
 $Lname=$_POST["Lname"];
 $contact=$_POST["contact"];
 $collg=$_POST["collg"];
 $board=$_POST["board"];
 $email=$_POST["email"];
 $passwd=$_POST["passwd"];
 $address=$_POST["address"];
 $country=$_POST["country"];
 $desc=$_POST["desc"];
 $type=$_POST["type"];
 
 // $query="SELECT uid FROM tbuser";
 // $result = mysql_query($query,$conn);

// while($row = mysql_fetch_array($result))
  // {
  // $uidvar= $row['uid'] ;
  // }
  // $uidvar=$uidvar+1;
 //$query="INSERT INTO tbuser (col1, col2, col3,col4,col5,col6,col7,col8,col9,col10,col11) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
 $query="INSERT INTO tbuser VALUES('$Fname','$Lname','$contact','$collg','$board','$email','$passwd','$address','$country','$desc','$type')";
	if(mysqli_query($conn,$query))
	{
		echo "Congrats "."$Fname"." "."$Lname"."  Now you are the registred user..!!";
	}
 //if (mysqli_query($query,$conn))
 // {
 // echo "Congrats "."$Fname"." "."$Lname"."  Now you are the registred user..!!";
 // }
 // else
 // {
  // die(mysqli_error());
 // }
mysqli_close($conn);
echo "</div>";
?>
</body>

</html>
