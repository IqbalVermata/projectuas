<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Dosen - Universitas Tigaraksa</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    :root {
      --primary-color: #FF69B4;
      --secondary-color: #FFC0CB;
      --text-color: #333;
      --bg-color: #FFF0F5;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    header {
      background-color: var(--primary-color);
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    h1 {
      margin: 0;
      font-size: 2.5em;
      animation: fadeInDown 1s ease-out;
    }

    .btn {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
    }

    .btn:hover {
      background-color: #FF1493;
      transform: translateY(-2px);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      animation: fadeIn 1s ease-out;
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: var(--secondary-color);
      color: var(--text-color);
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    .action-btn {
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .success {
      background-color: #4CAF50;
      color: white;
    }

    .danger {
      background-color: #f44336;
      color: white;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fadeIn {
      animation: fadeIn 1s ease-out;
    }
  </style>
</head>
<body>
  <header>
    <h1>Universitas Balaraja</h1>
  </header>

  <div class="container">
    <h2 class="fadeIn">Dosen</h2>

    <?php if(!empty(session()->getFlashdata('message'))) : ?>
    <div class="alert fadeIn">
      <?php echo session()->getFlashdata('message'); ?>
    </div>
    <?php endif ?>

    <a href="/tambah-data-dosen" class="btn fadeIn">
      <i class=""></i> Tambah 
    </a>

    <table>
      <thead>
        <tr>
          <th>Kode Dosen</th>
          <th>Nama Dosen</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($DataDosen as $key => $dosen) : ?>
        <tr class="fadeIn" style="animation-delay: <?php echo $key * 0.1; ?>s">
          <td><?php echo $dosen['kode_dosen'] ?></td>
          <td><?php echo $dosen['nama_dosen'] ?></td>
          <td>
            <a href="notifikasi/dosen-masuk/<?= $dosen['id_dosen'];?>" class="action-btn success">
              <i class=""></i> masuk
            </a>
            <a href="notifikasi/dosen-tidak-masuk/<?= $dosen['id_dosen'];?>" class="action-btn danger">
              <i class=""></i> tidak masuk
            </a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

  <script>
    // Add any additional JavaScript here
  </script>
</body>
</html>