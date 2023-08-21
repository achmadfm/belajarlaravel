<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayo Ngoding - Request Data Laravel</title>
</head>

<body>
    <h3>Form Pendaftaran</h3>
    <form action="pendaftaran/proses" method="post">
        {{csrf_field()}}
        Nama : <input type="text" name="nama">
        <br />
        <br />
        Alamat : <input type="text" name="alamat">
        <br />
        <hr />
        <input type="submit" name="Simpan">
    </form>
</body>

</html>