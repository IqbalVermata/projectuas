<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            max-width: 400px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: slideUp 0.5s ease;
        }
        .card-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .card-header h3 {
            margin-bottom: 0;
        }
        .card-body {
            padding: 20px;
            background-color: #ffffff;
        }
        .alert-info {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 5px;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
        .alert-info h4 {
            margin-bottom: 10px;
            font-size: 18px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0052cc;
        }
        @keyframes slideUp {
            from {
                transform: translateY(100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-bell"></i> Notifikasi</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Notifikasi Telah Terkirim!</h4>
                    <p><?= $message; ?></p>
                </div>
                <a href="/dosen" class="btn btn-primary btn-block"><i class="fas fa-arrow-left"></i> Kembali ke Data Dosen</a>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
