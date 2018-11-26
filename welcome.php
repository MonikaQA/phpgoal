<<<<<<< HEAD
<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
=======
<?php
   include('session.php');
   include('config.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "login.php">Sign Out</a></h2>
      <h3><a href="hello.php">ADD New Emplyee</a></h3>
   </body>
 <?php
$conn = new mysqli($servername, $username, $password,"sarthak");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM test";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>name</th>
<th>E_id</th>
<th>joining date</th>
</tr>";
 

if ($result->num_rows > 1) {

    while($row = $result->fetch_assoc()) {
?>
<tr>
 <td> <?php echo $row['id']; ?></td>
 <td> <?php echo $row['employee_name']; ?></td>
 <td> <?php echo $row['employee_id']; ?></td>
 <td> <?php echo $row['joning_date']; ?></td>
 <td><a href="edit.php?eid=<?php echo $row['id']; ?>">Edit</a> | <a href="delete.php?eid=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
    }
    
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>

>>>>>>> bf24b3aa7db9b22a779c93c6cc7b1a3800f80f11
</html>
