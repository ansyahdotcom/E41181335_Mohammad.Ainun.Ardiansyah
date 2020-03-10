# **Penggunaan CodeIgniter dengan RestServer**
<br> REST (Representational State Transfer), adalah suatu gaya arsitektur perangkat lunak untuk untuk pendistibusian sistem hipermedia seperti www. REST server menyediakan resources (sumber daya/data), REST client dapat mengakses dan menampilkan resource tersebut untuk penggunaan selanjutnya.
<br><br> Dalam penerapan REST pada Codeigniter diperlukan beberapa library tambahan yang tidak disediakan secara default pada Codeigniter, salah satu library yang dapat digunakan adalah library dari Ardisaurus. Sebagai contoh penerapan REST pada Codeigniter di bawah ini akan dijelaskan langkah-langkah pembuatan REST API server sederhana tentang CRUD kontak nomor telepon. REST API server tersebut selanjutnya akan diuji menggunakan Postman.
## Persiapan
* PHP 7.2 or greater
* CodeIgniter 3.1.11+
* Webserver seperti Xampp, Wampp, atau lainnya
* Codeigniter dan library REST server yang diperlukan dapat diunduh di https://github.com/chriskacerguis/codeigniter-restserver untuk versi terbaru, versi yang digunakan disini adalah https://github.com/ardisaurus/ci-restserver.
<br><br> 
Extract Codeigniter dan library REST server. Pindah ke htdocs pada direktori xampp lalu rename folder Codeigniter dan library REST server menjadi rest_ci. Masukan pada browser 
> http://127.0.0.1/rest_ci/index.php/rest_server 
