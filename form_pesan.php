<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
<body class="p-3 mb-2 bg-body-secondary">
    <div class="container bg-white my-5 p-5 rounded shadow" style="max-width: 740px;">
    <h3>Form Pesan Mahasiswa</h3>

        <form action="hasil_pesan.php" method="post">
            <label class="form-label fw-bold">Nama</label>
    <input type="text" name="nama" class="form-control">
            <label class="form-label fw-bold">Kelas</label>
            <input type="text" name="kelas" class="form-control">
            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Pesan / Kesan</label>
  <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
        
        </div>
</body>
</html>