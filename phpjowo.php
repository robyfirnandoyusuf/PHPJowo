<?phpjowo
// class
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

