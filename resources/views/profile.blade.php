<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WLTugas2</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #f9f9f9 0%, #eaeaea 100%);
        }

        .profile-container {
            text-align: center;
            background-color: #ffffff;
            padding: 60px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .profile-container img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 4px solid #eaeaea;
        }

        .info {
            background-color: #f4f4f4;
            margin: 20px 0;
            padding: 15px;
            border-radius: 25px;
            font-weight: 600;
            color: #333;
        }

        .info strong {
            color: #007BFF;
        }

        .info span {
            display: block;
            margin-top: 5px;
            font-size: 16px;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <img src="{{ asset('assets/images/mu.png') }}" alt="Spidermine">
        <div class="info">
            <strong>Nama:</strong> <span><?= $nama ?></span>
        </div>
        <div class="info">
            <strong>Kelas:</strong> <span><?= $kelas ?></span>
        </div>
        <div class="info">
            <strong>NPM:</strong> <span><?= $npm ?></span>
        </div>
    </div>
</body>

</html>
