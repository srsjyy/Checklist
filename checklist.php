<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checklist</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles-checklist.css">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container">
            <img src="images/cvsu_logo.png" alt="CVSU Logo" class="cvsu-logo" style="opacity: 70%; 
        margin-bottom: 25px; margin-left: 48px; width: 120px; height: auto; border-radius: 50%; 
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        </div>
        <div class="sidebar-header">Year Levels</div>
        <a href="#first-year" class="sidebar-link">First Year</a>
        <a href="#second-year" class="sidebar-link">Second Year</a>
        <a href="#third-year" class="sidebar-link">Third Year</a>
        <a href="#fourth-year" class="sidebar-link">Fourth Year</a>
        <div class="sidebar-header">Summary</div>
        <a href="#average" class="sidebar-link">Average</a>
        <a href="#passed-subjects" class="sidebar-link">Subjects</a>
        <a href="#unpassed-subjects" class="sidebar-link">Grades</a>
    </div>

    <!-- Main content -->
    <div class="main-content">

        <!-- Checklist title and search bar -->
        <div class="checklist">
            <h3>Checklist of Courses</h3>
        </div>


        <!-- Search bar -->
        <div class="search-container">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <span class="input-group-text bg text-black border-0">
                        <img src="images/search-icon.webp" alt="Search Icon" width="20" height="20">
                    </span>
                </div>
            </div>
        </div>


        <div class="level">
            <h3>Year Levels</h3>
            <hr class="divider">
        </div>

        <div id="first-year" class="year-section">

            <div class="table-container">

                <!-- First Year -->
                <div class="header1">FIRST YEAR</div>

                <!-- First Semester of First Year -->

                <div class="header">First Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the first semester of the first year
                        $sql = "SELECT * FROM firstyear_firstsem";
                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Second Semester of First Year -->
                <div class="header">Second Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the second semester of the first year
                        $sql = "SELECT * FROM firstyear_secondsem"; // Second semester, first year

                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

        <div id="second-year" class="year-section">

            <div class="table-container">
                <!-- Second Year -->
                <div class="header1">SECOND YEAR</div>

                <!-- First Semester of Second Year -->
                <div class="header">First Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the first semester of the second year
                        $sql = "SELECT * FROM secondyear_firstsem"; // First semester, second year

                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Second Semester of Second Year -->
                <div class="header">Second Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the second semester of the second year
                        $sql = "SELECT * FROM secondyear_secondsem"; // Second semester, second year

                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="third-year" class="year-section">

            <div class="table-container">
                <!-- Third Year -->
                <div class="header1">THIRD YEAR</div>

                <!-- First Semester of Third Year -->
                <div class="header">First Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the first semester of the third year
                        $sql = "SELECT * FROM thirdyear_firstsem"; // First semester, Third year
                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Second Semester of Third Year -->
                <div class="header">Second Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the second semester of the third year
                        $sql = "SELECT * FROM thirdyear_secondsem"; // Second semester, Third year

                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="table-container">
                <!-- Mid-Year -->
                <div class="header1">MID-YEAR</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the mid-year of the third year
                        $sql = "SELECT * FROM thirdyear_midyear"; // Mid-Year, Third year

                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td></td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="fourth-year" class="year-section">

            <div class="table-container">
                <!-- Fourth Year -->
                <div class="header1">FOURTH YEAR</div>

                <!-- First Semester of Fourth Year -->
                <div class="header">First Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the first semester of the Fourth year
                        $sql = "SELECT * FROM fourthyear_firstsem"; // First semester, Fourth year
                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Second Semester of Fourth Year -->
                <div class="header">Second Semester</div>
                <table class="table table-striped table-hover">
                    <!-- Table Headings -->
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Credit Unit (Lecture)</th>
                            <th>Credit Unit (Laboratory)</th>
                            <th>Contact Hours (Lecture)</th>
                            <th>Contact Hours (Laboratory)</th>
                            <th>Prerequisite Course Code</th>
                            <th>Semester</th>
                            <th>Year Level</th>
                            <th>Final Grade</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <?php
                        // SQL query to fetch checklist data for the second semester of the Fourth year
                        $sql = "SELECT * FROM fourthyear_secondsem"; // Second semester, Fourth year

                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>{$row['course_code']}</td>
                            <td>{$row['course_title']}</td>
                            <td>{$row['credit_unit_lecture']}</td>
                            <td>{$row['credit_unit_laboratory']}</td>
                            <td>{$row['contact_hours_lecture']}</td>
                            <td>{$row['contact_hours_laboratory']}</td>
                            <td>{$row['prerequisite_course_code']}</td>
                            <td>{$row['semester_name']}</td>
                            <td>{$row['year_name']}</td>
                            <td>{$row['final_grade']}</td>
                            <td>{$row['instructor_name']}</td>
                        </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="no-data-message" style="text-align: center; margin-top: 30px; display: none;">
            <img src="images/sloth.png" alt="No Data Found Icon" width="200" height="200" class="sloth-img" style="margin-bottom: 10px;">
            <div style="margin-top: -70px;">No data found</div>
        </div>

        <div class="summary">
            <h3>Summary</h3>
            <hr class="divider">
        </div>

        <!-- Average Section -->
        <div id="average" class="year-section">
            <div class="table-container">
                <div class="header">Average Grades</div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Semester</th>
                            <th>Average Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM summary_avgperyear";
                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $averageGrade = isset($row['average_grade']) ? $row['average_grade'] : "Not yet taken";
                                echo "<tr>
                                <td>{$row['year_name']}</td>
                                <td>{$row['semester_name']}</td>
                                <td>{$averageGrade}</td>
                              </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Subjects Section -->
        <div id="passed-subjects" class="year-section">
            <div class="table-container">
                <div class="header">Passed Subjects</div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Passed Subjects</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM summary_countsubj";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<tr><td>{$row['passed_subjects']}</td></tr>";
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-container">
                <div class="header">Unpassed Subjects</div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Unpassed Subjects</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM summary_countsubj";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<tr><td>{$row['unpassed_subjects']}</td></tr>";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Grades Section -->
        <div id="unpassed-subjects" class="year-section">
            <div class="table-container">
                <div class="header">Highest Grade</div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM summary_highestgrade";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<tr><td>{$row['course_code']}</td><td>{$row['highest_grade']}</td></tr>";
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-container">
                <div class="header">Lowest Grade</div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM summary_lowestgrade";
                        $result = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<tr><td>{$row['course_code']}</td><td>{$row['lowest_grade']}</td></tr>";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');
                const containers = document.querySelectorAll('.year-section');
                const summarySection = document.querySelector('.summary');
                const averageSection = document.getElementById('average');
                const passedSubjectsSection = document.getElementById('passed-subjects');
                const unpassedSubjectsSection = document.getElementById('unpassed-subjects');
                const noDataMessage = document.querySelector('.no-data-message');

                function filterContainers(searchText) {
                    let hasVisibleRows = false;

                    containers.forEach(container => {
                        container.style.display = 'none';
                        const tables = container.querySelectorAll('.table');

                        tables.forEach(table => {
                            const rows = table.getElementsByTagName('tr');
                            let foundInTable = false;

                            for (let i = 1; i < rows.length; i++) {
                                const cells = rows[i].getElementsByTagName('td');
                                let found = false;

                                for (let j = 0; j < cells.length; j++) {
                                    const cellText = cells[j].textContent.trim().toLowerCase();
                                    if (cellText.includes(searchText)) {
                                        found = true;
                                        foundInTable = true;
                                        break;
                                    }
                                }

                                if (found) {
                                    rows[i].style.display = '';
                                    hasVisibleRows = true;
                                } else {
                                    rows[i].style.display = 'none';
                                }
                            }

                            if (foundInTable) {
                                table.style.display = '';
                                table.previousElementSibling.style.display = '';
                                container.style.display = '';
                            } else {
                                table.style.display = 'none';
                                table.previousElementSibling.style.display = 'none';
                            }
                        });
                    });

                    // Hide summary, average, and subjects sections if searching
                    if (searchText) {
                        summarySection.style.display = 'none';
                        averageSection.style.display = 'none';
                        passedSubjectsSection.style.display = 'none';
                        unpassedSubjectsSection.style.display = 'none';
                    } else {
                        summarySection.style.display = '';
                        averageSection.style.display = '';
                        passedSubjectsSection.style.display = '';
                        unpassedSubjectsSection.style.display = '';
                    }

                    noDataMessage.style.display = hasVisibleRows ? 'none' : '';
                }

                if (searchInput) {
                    searchInput.addEventListener('input', function() {
                        const searchText = this.value.trim().toLowerCase();
                        filterContainers(searchText);
                    });
                }

                const sidebarLinks = document.querySelectorAll('.sidebar-link');

                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function(event) {
                        event.preventDefault();
                        const targetId = this.getAttribute('href').substring(1);
                        const targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop,
                                behavior: 'smooth'
                            });
                        }
                    });
                });

                filterContainers('');
            });
        </script>

</body>

</html>