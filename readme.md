<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## SISTEM INFORMASI OJT SMK NEGERI 2 MAGELANG

Dibuat bersama Siswa-Siswi RPL Club tahun 2019

berikut cara install sistem :

- Pastikan anda sudah mempunyai `composer` dikomputer, jika belum maka lakukan step dibawah ini :
    Download [composer](https//) dan install program tersebut (required internet connection).
- Pastikan anda sudah mempunyai `git bash` dikompter sebagai version controll, jika belum maka lakukan step dibawah ini :
    Download [git bash](https://git-scm.com/downloads) dan install program tersebut.
- Buka git bash dengan direktori di localhost('htdocx').
- Ketikan kode berikut ini pada git bash :

```
git clone https://github.com/arifpujinugroho/SI-OJT.git
```

- Maka akan mengclone sistem si-ojt dari github, tunggu hingga selesai.
- Jika sudah masuk kedalam folder si-ojt dan ketikan kode berikut.

```
composer update
```

- Jika sudah di update maka selanjutnya file `.env.example` di duplikat.
- Setelah `.env.example` di duplikat maka hasil duplikatnya di rename menjadi `.env`.
- Setelah di rename maka jalankan kode berikut ini :

```
php artisan key:generate
```

- Setelah selesai pada file `.env` masukan config database sesuai dengan sistem yang ada di localhost.

- setelah di setting databasenya maka lakukan jalankan kode berikut pada `cmd` dengan direktori file sistem ini.

```
php artisan migrate
```

- Maka nyalakan apache yang ada di localhost kalian atau xampp kalian.
- lalu buka file sistem OJT tersebut.


## TIM Creator
- [Arif Puji Nugroho](https://github.com/arifpujinugroho).
- [Ahmad Wildan Listyanto, S.Pd](https://github.com/).
- Siswa/i RPL Club tahun 2019