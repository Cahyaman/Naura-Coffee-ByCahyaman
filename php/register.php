<?php
// Query Semua kustomer
$query = "SELECT * FROM customers";
$result = $conn->query($query);

// Fetch Semua customers
while ($customer = $result->fetch_assoc()) {
  echo $customer['name'] . '<br>';
}
?>