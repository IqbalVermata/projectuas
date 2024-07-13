<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Dosen - Universitas Balaraja</title>
  <style>
    /* Reset default margin and padding */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      color: #343a40;
      line-height: 1.6;
    }

    .navbar {
      background-color: #343a40;
      color: #ffffff;
      padding: 10px 0;
      text-align: center;
    }

    .navbar a {
      color: #ffffff;
      text-decoration: none;
    }

    .sidebar {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px;
    }

    .sidebar a {
      display: block;
      color: #ffffff;
      text-decoration: none;
      padding: 10px 0;
      transition: background-color 0.3s;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .content-wrapper {
      background-color: #ffffff;
      color: #343a40;
      padding: 20px;
      margin: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f1f3f5;
      color: #495057;
      transition: border-color 0.3s;
    }

    .form-control:focus {
      outline: none;
      border-color: #6c757d;
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-dark {
      background-color: #343a40;
      color: #ffffff;
    }

    .btn-dark:hover {
      background-color: #6c757d;
    }

    .btn-danger {
      background-color: #dc3545;
      color: #ffffff;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <a href="#">Tambah Dosen - Universitas Balaraja</a>
  </div>

 
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <?php if(!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success">
              <?php echo session()->getFlashdata('message'); ?>
            </div>
          <?php endif ?>

          <form action="/tambah-data-dosen" method="post">
            <div class="form-group">
              <label for="kode_dosen">Kode Dosen:</label>
              <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="nama_dosen">Nama Dosen:</label>
              <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-dark"><i class="fas fa-plus"></i> Tambah Dosen</button>
            <a href="/dosen" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
