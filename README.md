PHPJowo
===================

Repositori ini berisi interpreter PHP (Zend Engine) yang telah dimodifikasi sehingga sintaks-sintaks dasarnya menggunakan bahasa Jawa. Penjelasan lebih lanjut ada di bagian bawah halaman ini.

Untuk saat ini, baru versi CLI yang sudah dicoba. "SAPI" lainnya (untuk web server) belum dicoba dan belum tentu bisa digunakan, namun web server internal (`php -S host:port`) dapat berfungsi. Basis dari repositori ini adalah PHP versi 7.3.3.


## Kompilasi (Linux)
Instal package yang diperlukan (sesuaikan untuk platform lain)
```
$ sudo apt install build-essential bison re2c libxml2-dev libreadline-dev 
```
Clone repositori ini
```
$ git clone --depth=1 https://github.com/robyfirnandoyusuf/PHPJowo.git
```
Konfigurasi dan build
```
$ cd PHPJowo/
$ ./buildconf --force
$ ./configure --disable-phar --with-readline
$ make -j 4
```
Hasil build (PHP CLI) akan berada di folder `sapi/cli`.
```
$ sapi/cli/php -v
PHP 7.3.3 (cli) (built: Aug 21 2019 11:10:31) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.3, Copyright (c) 1998-2018 Zend Technologies
```

Dapat langsung dicoba dengan interactive mode di PHP CLI (`php -a`) atau disimpan dalam file dan dieksekusi (`php namafile.jowo`).

Halo dunia:
```php
// echo
tampilno "Halo", "Cok\n";

// print
cithak "Halo Cok";
```

Variabel, operator, konstanta:
```php
// true / false, var_dump
$b = bener;
$s = salah;
cok($b, $s);

// unset
busak($s);

// isset
$ada = diset($s);

// define
definisino('TEST', 123);

// defined, die
terdefinisi('KOSONG') utowo pateni('definisi ora ono');
```
Beberapa hal terkait array:
```php
// array sintaks lama, print_r
$x = larik(10, 20, 30);
jancok($x);

// list
daftar($a, $b) = [100, 200];
cithak $b . "\n";

// count / sizeof
$c = itung($x);
$c = ukuran($x); 
cithak $c;
```

Kondisional dan struktur kontrol:
```php
// if, else, empty
$a = 10;
lek (kosong($a)) {
    tampilno "kosong\n";
} lek liyane ($a > 0) {
    tampilno "positif\n";
} liyane {
    tampilno "negatif\n";
}

// switch, case, break
$b = 2;
pilihan($b) {
    yen 1: 
        $c = "siji"; 
        mandheg;
    yen 2:
        $c = "loro";
        mandheg;
    default:
        $c = "akeh";
}
cithak $c . "\n";

// try, catch, finally
cobaken {
    uncalno Exception anyar("error!");
} cekel (Exception $e) {
    cok($e);
} akhire {
    cithak "akhirnya...";
}

// exit
metu("metu");
```

Struktur perulangan:
```php
// for
gawe ($i = 1; $i <= 3; $i++) {
    tampilno $i . "\n";
}

// while, break
$i = 1;
naliko ($i <= 100) {
    tampilno $i . "\n";
    lek ($i == 5) mandheg;
    $i++;
}

// do while
$i = 10;
kerjakno {
    cetak $i . "\n";
    $i += 10;
} naliko ($i <= 50);

// foreach, as, continue
$l = ['satu' => 1, 'dua' => 2, 'tiga' => 3, 'empat' => 4];
gawesaben ($l dadi $a => $b) {
    lek ($b == 2) lanjutno;
    cetak $a . "\n";
}

// range -> sawetoro
gawesaben (sawetoro(1, 5) dadi $i) {
    cithak $i;
}
```

```php
// eval
jalankan("cetak 'ini dievaluasi';");

// include, include_once, require, require_once
lebokno 'iki-malang.php';
lebokno_pisan 'iki-malang.php';
mbutuhno 'iki-malang.php';
mbutuhno_pisan 'iki-malang.php';
```

## Contoh-contoh OOP

Deklarasi dan instantiasi class:
```php
kelas Cewe {
    // atribut kelas harus diawali (publik, diproteksi, privat)
    publik $nama;
    privat $usia;

    // konstruktor
    fungsi publik __konstruktor($n, $u) {
        // $this diganti $iki :)
        $iki->nama = $n;
        $iki->usia = $u;
    }

    fungsi publik informasi() {
        balekno $iki->nama . " berusia " . $iki->usia;
    }
}


// instantiasi class bisa dengan prefix "nggae"
$orang1 = ngggae Cewe("Adellia", 18);
cithak $orang1->informasi() . "\n";
```

Trait di PHP:
```php
// trait
sipat Wibu {
    fungsi publik nolep() {
        cithak "nolep !\n";
    }
}

kelas Hewan {
    // use trait
    gunakno Wibu;

    fungsi publik turu() {
        cithak "mati\n";
    }
}

$hewan = nggae Hewan;
$hewan->nolep();
$hewan->turu();
