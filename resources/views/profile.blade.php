<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WLTugas2</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            max-width: 450px;
            width: 100%;
        }

        .profile-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .profile-container img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 5px solid #007BFF;
            object-fit: cover;
        }

        .info {
            background-color: #f7f7f7;
            margin: 15px 0;
            padding: 15px;
            border-radius: 30px;
            font-weight: 600;
            color: #333;
            transition: background-color 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .info p {
            margin: 0;
        }

        .info strong {
            color: #007BFF;
            font-size: 18px;
        }

        .info span {
            font-size: 16px;
            font-weight: 400;
        }

        .info:hover {
            background-color: #e0e0e0;
        }

        .profile-container img:hover {
            border-color: #0056b3;
        }

        /* Floating hover effect on the image */
        .profile-container img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-container img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <!-- Pastikan path di sini benar -->
        <img src="{{ asset('storage/public/uploads/' . $user->foto) }}" alt="User Image">
        <div class="info">
            <p class="label"><strong>Nama:</strong></p>
            <p class="value">{{ $user->nama }}</p>
        </div>
        <div class="info">
            <p class="label"><strong>NPM:</strong></p>
            <p class="value">{{ $user->npm }}</p>
        </div>
        <div class="info">
            <p class="label"><strong>Kelas:</strong></p>
            <p class="value">{{ $user->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
        </div>
    </div>
</body>

</html>
