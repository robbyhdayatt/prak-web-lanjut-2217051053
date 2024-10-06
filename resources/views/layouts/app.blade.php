<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts (optional for styling) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border-radius: 15px 15px 0 0;
        }

        .card-header h4 {
            color: #fff;
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .form-control, .form-select {
            border-radius: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        .input-group-text {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            color: #fff;
            border-radius: 8px 0 0 8px;
            border: none;
        }
    </style>
</head>

<body>

    @yield(section: 'content')

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <script>
        // JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>

</body>


</html>