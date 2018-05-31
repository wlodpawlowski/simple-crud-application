<?php 
  function ExecuteQuery($sql, $name) {
    $conn = OpenCon();

    if ($conn->query($sql) == TRUE) {
      return $name;
    } else {
      $error = "Error creating table: " . $conn->error;
      CloseCon($conn);
      return $error;
    }
  }

  //Modifing function for altering data in the database:
  function ModifyColumn($table,$columnname,$datatype) {
    $query = "ALTER TABLE ". $table."
    MODIFY COLUMN ". $columnname ." ".$datatype;
    $result = ExecuteQuery($query,"Column successfully modified");
    return $result;
  }

  //Adding function for adding data to the database:
  function AddColumn($table, $columnname, $datatype) {
    $query = "ALTER TABLE ". $table."
    ADD ". $columnname ." ".$datatype;
    $result = ExecuteQuery($query, "Column Added successfully");
    return $result;
  }

  //Dropping function for dropping/deleting data from the database:
  function DropColumn($table,$columnname) {
    $query = "ALTER TABLE ". $table."
    DROP COLUMN ". $columnname; 
    $result = ExecuteQuery($query,"Column deleted successfully");
    return $result;
  }

  //Dropping function for dropping the whole table in the database:
  function DropTable($table) {
    $query = "DROP TABLE ". $table;
    $result = ExecuteQuery($query, "Table deleted successfully");
    return $result;
  }
?>