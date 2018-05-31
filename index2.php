  <table>
    <tr>
      <td> Name</td>
      <td> Email</td>
      <td> Age</td>
      <td> Hometown</td>
      <td> Job</td>
      <td> Experience</td>
    </tr>
  </table>
  <?php
  include 'crud.php';

  //For multiple quries:
  $sql = "INSERT INTO staff(firstname, lastname, email, age, hometown, job, experience) VALUES  ('Richard', 'Cardiff', 'richard_cardiff@bing.com', 45, 'Boston', 'Account manager', '5 years')";
  $sql = "INSERT INTO staff(firstname, lastname, email, age, hometown, job, experience) VALUES  ('John', 'Smitt', 'john_smitt@yahoo.com', 32, 'London', 'Senior Java Developer', '12 years')";
  $sql = "INSERT INTO staff(firstname, lastname, email, age, hometown, job, experience) VALUES  ('Wlodzimierz', 'Pavlov', 'pavlovcoder@gmail.com', 22, 'Poznan', 'Junior JavaScript Developer', '6 months')";

  //For prepared statemet query:
  $firstn = 'Wlodzimierz';
  $lastn = 'Pavlov';
  $email = 'pavlovcoder@gmail.com';
  $age = 22;
  $hometown = 'Poznan';
  $job = 'Junior JavaScript Developer';
  $experience = '6 months';

  //For selecting execution query:
  $sql2 = "SELECT * FROM `staff`";

  //$result = SingleQuery($sql); // for single query!
  //$result = MultiQuery($sql); //for multiple queries!
  //$result = PreQuery($firstn, $lastn, $email, $age, $hometown, $job, $experience); //For prepared statement query!
  //$result = selectdata($sql2);
  //For updating statement query:
  //$result = UpdateQuery('hometown', 'Paris', 2);
  //For deleting selected query:
  $result = DeleteQuery(2);
/*
  if ($result === true) {
    echo 'success';
  } else {
    echo $result;
  }
*/
  /*
  if ($result != "zero") {
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['firstname'].' '.$row['lastname'] . "</td>";
      echo "<td>" . $row['email']. "</td>";
      echo "<td>" . $row['age']. "</td>";
      echo "<td>" . $row['hometown']. "</td>";
      echo "<td>" . $row['job']. "</td>";
      echo "<td>" . $row['experience']. "</td>";
      echo "</tr>";
    }
  } else {
    echo $result;
  }
  */
  if ($result === true) {
    echo 'success';
  } else {
    echo $result;
  }
?>
</table>