<?php
  require_once 'db_connection.php';

  function SingleQuery($queri) {
    $conn = OpenCon();

    if ($conn->query($queri) === TRUE) {
      CloseCon($conn);
      return true;
    } else {
      return $conn->error;
    }
  }

  function MultiQuery($queries) {
    $conn = OpenCon();

    if ($conn->multi_query($queries) === true) {
      CloseCon($conn);
      return true;
    } else {
      return $conn->error;
    }
  }

  function PreQuery($fname, $lname, $email, $age, $hometown, $job, $experience) {
    $conn = OpenCon();
    $query = $conn->prepare("INSERT INTO staff(firstname, lastname, email, age, hometown, job, experience) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param("sssssss", $fname, $lname, $email, $age, $hometown, $job, $experience);

    if ($query->execute()) {
      CloseCon($conn);
      return true;
    } else {
      return $conn->error;
    }
  }

  function selectData($sql) {
    $conn = OpenCon();

    $result = $conn->query($sql);
    if ($result) {
      if ($result->num_rows > 0) {
        return $result;
      } else {
        return "zero";
      }
    } else {
      return $result->error;
    }
  }

  function UpdateQuery($column, $value, $id) {
    $conn = OpenCon();
    $query = $conn->prepare("UPDATE staff SET $column = ? WHERE id = ?");
    $query->bind_param("si", $value, $id);

    if ($query->execute()) {
      CloseCon($conn);
      return true;
    } else {
      return $conn->error;
    }
  }

  function DeleteQuery($id) {
    $conn = OpenCon();
    $query = $conn->prepare("DELETE FROM staff WHERE id = ?");
    $query->bind_param("i", $id);

    if ($query->execute()) {
      CloseCon($conn);
      return true;
    } else {
      return $conn->error;
    }
  }
?>