<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Registration Form</title>
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
        }

        .container {
            max-width: 650px;
            background: rgba(0, 0, 0, 0.5);
            padding: 28px;
            border-radius: 10px;
            box-shadow: inset -2px 2px 2px white;
        }

        .form-title {
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            padding-bottom: 6px;
            color: white;
            text-shadow: 2px 2px 2px black;
            border-bottom: solid 1px white;
        }

        .main-user-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 0;
        }

        .user-input-box {
            width: 48%;
            margin-bottom: 15px;
        }

        .user-input-box label {
            color: white;
            font-size: 20px;
            font-weight: 400;
            margin: 5px 0;
        }

        .user-input-box input {
            height: 40px;
            width: 100%;
            border-radius: 7px;
            outline: none;
            border: 1px solid grey;
            padding: 0 10px;
        }

        .gender-title {
            color: white;
            font-size: 24px;
            font-weight: 600;
            border-bottom: 1px solid white;
            margin-top: 20px;
            padding-bottom: 5px;
        }

        .gender-category label {
            color: white; /* Perubahan warna teks menjadi putih */
            padding: 0 20px 0 5px;
        }

        .form-submit-btn {
            margin-top: 40px;
        }

        .form-submit-btn input {
            display: block;
            width: 100%;
            margin-top: 10px;
            font-size: 20px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            color: rgb(209, 209, 209);
            background: rgba(63, 114, 76, 0.7);
            cursor: pointer;
        }

        .form-submit-btn input:hover {
            background: rgba(56, 204, 93, 0.7);
            color: rgb(255, 255, 255);
        }

        @media (max-width: 600px) {
            .user-input-box {
                width: 100%;
            }

            .gender-category {
                display: flex;
                justify-content: space-between;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Registration</h1>
        <form action="p_form.php" method="post">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name" class="form-control">
                </div>
                <div class="user-input-box">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" class="form-control">
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                </div>
                <div class="user-input-box">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" class="form-control">
                </div>
                <div class="user-input-box">
                    <label for="pendidikan">Pendidikan</label>
                    <select id="pendidikan" name="pendidikan" class="form-control">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="DI">DI</option>
                        <option value="DII">DII</option>
                        <option value="DIII">DIII</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="user-input-box">
                    <label for="Hobi">Hobi</label>
                    <select id="hobi" name="hobi" class="form-control">
                        <option value="Membaca buku">Membaca buku</option>
                        <option value="Travelling">Travelling</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Nonton">Nonton</option>
                        <option value="Hiking">Hiking</option>
                        <option value="Mancing">Mancing</option>
                    </select>
                </div>
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" value="Other">
                    <label for="other">Other</label>
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
