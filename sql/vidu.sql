CREATE DATABASE IF NOT EXISTS quan_ly_trang_xem_phim;
USE quan_ly_trang_xem_phim;
#1. thể loại:
#2. phim:tên(varchar),ngày sx(date) , thời lượng(int), đạo diễn, diễn viên 
#3. người dùng:tên đăng nhập, giới tính , email,
#4. quốc gia: mã vùng, tên,
#5.tập phim:

 CREATE TABLE nguoi_dung(
    idUser INT PRIMARY KEY,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR (50),
    email VARCHAR(100),
    ngay_sinh datetime
);
 CREATE TABLE the_loai(
    id_theloai INT PRIMARY KEY AUTO_INCREMENT,
     ten_theloai VARCHAR(100) NOT NULL
);
     CREATE TABLE QuocGia (
    id_quocgia INT PRIMARY KEY AUTO_INCREMENT,
    ten_quocgia VARCHAR(100) NOT NULL
);
     CREATE TABLE Phim (
    id_phim INT PRIMARY KEY AUTO_INCREMENT,
    ten_phim VARCHAR(255) NOT NULL,
    nam_sx INT,
    id_theloai INT,
    id_quocgia INT,
    mo_ta text,
    FOREIGN KEY (id_theloai) REFERENCES TheLoai(id_theloai),
    FOREIGN KEY (id_quocgia) REFERENCES QuocGia(id_quocgia)
);
CREATE TABLE TapPhim (
    id_tapphim INT PRIMARY KEY AUTO_INCREMENT,
    id_phim INT,
    so_tap INT,
    ten_tap VARCHAR(255),
    thoi_luong INT,
    FOREIGN KEY (id_phim) REFERENCES Phim(id_phim)
    );