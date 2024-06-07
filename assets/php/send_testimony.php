<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $testimony = $_POST['testimony'];

    // Format data
    $data = "Name: $name\nContact no: $phone\nAddress: $address\nTestimony: $testimony\n\n";

    // Save data to testimony.txt
    $file = fopen("testimony.txt", "a") or die("Unable to open file!");
    fwrite($file, $data);
    fclose($file);

    // Redirect back to the form page
    header("Location: ../your_form_page.html");
    exit();
} else {
    // Handle invalid requests
    echo "Invalid request!";
}
?>
