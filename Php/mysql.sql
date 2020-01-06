drop database if exists DanNhac;
create database DanNhac;
use DanNhac;

create table introduce(
id int auto_increment primary key,
names varchar(255),
image varchar(255),
content1 varchar(255),
content2 varchar(255),
note varchar(255)
);
insert into introduce value(1,"Dàn Nhạc Trịnh","../Img/loa.jpg","Dàn loa chuyên nghiệp","Với thời đại công nghệ đổi mới nhanh chóng,dàn nhạc Trịnh chúng tôi luôn nâng cấp dàn loa mỗi ngày để phục vụ quý khách một cách chuyên nghiệp nhất,tốt nhất.Đặc biệt không sử dụng đồ cũ nên quý khách cứ yên tâm khi chọn dàn nhạc chúng tôi","Luôn nâng cấp để trở nên hoàn hảo");

create table service(
id int auto_increment primary key,
image varchar(255),
names varchar(255),
intro varchar(255)
);
insert into service value(1,"../Img/nhaccong.jpg","Đàn Organ","Cảm xúc về tình yêu,về cha mẹ,..dàn nhạc Trịnh bao trùm nhiều mặt"),
						 (2,"../Img/trong.jpg","Trống","Âm nhạc là sự câm lặng giữa nhưng nốt nhạc"),
						 (3,"../Img/dannhac.jpg","Dàn nhạc","Âm nhạc là cách cảm xúc trở thành âm thanh"),
                         (4,"../Img/guitar.jpg","Guitar","Âm nhạc là cách cảm xúc trở thành âm thanh");
create table why(
id int auto_increment primary key,
image varchar(255),
title varchar(255),
intro varchar(255),
detail1 varchar(255),
detail2 varchar(255),
detail3 varchar(255)
);
insert into why value(1,"../Img/c6.jpg","Tại sao bạn nên chọn chúng tôi?","Chúng tôi là một dàn nhạc luôn luôn đáp ứng các nhu cầu để cho quý khách có những giây phút thư giãn thoải máy nhất","Chúng tôi có một dàn loa chuyên nghiệp","Đội ngũ nhân viên nhiệt tình","Hỗ trợ việc vận chuyển dàn nhạc");

create table employee(
id int auto_increment primary key,
name varchar(255),
image varchar(255),
assignment varchar(255),
address varchar(255),
phone varchar(255)
);
insert into employee value(1,"Nguyễn Trịnh(Giám đốc)","../Img/cau6.jpg","Nhạc công","Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng","0983942707"),
                          (2,"Trần Văn Bi","../Img/abi.jpg","Chỉnh âm","Hòa Ninh-Hòa Vang-Đà Nẵng","0876533462"),
						  (3,"Bùi Mạnh","../Img/amanh.jpg","Nhạc công","Hòa Liên-Hòa Vang-Đà Nẵng","0927881056"),
                          (4,"Lê Thị Thu","../Img/co.jpg","MC","Hòa Ninh-Hòa Vang-Đà Nẵng","0926321462"),
                          (5,"Phan Phước Bảo","../Img/chubao.jpg","MC","Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng","0775196254");