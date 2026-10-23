<?php

class Siswa {
    // 3 Property sesuai rancangan sistem
    public string $nama_siswa;
    public string $nis;
    public int $jumlah_tunggakan;

    // Constructor untuk menginisialisasi object saat dibuat
    public function __construct(string $nama_siswa, string $nis, int $jumlah_tunggakan) {
        $this->nama_siswa = $nama_siswa;
        $this->nis = $nis;
        $this->jumlah_tunggakan = $jumlah_tunggakan;
    }

    // Method 1: Menampilkan info sisa tunggakan kas
    public function cek_tunggakan(): void {
        echo "Siswa: {$this->nama_siswa} (NIS: {$this->nis})<br>";
        echo "Jumlah Tunggakan: Rp" . number_format($this->jumlah_tunggakan, 0, ',', '.') . "<br>";
    }

    // Method 2: Melakukan pembayaran dan mengurangi jumlah tunggakan
    public function bayar_kas(int $nominal): void {
        echo "-> {$this->nama_siswa} membayar kas sebesar Rp" . number_format($nominal, 0, ',', '.') . "<br>";
        $this->jumlah_tunggakan -= $nominal;
        
        // Memastikan tunggakan tidak menjadi minus
        if ($this->jumlah_tunggakan < 0) {
            $this->jumlah_tunggakan = 0;
        }
    }
}

// ==========================================
// INSTANTIATION: Membuat 2 object berbeda
// ==========================================
$siswa1 = new Siswa("Abraham Banyu Pradipta", "20251020006", 50000);
$siswa2 = new Siswa("Budi Santoso", "20251020007", 20000);

// Menjalankan program dan memanggil method
echo "=== Status Awal ===<br>";
$siswa1->cek_tunggakan();
echo "<br>";
$siswa2->cek_tunggakan();
echo "<br>";

echo "=== Proses Pembayaran ===<br>";
$siswa1->bayar_kas(30000);
$siswa2->bayar_kas(20000);
echo "<br>";

echo "=== Status Akhir ===<br>";
$siswa1->cek_tunggakan();
echo "<br>";
$siswa2->cek_tunggakan();

?>