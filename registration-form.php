<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $instituteName = $_POST["institute-name"];
    $govtInstituteID = $_POST["govt-institute-id"];
    $instituteEmail = $_POST["institute-email"];
    $institutePhone = $_POST["institute-phone"];
    $password = $_POST["password"];

    // Now you can use these variables as needed, for example, you can echo them to display the values:
    echo "Institute Name: " . $instituteName . "<br>";
    echo "Government Institute ID: " . $govtInstituteID . "<br>";
    echo "Institute Email: " . $instituteEmail . "<br>";
    echo "Institute Phone Number: " . $institutePhone . "<br>";
    // Note: Be cautious with passwords; they should not be displayed in this way and should be securely stored.

    // You can also perform database operations or any other processing here.
}
?>
