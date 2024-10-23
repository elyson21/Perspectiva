<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytical Tool</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        .sidebar {
            width: 200px;
            background-color: #800000;
            color: white;
            height: 100vh;
            padding: 15px;
            position: fixed;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 10px 0;
        }

        .sidebar a:hover {
            background-color: #600000;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .header {
            font-size: 24px;
            color: #800000;
            margin-bottom: 20px;
        }

        .coming-soon {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        .form-container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="admin-index.php">Dashboard</a>
        <a href="inbox.php">Inbox</a>
        <a href="event-calendar.php">Event Calendar</a>
        <a href="news.php">News</a>
        <a href="user-management.php">User Account Management</a>
        <a href="analytical-tool.php">Analytical Tool</a>
        <a href="account-settings.php">Account Settings</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <h1 class="header">Analytical Tool</h1>
        <div class="form-container">
            <form method="post">
                <div class="form-group">
                    <label for="barangay">Barangay:</label>
                    <select id="barangay" name="barangay" required>
                        <!-- Add options for barangays -->
                        <option value="Anilao">Anilao</option>
                        <option value="Atlag">Atlag</option>
                        <option value="Babatnin">Babatnin</option>
                        <!-- Continue with other barangays -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="marital_status">Marital Status:</label>
                    <select id="marital_status" name="marital_status" required>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="educational_attainment">Educational Attainment:</label>
                    <select id="educational_attainment" name="educational_attainment" required>
                        <option value="College_Graduate">College Graduate</option>
                        <option value="College_Level">College Level</option>
                        <option value="High_School">High School</option>
                        <option value="Elementary">Elementary</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="employment_status">Employment Status:</label>
                    <select id="employment_status" name="employment_status" required>
                        <option value="Employed">Employed</option>
                        <option value="Unemployed">Unemployed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="political_interest">Political Interest:</label>
                    <select id="political_interest" name="political_interest" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>

        <?php
        function encodeData($barangay, $gender, $maritalStatus, $educationalAttainment, $employmentStatus, $politicalInterest)
        {
            $barangayMap = [
                'Anilao' => 1,
                'Atlag' => 2,
                'Babatnin' => 3,
                'Bagna' => 4,
                'Bagong Bayan' => 5,
                'Balayong' => 6,
                'Balite' => 7,
                'Bangkal' => 8,
                'Barihan' => 9,
                'Bulihan' => 10,
                // Continue mapping all barangays
            ];

            $genderMap = ['Male' => 0, 'Female' => 1];
            $maritalStatusMap = ['Single' => 0, 'Married' => 1];
            $educationMap = ['College_Graduate' => 3, 'College_Level' => 2, 'High_School' => 1, 'Elementary' => 0];
            $employmentMap = ['Employed' => 1, 'Unemployed' => 0];
            $politicalInterestMap = ['Yes' => 1, 'No' => 0];

            return [
                $barangayMap[$barangay],
                $genderMap[$gender],
                $maritalStatusMap[$maritalStatus],
                $educationMap[$educationalAttainment],
                $employmentMap[$employmentStatus],
                $politicalInterestMap[$politicalInterest]
            ];
        }

        require '../vendor/autoload.php'; // Ensure PHP-ML is autoloaded
        
        use Phpml\Classification\KNearestNeighbors;
        use Phpml\Classification\SVC;
        use Phpml\SupportVectorMachine\Kernel;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $barangay = $_POST['barangay'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $maritalStatus = $_POST['marital_status'];
            $educationalAttainment = $_POST['educational_attainment'];
            $employmentStatus = $_POST['employment_status'];
            $politicalInterest = $_POST['political_interest'];

            $samples = [
                [30] + encodeData('Anilao', 'Male', 'Single', 'College_Graduate', 'Employed', 'Yes'),
                [25] + encodeData('Atlag', 'Female', 'Married', 'College_Level', 'Unemployed', 'No'),
                // Add more samples
            ];

            $labels = ['Yes', 'No']; // Example labels for participation prediction
        
            $input = [intval($age)] + encodeData($barangay, $gender, $maritalStatus, $educationalAttainment, $employmentStatus, $politicalInterest);

            // k-Nearest Neighbors classifier
            $classifier = new KNearestNeighbors();
            $classifier->train($samples, $labels);
            $isParticipating = $classifier->predict($input);

            echo "<div class='coming-soon'>Prediction: This voter will most likely participate: <strong>$isParticipating</strong></div>";

            // If not participating, predict reasons
            if ($isParticipating === "No") {
                $samples2 = [
                    [30] + encodeData('Anilao', 'Male', 'Single', 'College_Graduate', 'Employed', 'No'),
                    [25] + encodeData('Atlag', 'Female', 'Married', 'College_Level', 'Unemployed', 'No'),
                    // Add more non-participation samples
                ];

                $labels2 = ['Unaware', 'Uninterested']; // Example reasons for non-participation
        
                $classifier2 = new SVC(Kernel::LINEAR);
                $classifier2->train($samples2, $labels2);
                $factors = $classifier2->predict($input);

                echo "<div class='coming-soon'>Factors contributing to non-participation: <strong>$factors</strong></div>";
            }
        }
        ?>

    </div>
</body>

</html>