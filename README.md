# PHP OOP Fundamental
Studi Kasus : Sistem Pengelolaan Uang Kas Kelas 

## Penjelasan 
Pencatatan pembayaran uang kas mingguan oleh bendahara kelas saat ini masih menggunakan buku tulis manual, yang menyebabkan pelacakan tunggakan siswa menjadi lambat, rentan terhadap kesalahan perhitungan saldo, berisiko kehilangan data jika buku rusak, serta kurangnya transparansi laporan keuangan bagi anggota kelas. Tujuan pembuatan sistem pengelolaan uang kas untuk mendigitalisasi pengelolaan uang kas sehingga pencatatan transaksi masuk dan keluar menjadi lebih akurat, aman, dan seluruh siswa dapat memantau transparansi dana secara real-time.


## Installation
Make sure to download XAMPP and start Apache and MySQL to actually work and also Visual Studio Code 

- **Php**

[XAMPP](https://pip.pypa.io/en/stable/](https://www.apachefriends.org/download.html )

```bash
git clone https://github.com/Abraham4517/PBO_M3_PHPOOPFundamental.git
cd PBO_M3_PHPOOPFundamental.git
npm install PBO_M3_PHPOOPFundamental.git
```

## Usage

```bash
npm start
```

## Penjelasan 2
Dibuat sebuah class Siswa yang bertindak sebagai blueprint untuk merepresentasikan entitas anggota kelas yang memiliki kewajiban membayar uang kas. 
Class Siswa mendefinisikan tiga buah property, yaitu nama_siswa, nis, dan jumlah_tunggakan, yang berfungsi menyimpan state dan data profil spesifik dari masing-masing siswa. 
Pengisian nilai awal pada setiap data utama tersebut dieksekusi secara otomatis oleh constructor __construct(). Behaviour dari class direpresentasikan melalui dua method, yakni cek_tunggakan() untuk menampilkan informasi sisa tagihan dan bayar_kas() yang berfungsi merubah state dengan mengurangi nominal tunggakan siswa. 
Melalui proses instantiation, diciptakan dua buah object nyata ($siswa1 dan $siswa2) yang berasal dari satu class yang sama, dimana setiap object memiliki nilai state yang berbeda-beda serta mampu menjalankan method sesuai dengan kewajiban tagihan kas pribadinya secara akurat.
