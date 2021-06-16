![Logo-IPB-University-Vertical](https://user-images.githubusercontent.com/48718969/122053687-2a0a0e00-ce11-11eb-875a-a71457a2b178.png)


[Deskripsi](#deskripsi) | [Konsep OOP](#konsep-oop) | [Tipe Desain Pengembangan](#tipe-desain-pengembangan) | [Hasil dan Pembahasan](#hasil-dan-pembahasan) | [Hasil Implementasi](#hasil-implementasi) | [Saran](#saran) | [Developer dan Jobdesk](#developer-dan-jobdesk)
:---:|:---:|:---:|:---:|:---:|:---:|:---:



# Deskripsi Singkat Aplikasi

Forum Menfess IPB adalah media forum berbasis web untuk para mahasiswa IPB berpendapat secara anonim.


#### User Analysis
Website Forum Menfess IPB memiliki 1 jenis pengguna, yaitu mahasiswa. Mahasiswa pengguna website Forum Menfess IPB dibagi menjadi 2 lagi, mahasiswa yang membuat post dan juga mahasiswa yang me-reply-nya. Kedua hal tersebut dapat dilakukan secara anonim atau tanpa identitas. Sehingga mahasiswa dapat leluasa mengeluarkan pendapatnya tanpa khawatir identitasnya diketahui. 

##### User Stories
Saya, sebagai mahasiswa IPB ingin dapat mengutarakan keresahan saya, saya juga tidak ingin identitas saya diketahui ketika saya berpendapat, agar saya dapat berpendapat dengan lebih leluasa.  


#### Spesifikasi
##### Software
Visual Code Studio, PHP Native, CSS, JavaScript, mySQL, Xampp, Github

##### Hardware
Intel Core i5-8250U, NVIDIA GeForce mx 150, 8 GB DDR4, 1000 GB HDD



# Konsep OOP
[`^ kembali ke atas ^`](#)

Pengertian OOP (Object Oriented Programming) adalah suatu metode pemrograman yang berorientasi kepada objek. Tujuan dari OOP diciptakan adalah untuk mempermudah pengembangan program dengan cara mengikuti model yang telah ada di kehidupan sehari-hari. Jadi setiap bagian dari suatu permasalahan adalah objek, nah objek itu sendiri merupakan gabungan dari beberapa objek yang lebih kecil lagi.

#### Enkapsulasi

**Enkapsulasi** adalah salah satu yang paling terpenting di dalam pemrograman berorientasi objek(OOP). karena tahap enkapsulasi lah yang menentukan pemberian hak akses pada setiap property atau method.

#### Inheritance

**Inheritance** atau pewarisan sifat merupakan class turunan dari class yang lainnya. inheritance di buat dengan membuat class baru dengan tujuan di hubungkan dengan class yang lain yang di inginkan. dengan tujuan untuk mendapatkan informasi atau data dari class yang di hubungkan tersebut.

# Tipe Desain Pengembangan
[`^ kembali ke atas ^`](#)

Pada projek kali ini, kami menggunakan tipe desain pengembangan waterfall method. Waterfall method adalah tipe desain pengembangan yang bergerak linear, beurutan, dan sistematis. Tahap yang dilakukan pada waterfall adalah requirements, design, implementation, verification, dan terakhir maintenance. Salah satu kelebihan waterfall method adalah sangat sistematis dan linear, tahap selanjutnya tidak dapat dilakukan sebelum tahap sebelumnya selesai. Tetapi waterfall method juga memiliki kekurangan, antara lain adalah karena memiliki tahap yang linear, projek yang kompleks yang sering melakukan perubahan requirements tidak cocok menggunakan metode ini.

Alasan kami menggunakan waterfall method adalah karena memiliki tahapan yang linear dan sistematis, sehingga cocok untuk kami yang masih memiliki banyak kendala dan butuh banyak belajar dalam men-develop aplikasi, terutama yang berbasis web seperti ini. Alasan lainnya adalah aplikasi yang kami buat tidak membutuhkan perubahan requirements yang terus menerus dan juga waterfall method salah satu metode yang sangat cocok untuk membuat aplikasi sederhana. 



# Hasil dan Pembahasan
[`^ kembali ke atas ^`](#)
#### Use Case Diagram
<h1 align="left"><img src="Usecase_PSBO.png"></h1>

#### Activity Diagram
##### Pembuat Post
![Activity Diagram Post](https://user-images.githubusercontent.com/48718969/121915783-bc50da00-cd5d-11eb-9d79-c218595254ac.png)

##### Pembalas Post
![Activity Diagram reply](https://user-images.githubusercontent.com/48718969/121915828-c8d53280-cd5d-11eb-88b5-bcb6489e074b.png)

#### Entity Relationship Diagram
![erd](https://user-images.githubusercontent.com/48718969/122077122-a870ab00-ce25-11eb-9476-07c8f5ecca91.png)

#### Class Diagram
![classsdiagram](https://user-images.githubusercontent.com/48718969/122077167-b292a980-ce25-11eb-9475-7f94e67074c3.png)

#### Arsitektur Sistem
<h1 align="left"><img src="SystemArchitecture.png"></h1>

#### Fungsi Utama yang Dikembangkan
Fungsi utama dari aplikasi yang kami kembangkan adalah pengguna dapat mem-posting sesuatu secara anonim pada topik tertentu yang sudah disediakan di website. Pengguna juga dapat me-reply post dari pengguna lain secara anonim juga. 


# Hasil Implementasi
[`^ kembali ke atas ^`](#)

![About](https://user-images.githubusercontent.com/60166802/122148812-48a9ec80-ce85-11eb-8d15-eba32884e708.png)
![Register](https://user-images.githubusercontent.com/60166802/122148823-4b0c4680-ce85-11eb-8da2-7c768d0f73f2.png)
![Home dan login](https://user-images.githubusercontent.com/60166802/122148825-4cd60a00-ce85-11eb-9866-cbaf04266558.png)
![Home after login](https://user-images.githubusercontent.com/60166802/122148832-4fd0fa80-ce85-11eb-81e9-9f206d43a03b.png)
![Forum](https://user-images.githubusercontent.com/60166802/122148846-552e4500-ce85-11eb-95df-488aed3a5bd8.png)
![Ask question](https://user-images.githubusercontent.com/60166802/122148851-58c1cc00-ce85-11eb-9817-529e05b4009f.png)
![Contact](https://user-images.githubusercontent.com/60166802/122148858-5a8b8f80-ce85-11eb-8049-6d60361588bd.png)
![Logout](https://user-images.githubusercontent.com/60166802/122148872-5fe8da00-ce85-11eb-9446-dd663f8fb559.png)




# Saran
[`^ kembali ke atas ^`](#)

Sistem yang kami buat masih perlu dikembangkan lebih lanjut, karena kelompok kami tidak menggunakan framework dalam pengembangan (PHP Native) sehingga sistem yang kami buat terasa "basic". Disarankan menggunakan framework bila ingin membuat sistem yang serupa agar pengembangan lebih mudah.



# Developer & Jobdesk
[`^ kembali ke atas ^`](#)

| Nama                   |      NIM        |      Jobdesk     |
| ---------------------- | --------------- | ---------------- |
| Yuda Baskara           | G64180046       |  Project Manager, User Analyst |
| Ahmad Tedy Murtadho    | G64180082       |  Back End        |
| Muhammad Andhika Gema  | G64180055       |  UI/UX Designer, Front End  |
| Fawwaz Khairi          | G64180042       |  Front End       |
| Muhammad Khadafi       | G64180039       |  System Analyst  |



