AdminControl
<?php
	include_once("dbconnect.php");	//Connects to database
	
	
	//code taken from http://www.w3schools.com/php/php_mysql_select.asp
	$result=mysqli_query($dbCon, "SELECT * FROM members");
	
	echo "<table border='1'>
	<tr>
	<th>User ID</th>
	<th>Username</th>
	<th>Password</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Admin Rights</th>
	</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['user_id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['adminRights'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
	

$flight=mysqli_query($dbCon, "SELECT * FROM flights");
	
	echo "<table border='1'>
	<tr>
	
	<th>Flight Number</th>
	<th>Departure City</th>
	<th>Departure State</th>
	<th>Departure Airport</th>
	<th>Departure Time</th>
	<th>Departure Time Zone</th>
	<th>Arrival City</th>
	<th>Arrival State</th>
	<th>Arrival Airport</th>
	<th>Arrival Time</th>
	<th>Arrival Time Zone</th>
	<th>Flight Duration</th>
	<th>Seats Available</th>

	</tr>";

while($row = mysqli_fetch_array($flight))
  {
  echo "<tr>";
  echo "<td>" . $row['flight_num'] . "</td>";
  echo "<td>" . $row['depart_city'] . "</td>";
  echo "<td>" . $row['depart_st'] . "</td>";
  echo "<td>" . $row['depart_airport'] . "</td>";
  echo "<td>" . $row['depart_time'] . "</td>";
  echo "<td>" . $row['depart_tzone'] . "</td>";
  echo "<td>" . $row['arrival_city'] . "</td>";
  echo "<td>" . $row['arrival_st'] . "</td>";
  echo "<td>" . $row['arrival_airport'] . "</td>";
  echo "<td>" . $row['arrival_time'] . "</td>";
  echo "<td>" . $row['arrival_tzone'] . "</td>";
  echo "<td>" . $row['flight_duration'] . "</td>";
   echo "<td>" . $row['flight_seats_available'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
	
	
	
		?>
	
	

	
	<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form id='enterflight' action='adminControl.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Enter Flight</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='depart_city' >Departure City*: </label>
<input type='text' name='depart_city' id='depart_city' maxlength="30" />
<label for='depart_st'>Departure State*: </label>
<input type = 'text' name = 'depart_st' id='depart_st' maxlength ='30' />
<label for='depart_airport' >Departure Airport*:</label>
<input type='text' name='depart_airport' id='depart_airport' maxlength="50" />
  
<label for='depart_time' >Departure Time*:</label>
<input type='text' name='depart_time' id='depart_time' maxlength="255" />
<input type='submit' name='Submit' value='Enter Flight' />
 
</fieldset>
</form>
</body>
</html>
