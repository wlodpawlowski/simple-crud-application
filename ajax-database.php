<?php 
  include 'db_connection.php';
  include 'cad.php';

  $conn = OpenCon();
  $sql = "CREATE TABLE Staff(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    age INT NOT NULL,
    hometown VARCHAR(30) NOT NULL,
    job VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP
  )";
  ExecuteQuery($sql, "Table Created Succesfully");
  AddColumn("Staff", "experience", "VARCHAR(50)");
  ModifyColumn("Staff", "experience", "VARCHAR(30)");
  /*
  DropColumn("Staff", "reg_date");
  $result = DropTable("Staff");
  echo $result;
  */
  CloseCon($conn);
?>