# Instagram Email Checker
Untuk detail lebih lanjut silahkan pahami di dalam file nya. Untuk mempermudah, akan saya jelaskan sedikit dibawah ini.

## Panggil class
Masukkan pada awal script
```
require '../src/MailCheck.php';
```

## Jalankan
Untuk menjalankan cukup mudah, gunakan `check()` contohnya:
```
check($argv[1]);
```

## Command
Apabila menggunakan CLI, contoh perintahnya adalah seperti ini:
```
php run.php list-mail.txt
```

## Result
Tentang result, dapat di lihat dibawah ini:
```
error: 0 => Sukses login.
error: 1 => Username & password benar, namun terkena checkpoint.
error: 2 => Password salah & Gagal login.
error: 0 => Username/email tidak terdaftar.
```


## Credit
Terima kasih kepada pemilik `class/Instagram.php`. Mohon maaf saya tidak tahu siapa yang buat, dari awal saya punya (lupa dapat darimana) sudah tidak meninggalkan Copyright.


**Gunakan dengan bijak!**
