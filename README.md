# Daftar-Buku-Tamu

Buat Database atas nama tamu dan jalankan command ini
```
CREATE TABLE `bukutamu`(
`id` int(11) NOT NULL
auto_increment,
`tanggal`date NOT NULL,
`nama` varchar(50) NOT NULL,
`instansi` varchar(100) NOT NULL,
`kategori` varchar(50) NOT NULL,
`fakultas` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
);
```
