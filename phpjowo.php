<?phpjowo
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

//class
/*kelas Cewe {
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
$orang1 = nggae Cewe("Adellia", 18);
cithak $orang1->informasi() . "\n";

*/