<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Personal Information</title>
</head>
<body>

    <fieldset>
    <legend> Register Form</legend>
    <form action="#" method="post">
        <label>Full Name:</label>
        <input type="text" name="FullName" placeholder="Enter your Name" required>
<br>
<br>
        <label> Email: </label>
        <input type= "Email"name="Email" placeholder="Enter your Email">
<br>
<br>
            <label> Gender: </label>
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="FMale" required>Female
<br>
<br>
            <label>Birth Date: </label>
            <input type="Date" name="Date"> 
<br>
<br>
            <label>Country: </label>
            <select name="Country">
                <option value="Palstine">Palestine</option>
                    
                <option value="Palstine">Asia</option>
                <option value="Palstine">Africa</option>
            </select>
<br>
<br>
            <label>Favorit Color: </label>
            <input type="Color"name="color" required>
<br>
<br>
            <label>Choose your interests: </label>
            <input type="checkbox" name="interests" value="Coding"  >
            <label>Coding</label>
            <input type="checkbox" name="interests" value="Desgin"  >
            <label>Desgin</label>
            <input type="checkbox" name="interests" value="Sport"  >
            <label>Sport</label>
            <input type="checkbox" name="interests" value="Other"  >
            <label>Other</label>
<br>
<br>
            <label>Notes:</label>
            <textarea  rows="5" cols="50" name="Notes"></textarea>

<br>
<br>
            <input type="submit" value="Register" name="Register">
            <input type="submit" value="Reset" name="Reset">
</fieldset>

</form>
<br>

<?php
echo "<table border='2'";
if(isset($_POST['Register'])){  
    $Fname = $_POST['FullName'];
    $Email = $_POST['Email'];
    $gender = $_POST["gender"];
    $Date = $_POST['Date'];
    $Country = $_POST['Country'];
    $color = $_POST['color'];
    $interests = $_POST['interests'];
    $Notes = $_POST['Notes']; 


echo "<tr>
        <td>Name:</td>
        <td>$Fname</td>
        </tr>";

echo "<tr>
        <td>Email:</td>
        <td>$Email</td>
        </tr>";

echo "<tr>
        <td>gender:</td>
        <td>$gender</td>
        </tr>";

echo "<tr>
        <td>Date:</td>
        <td>$Date</td>
         </tr>";

echo "<tr>
        <td>Country:</td>
        <td>$Country</td>
        </tr>";

echo "<tr>
        <td>color:</td>
        <td>$color</td>
        </tr>";

echo "<tr>
        <td>interests:</td>
        <td>$interests</td>
        </tr>";

echo "<tr>
        <td>Notes:</td>
        <td>$Notes</td>
        </tr>";


echo "</table>";


}

if(isset($_POST['Register'])){
echo "<hr>";
 echo "<table border :'2'> ";

    
    
// }
    echo "</table>";
}

  ?>
  
<a href="activity2.php" title="Test Page"><h2>Delete Table</h2></a>
 
<br>
<?php

echo "The current date and time is: " . date("Y-m-d H:i:s");
?>



<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }

  fieldset {
    border: 2px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin: 0 auto;
    width: 50%;
    background-color: #fff;
  }

  legend {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  label {
    display: inline-block;
    width: 120px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  input[type="text"],
  input[type="email"],
  input[type="date"],
  select,
  textarea {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 5px;
    width: 80%;
    margin-bottom: 10px;
  }

  input[type="radio"] {
    margin-right: 10px;
  }

  input[type="checkbox"] {
    margin-right: 5px;
  }

  input[type="color"] {
    vertical-align: middle;
    margin-right: 5px;
  }

  input[type="submit"],
  input[type="reset"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
  }

  input[type="submit"]:hover,
  input[type="reset"]:hover {
    background-color: #3e8e41;
  }

  table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
  }

  th,
  td {
    text-align: left;
    padding: 8px;
  }

  th {
    background-color: #4CAF50;
    color: #fff;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #ddd;
  }
</style>

</body>
</html>