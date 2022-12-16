
## Data Diri | UJIAN AKHIR SEMESTER (UAS)
Nama        : Kenrick Lau
Nim         : 03081200051
Kelas       : 20SI2
Mata Kuliah : Business Application Programming (BAP)

## No 1
Soal:
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).

Jawaban:
Table yang saya tambahkan adalah Delivery Fee. Dapat diakses pada http://127.0.0.1:8000/admin/Tujuan atau melalui sidebar.

## No 2
Soal:
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file queryUAS.sql(20poin).

Jawaban:
Query View tersebut dapat dilihat pada sidebar yang berjudul Sold Product atau dapat dicek melalui http://127.0.0.1:8000/admin/sold. Untuk file queryUAS.sql terlampir pada repository Github.

## No 3
Soal: 
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Jawaban:
Seperti nomor 2, Query View dapat di cek pada http://127.0.0.1:8000/admin/tujuan yang dimana terdapat button Print PDF. Laporan itu akan digenerate menjadi Laporan PDF dan akan otomatis terdownload. 


## No 4
Soal:
Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Jawaban:

         $validated = $request->validate([
            'dikirim_ke' => 'required|max:50',
        ]);

## No 5
Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github: https://github.com/ericklauriantoo/UAS-BAP-03081200002-ERICK-LAURIANTO-20SI2