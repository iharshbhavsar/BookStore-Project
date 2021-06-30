create table BookInventoryOrder(
    orderid int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    bookname varchar(25) NOT NULL,
    custfirstname varchar(25) not null,
    custlastname varchar(25) not null,
    payment varchar(20) not null
    );