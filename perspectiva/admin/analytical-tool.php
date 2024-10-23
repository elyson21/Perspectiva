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
                        <option value="Anilao">Anilao</option>
                        <option value="Atlag">Atlag</option>
                        <option value="Babatnin">Babatnin</option>
                        <option value="Bagna">Bagna</option>
                        <option value="Bagong Bayan">Bagong Bayan</option>
                        <option value="Balayong">Balayong</option>
                        <option value="Balite">Balite</option>
                        <option value="Bangkal">Bangkal</option>
                        <option value="Barihan">Barihan</option>
                        <option value="Bulihan">Bulihan</option>
                        <option value="Bungahan">Bungahan</option>
                        <option value="Caingin">Caingin</option>
                        <option value="Calero">Calero</option>
                        <option value="Caliligawan">Caliligawan</option>
                        <option value="Canalate">Canalate</option>
                        <option value="Caniogan">Caniogan</option>
                        <option value="Catmon">Catmon</option>
                        <option value="Cofradia">Cofradia</option>
                        <option value="Dakila">Dakila</option>
                        <option value="Guinhawa">Guinhawa</option>
                        <option value="Liang">Liang</option>
                        <option value="Ligas">Ligas</option>
                        <option value="Longos">Longos</option>
                        <option value="Look 1st">Look 1st</option>
                        <option value="Look 2nd">Look 2nd</option>
                        <option value="Lugam">Lugam</option>
                        <option value="Mabolo">Mabolo</option>
                        <option value="Mambog">Mambog</option>
                        <option value="Masile">Masile</option>
                        <option value="Matimbo">Matimbo</option>
                        <option value="Mojon">Mojon</option>
                        <option value="Namayan">Namayan</option>
                        <option value="Niugan">Niugan</option>
                        <option value="Pamarawan">Pamarawan</option>
                        <option value="Panasahan">Panasahan</option>
                        <option value="Pinagbakahan">Pinagbakahan</option>
                        <option value="San Agustin">San Agustin</option>
                        <option value="San Gabriel">San Gabriel</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Pablo">San Pablo</option>
                        <option value="San Vicente">San Vicente</option>
                        <option value="Santiago">Santiago</option>
                        <option value="Santisima Trinidad">Santisima Trinidad</option>
                        <option value="Santo Cristo">Santo Cristo</option>
                        <option value="Santo Niño">Santo Niño</option>
                        <option value="Santo Rosario">Santo Rosario</option>
                        <option value="Santor">Santor</option>
                        <option value="Sumapang Bata">Sumapang Bata</option>
                        <option value="Sumapang Matanda">Sumapang Matanda</option>
                        <option value="Taal">Taal</option>
                        <option value="Tikay">Tikay</option>
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
                        <option value="College Graduate">College Graduate</option>
                        <option value="College Level">College Level</option>
                        <option value="High School">High School</option>
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $modelFile1 = '../models/model1.model'; 
            $modelFile2 = '../models/model2.model'; 
            $dataFileForModel1 = '../models/user_input_participation_model1.arff'; 
            $dataFileForModel2 = '../models/user_input_factors_model2.arff'; 

            $barangay = $_POST['barangay'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $maritalStatus = $_POST['marital_status'];
            $educationalAttainment = $_POST['educational_attainment'];
            $employmentStatus = $_POST['employment_status'];
            $politicalInterest = $_POST['political_interest'];

            // Prepare ARFF for Model 1
            $arffDataForModel1 = "@relation voter_participation\n\n" .
                                 "@attribute Barangay string\n" .
                                 "@attribute Age numeric\n" .
                                 "@attribute Gender {Male,Female}\n" .
                                 "@attribute Marital_Status {Single,Married}\n" .
                                 "@attribute Educational_Attainment {College_Graduate,College_Level,High_School,Elementary}\n" .
                                 "@attribute Employment_Status {Employed,Unemployed}\n" .
                                 "@attribute Political_Interest {Yes,No}\n" .
                                 "@attribute Factors {Settings_Not_Suitable,Unaware,Uninterested,No_Money}\n\n" .
                                 "@data\n" .
                                 "'$barangay', $age, '$gender', '$maritalStatus', '$educationalAttainment', '$employmentStatus', '$politicalInterest', ?\n";

            file_put_contents($dataFileForModel1, $arffDataForModel1);

            // Predict with Model 1
            $command1 = "java -Xmx1024m -cp ../weka/weka.jar weka.classifiers.Classifier -l $modelFile1 -T $dataFileForModel1 -p 0";
            $output1 = shell_exec($command1);
            $isParticipating = strpos($output1, 'Yes') !== false ? "Yes" : "No";
            echo "<div class='coming-soon'>Prediction: This voter will most likely participate: <strong>$isParticipating</strong></div>";

            // If not participating, prepare data for Model 2
            if ($isParticipating === "No") {
                // Prepare ARFF for Model 2
                $arffDataForModel2 = "@relation voter_non_participation\n\n" .
                                     "@attribute Barangay string\n" .
                                     "@attribute Age numeric\n" .
                                     "@attribute Gender {Male,Female}\n" .
                                     "@attribute Marital_Status {Single,Married}\n" .
                                     "@attribute Educational_Attainment {College_Graduate,College_Level,High_School,Elementary}\n" .
                                     "@attribute Employment_Status {Employed,Unemployed}\n" .
                                     "@attribute Political_Interest {Yes,No}\n" .
                                     "@attribute Factors {Settings_Not_Suitable,Unaware,Uninterested,No_Money}\n\n" .
                                     "@data\n" .
                                     "'$barangay', $age, '$gender', '$maritalStatus', '$educationalAttainment', '$employmentStatus', 'No', ?\n";

                file_put_contents($dataFileForModel2, $arffDataForModel2);

                // Predict with Model 2
                $command2 = "java -Xmx1024m -cp ../weka/weka.jar weka.classifiers.Classifier -l $modelFile2 -T $dataFileForModel2 -p 0";
                $output2 = shell_exec($command2);
                if ($output2) {
                    echo "<div class='coming-soon'>Factors contributing to non-participation:<br>$output2</div>";
                } else {
                    echo "<div class='coming-soon'>No factors found for non-participation.</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
