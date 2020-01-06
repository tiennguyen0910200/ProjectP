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
