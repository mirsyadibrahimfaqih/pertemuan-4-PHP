<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Responsif</title>
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
            position: relative;
        }

        .user-input-box label,
        .hobby-label {
            color: white;
            font-size: 20px;
            font-weight: 400;
            margin: 5px 0;
            display: inline-block;
            width: 100%;
        }

        .user-input-box input,
        .user-input-box select {
            height: 40px;
            width: 100%;
            border-radius: 7px;
            outline: none;
            border: 1px solid grey;
            padding: 0 10px;
        }

        .user-input-box.multiselect {
            width: 100%;
        }

        .user-input-box.multiselect .selectBox {
            position: relative;
            width: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .user-input-box.multiselect .selectBox select {
            width: calc(100% + 22px);
            font-size: 16px;
            padding: 10px;
            border: none;
            border-radius: 7px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .user-input-box.multiselect .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 2;
        }

        #checkboxes {
            display: none;
            border: 1px solid #ccc;
            max-height: 150px;
            overflow-y: auto;
            background-color: white;
            border-radius: 7px;
            z-index: 3;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
        }

        #checkboxes label {
            display: block;
            margin: 8px;
            font-size: 14px;
            color: black;
        }

        #checkboxes input[type="checkbox"] {
            height: 20px;
            width: 20px;
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
            color: white;
            padding: 0 15px 0 5px;
            font-size: 18px;
            display: inline-block;
        }

        .gender-category input {
            transform: scale(0.8);
        }

        .form-submit-btn {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .form-submit-btn input {
            width: 50%;
            font-size: 20px;
            padding: 10px;
            border: none;
            border-radius: 5px;
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
        <h1 class="form-title">Registration form</h1>
        <form action="p_form.php" method="post">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name" class="form-control">
                </div>
                <div class="user-input-box">
                    <label for="umur">Age</label>
                    <input type="text" id="umur" name="umur" placeholder="Enter Age" pattern="\d+" class="form-control">
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                </div>
                <div class="user-input-box">
                    <label for="phoneNumber">Phone number</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" pattern="\d+" placeholder="Enter Phone Number" class="form-control">
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
                    <label for="hobi" class="hobby-label">Hobby</label>
                    <div class="selectBox" onclick="showCheckboxes()">
                        <select>
                            <option readonly>Choose a Hobby</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                        <label for="satu"><input type="checkbox" id="satu" name="hobi[]" value="Membaca buku" />Membaca buku</label>
                        <label for="dua"><input type="checkbox" id="dua" name="hobi[]" value="Travelling" />Travelling</label>
                        <label for="tiga"><input type="checkbox" id="tiga" name="hobi[]" value="Olahraga" />Olahraga</label>
                        <label for="empat"><input type="checkbox" id="empat" name="hobi[]" value="Nonton" />Nonton</label>
                        <label for="lima"><input type="checkbox" id="lima" name="hobi[]" value="Hiking" />Hiking</label>
                        <label for="enam"><input type="checkbox" id="enam" name="hobi[]" value="Mancing" />Mancing</label>
                    </div>
                </div>
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" value="other">
                    <label for="other">Other</label>
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Daftar" class="btn btn-primary">
            </div>
        </form>
        <script>
            var expanded = false;

            function showCheckboxes() {
                var checkboxes = document.getElementById("checkboxes");

                if (!expanded) {
                    checkboxes.style.display = "block";
                    checkboxes.style.maxHeight = "none"; // Tambahkan baris ini
                    expanded = true;
                } else {
                    checkboxes.style.display = "none";
                    checkboxes.style.maxHeight = "150px"; // Ganti dengan tinggi maksimal sesuai kebutuhan Anda
                    expanded = false;
                }
            }
        </script>
    </div>
</body>

</html>
