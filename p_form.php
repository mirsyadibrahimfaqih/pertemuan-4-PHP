<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: url(https://sinergispp.co.id/storage/2022/11/WhatsApp-Image-2022-11-16-at-12.59.19-8.jpeg);
            background-size: cover;
            margin: 0;
            color: white;
        }

        .container {
            max-width: 650px;
            background: rgba(0, 0, 0, 0.5);
            padding: 28px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .result-title {
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            padding-bottom: 20px;
            color: white;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            color: white;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            color: white;
        }

        th {
            background-color: #f2f2f2;
        }
        .registration-results th {
            color: black;
        }

        .back-btn {
            text-align: center;
            margin-top: 20px;
        }

        .back-btn a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-btn a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="result-title">Registration Result</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullName = htmlspecialchars($_POST["fullName"]);
            $umur = htmlspecialchars($_POST["umur"]);
            $email = htmlspecialchars($_POST["email"]);
            $phoneNumber = htmlspecialchars($_POST["phoneNumber"]);
            $pendidikan = htmlspecialchars($_POST["pendidikan"]);
            $hobi = htmlspecialchars($_POST["hobi"]);
            $gender = "";
            if (isset($_POST["gender"])) {
                $gender = htmlspecialchars($_POST["gender"]);
            }

            echo "<table class='registration-results'>";
            echo "<tr><th>Field</th><th>Value</th></tr>";
            echo "<tr><td>Full Name</td><td>$fullName</td></tr>";
            echo "<tr><td>Umur</td><td>$umur</td></tr>";
            echo "<tr><td>Email</td><td>$email</td></tr>";
            echo "<tr><td>Phone Number</td><td>$phoneNumber</td></tr>";
            echo "<tr><td>Pendidikan</td><td>$pendidikan</td></tr>";
            echo "<tr><td>Hobi</td><td>$hobi</td></tr>";
            echo "<tr><td>Gender</td><td>$gender</td></tr>";
            echo "</table>";
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>
        <div class="back-btn">
            <a href="form.php">Back to Form</a>
        </div>
    </div>
</body>

</html>
