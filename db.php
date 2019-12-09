<html>
<?php
$conn = new mysqli("localhost", "root", "");
//$sql1 = "create database mydb1";
//$conn->query($sql1);

$conn->select_db("mydb1");

//$sql2 = "create table Persons (FirstName varchar(20), LastName varchar(20), Age int(6))";
//$conn->query($sql2);

//$sql3 = "INSERT INTO Persons(FirstName, LastName, Age) VALUES ('Noora','Sajjad','24')";
//$conn->query($sql3);

//$sql4 = "INSERT INTO Persons(FirstName, LastName, Age) VALUES ('Fatima','Sajjad','29')";
//$conn->query($sql4);

//$sql5 = "DELETE FROM Persons WHERE FirstName = 'Noora'";
//$conn->query($sql5);

//$sql6 = "UPDATE Persons SET FirstName='Junaid',Age='36' WHERE FirstName='Noora'";
//$conn->query($sql6);

//$sql7 = "REPLACE into Persons values ('Hamad','Sajjad','39')";
//$conn->query($sql7);

$sql8 = "SELECT * FROM Persons Order by FirstName DESC";
//table data stored in $rs
$rs = $conn->query($sql8);
//take one record and make it $r
while ($r = $rs->fetch_assoc()) {
    echo $r['FirstName'] . " " . $r['LastName'] . " " . $r['Age'];
    echo "<br>";
}

echo "<br><br>";

$sql9 = "SELECT * FROM Persons where FirstName = 'Fatima'";
$rs = $conn->query($sql9);
$r = $rs->fetch_array();
echo $r['FirstName'] . " " . $r['LastName'] . " " . $r['Age'];

$conn->close();
?>

</html>