# **Penggunaan CodeIgniter dengan RestServer**
REST (Representational State Transfer), adalah suatu gaya arsitektur perangkat lunak untuk untuk pendistibusian sistem hipermedia seperti www. REST server menyediakan resources (sumber daya/data), REST client dapat mengakses dan menampilkan resource tersebut untuk penggunaan selanjutnya.
<br><br> Dalam penerapan REST pada CodeIgniter diperlukan beberapa library tambahan yang tidak disediakan CodeIgniter, salah satu library yang dapat digunakan adalah library dari Ardisaurus. Penerapan REST pada CodeIgniter dibawah ini akan dijelaskan langkah-langkah pembuatan REST API server tentang CRUD kontak nomor telepon
## Persiapan
* PHP 7.2 or greater
* CodeIgniter 3.1.11+
* Webserver seperti Xampp, Wampp, atau lainnya
* Codeigniter dan library REST server dapat diunduh di https://github.com/chriskacerguis/codeigniter-restserver untuk versi terbaru, versi yang saya buat menggunakan https://github.com/ardisaurus/ci-restserver.
##  
Extract CodeIgniter dan library REST server. Pindah ke htdocs pada direktori xampp lalu rename folder CodeIgniter dan library REST server menjadi rest_ci. Masukan pada browser 
<br>`http://127.0.0.1/rest_ci/index.php/rest_server`
## Konfigurasi database
Buat database baru dengan nama "kontak".
<br>`CREATE DATABASE kontak;`
<br>Buat tabel baru dengan nama "telepon" dengan field id (int 3), nama (varchar 50), nomor (varchar 13).
<pre> CREATE TABLE telepon (id int(3) NOT NULL, 
<br>      nama varchar(50) NOT NULL, 
<br>      nomor varchar(13) NOT NULL, 
<br>      PRIMARY KEY (id); </pre>
Masukan beberapa data
<pre> <code> INSERT INTO telepon (id, nama, nomor) VALUES 
<br>      (1, 'Mohammad', '08576666762'), 
<br>      (2, 'Ainun', '08576666770'),
<br>      (3, 'Ardiansyah', '08576666765'); </code> </pre>
Atur databse pada rest_ci/application/config/database.php 
