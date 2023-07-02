<?php
$name = $_POST["name"];
$fname = $_POST["fname"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$maritalStatus = $_POST["marital-status"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$languages = $_POST["lang"];
$hobbies = $_POST["hobbies"];
$nationality = $_POST["nationality"];
$college = $_POST["college"];
$cplace = $_POST["cplace"];
$cdept = $_POST["cdept"];
$course = $_POST["course"];
$percentage = $_POST["cgp"];
$programmingLanguages = $_POST["clang"];
$jobPosition = $_POST["job-pos"];
$department = $_POST["dept"];
$employeeID = $_POST["emp-id"];
$doj = $_POST["doj"];
$salary = $_POST["salary"];
$experience = $_POST["experience"];
$company = $_POST["company"];
$work = $_POST["work"];
$terms = $_POST["terms"];

$con = new mysqli('localhost', 'root', '', 'employee');

// Check if the connection was successful
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare the SQL statement
$stmt = $con->prepare("INSERT INTO emp_details (`name`, `fname`, `dob`, `email`, `gender`, `marital-status`, `address`, `phone`, `lang`, `hobbies`, `nationality`, `college`, `cplace`, `cdept`, `course`, `cgp`, `clang`, `job-pos`, `dept`, `emp-id`, `doj`, `salary`, `experience`, `company`, `work`, `terms`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind the parameters to the statement
$stmt->bind_param("ssssssssssssssssssssssssss", $name, $fname, $dob, $email, $gender, $maritalStatus, $address, $phone, $languages, $hobbies, $nationality, $college, $cplace, $cdept, $course, $percentage, $programmingLanguages, $jobPosition, $department, $employeeID, $doj, $salary, $experience, $company, $work, $terms);

// Execute the statement
if ($stmt->execute()) {
    echo "Successfully Recorded";
} else {
    echo "Failed";
}

$stmt->close();
$con->close();
?>
