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
OK => Email terkait terdaftar di Instagram
BAD => Email terkait tidak terdaftar di Instagram
BAD | Wrong Email => Format Email salah

```


## Credit
Terima kasih kepada pemilik `class/Instagram.php`. Mohon maaf saya tidak tahu siapa yang buat, dari awal saya punya (lupa dapat darimana) sudah tidak meninggalkan Copyright.


**Gunakan dengan bijak!**
