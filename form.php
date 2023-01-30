<!DOCTYPE html>
<html>
<head>
<title>Belajar Membuat Form</title>
</head>
<body>
    <form action="proses_form.php" method="get">
        Nama <input type="text" name="nama" />
    <br />
    jenis kelamin :
<input type="radio" name="jenis_kelamin" value="laki-laki" checked />
Laki - laki
<input type="radio" name="jenis_kelamin" value="perempuan" />
perempuan
<br />
Hobi: <input type="checkbox" name="hobi_ngoding" /> hobi_ngoding
      <input type="checkbox" name="hobi_nulis" checked /> Menulis
<br />
Asal Kota:
  <select name="asal_kota" >
      <option value="kota jakarta"> jakarta</option>
      <option value="kota bandung"> bandung</option>
      <option value="kota semarang" selected>banjarmasin</option>
</select>
<br />
komentar anda
<textarea name="komentar" row="5" cols="20">
  isi text 
</textarea>
  <br/>
  <input type="submit" value="Mulai Proses">
</form>
</body>
</html>