<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles-student.css">
</head>

<body>

    <div class="container">
        <div class="header-container">
            <img src="images/cvsu_logo.png" alt="CVSU Logo">
            <h3>Republic of the Philippines</h3>
            <h3>CAVITE STATE UNIVERSITY</h3>
            <h3>Bacoor City Campus</h3>
        </div>

        <div class="program-container">
            <h3>Bachelor of Science in Computer Science</h3>
            <h3>(Program)</h3>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Student Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Date of Admission</th>
                    <th scope="col">Adviser</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <?php
                // Establish a database connection
                $connection = mysqli_connect("localhost", "root", "uncrn#241JMN", "stud_checklist");

                // Check connection
                if ($connection === false) {
                    die("Error: Could not connect. " . mysqli_connect_error());
                }

                // SQL query to select all students
                $sql = "SELECT * FROM student";
                $result = mysqli_query($connection, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row in a table format
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                        <td>" . $row["student_number"] . "</td>
                        <td>" . $row["student_first_name"] . "</td>
                        <td>" . $row["student_last_name"] . "</td>
                        <td>" . $row["student_address"] . "</td>
                        <td>" . $row["student_email"] . "</td>
                        <td>" . $row["student_contact_number"] . "</td>
                        <td>" . $row["date_of_admission"] . "</td>
                        <td>" . $row["adviser"] . "</td>
                        <td><a href=\"checklist.php\" class=\"btn btn-primary\">View</a></td>
                    </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No students found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>