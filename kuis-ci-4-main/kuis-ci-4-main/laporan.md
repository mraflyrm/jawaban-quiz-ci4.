# Laporan Kuis CI4 Bug Fix v3

## Nama:Muhammad Rafly Rayhan Maulana   
## NIM:231080200178
## Kelas:4B1

## Bug yang Diperbaiki

1.<?php

$routes->get('/', 'Main::index');
$routes->match('get', 'home/tambah', 'Home::tambah');

//seharusnya $routes->get('home/tambah', 'Home::tambah');
//kurang penutup ?>
jadinya 
<?php

$routes->get('/', 'Main::index');
$routes->get('home/tambah', 'Home::tambah');
?>
2. return view('user', $data)
kurang ;
3. $userModel = new usermodel;
kurang ()
jadinya $userModel = new usermodel();
4. use Codeigniter\Model;
seharusnya menggunakan I besar 
5. <form action="/home/tambah" method="post">
sebelumnya tanpa method="post"
6.  <input type="text" name="nama"><br>
sebelumnya name="nama"
