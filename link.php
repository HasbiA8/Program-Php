<!DOCTYPE html>
<html>
<head>
    <title>Latihan Desain Link</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <a href="#" class="link-biasa">ini merupakan link biasa</a>
   <a href="#" class="link-button">Link Seperti Button</a>
</body>
</html>
.link-biasa {
    color: #ff3d00;
    font-size: 20px;
    margin: 10px;
    text-decoration: none; /* membuat link tanpa garis bawah */

}
.link-biasa:hover { /* hover unutuk membuat berubah ketika  cursor diarahkan */
   color: *00e676;
   text-decoration: underline; /*membuat link menjadi garis bawah */

}
.link-button {
    color: #fff;
    background: #c2185b;
    font-size: 15px;
    margin-top: 100px;
    padding: 10px;
    text-decoration: none;

}
.link-button:hover {
    background: #2196f3;
}