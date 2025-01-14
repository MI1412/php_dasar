<?php
// database adalah suatu isi dari DBMS (Database Manajemen Systems)
// disetiap tabel ada yang namanya primary key
// primary key adalah sebuah data yang dapat merepresenasikan satu baris record secara unik / tidak boleh sama
// record / row / baris dalam database adalah rekaman data dari satu baris tabel itu
// field / column / kolom adalah penanda data dalam database
// key harus ada dalam tabel : primary key, foreign key
// auto increment fitur database untuk melakukan penambahan data
// relationship hubungan antar data
// normalization sebuah proses untuk membuat database kita normal

// konfigurasi mysql
// buka lokasi folder yang berisi file mysl.exe
// ketik cmd mysql -u(user:default root) root -p(password:kosong) 

// method mysql di cli
// show databases; menampilkan isi database
// create database (nama database); membuat database
// use (nama database); menggunakan salah satu database

// cmd tabel
// create table (nama tabel) ((struktur dari tabel));
// show tables; menampilkan semua tabel
// describe (nama tabel); menampilkan struktur tabel
// insert into (nama tabel) values (isi struktur sesuai dengan urutannya jika ada auto_increment gunakan '0')); mengisi struktur tabel ke dalam nama tabel
// select (nama field / kolom),(nama field jika ingin melihat beberapa kolom) from (nama tabel);melihat salah satu atau beberapa kolom dalam mysql
// select * from (nama tabel); melihat semua isi masing masing kolom
// select * from (target tabel diubah) where (nama field / kolom) = (isi struktur dari field); tampilkan semua dari salah satu field yang ada
// update (nama tabel) set (nama field / kolom) = 'nama yang ingin diubah' where (nama field yang ingin dirubah) = 'value dari field'; merubah salah satu isi dari field
// delete from (nama tabel) where (nama field yang ingin dihapus) = 'value dari field'
// drop table (nama tabel yang ingin dihapus); menghapus semua isi dari tabel yang dipilih
// drop database (nama database yang ingin dihapus); menghapus semua isi dari database
