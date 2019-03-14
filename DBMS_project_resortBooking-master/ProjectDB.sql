

create table food(
	f_id char(3) primary key,
	item varchar(20),
	cuisine varchar(20),
	cost int(3)
);
create table serves(
	f_id char(3) references food,
	r_id char(5) references resort
);

create table bill(
	bill_id char(5) primary key,
	ssn char(5) references customer,
	amount int,
);
insert into bill values('b0001','50000',10000,'2018-03-28','visa');
insert into bill values('b0002','50001',5000,'2018-03-22','cash');
insert into bill values('b0003','50002',8000,'2018-03-23','cheque');
insert into bill values('b0004','50003',20000,'2018-03-24','visa');
insert into bill values('b0005','50004',15000,'2018-03-25','cash');

insert  into food values('f01','idly','indian','100');
insert  into food values('f02','dosa','indian','200');
insert  into food values('f03','poori','indian','300');
insert  into food values('f04','parota','indian','500');
insert  into food values('f05','noodles','chineese','400');


insert into serves values('f01','30000');
insert into serves values('f02','30000');
insert into serves values('f03','30000');
insert into serves values('f05','30001');
insert into serves values('f04','30001');
insert into serves values('f03','30002');
insert into serves values('f02','30002');
insert into serves values('f04','30003');
insert into serves values('f05','30003');
insert into serves values('f04','30004');
insert into serves values('f05','30004');
insert into serves values('f01','30005');
insert into serves values('f02','30005');
insert into serves values('f05','30005');
