Create database NoQ;

Create table login (ID int(8) auto_increment, username varchar(100) unique Not Null, password varchar(100) Not Null, status char(1) Not Null, Primary Key(ID));

Create table image (ID int(8) auto_increment, imageID int(8), image varchar(20), Primary Key(ID), Foreign Key(imageID) References login(ID) ON Update cascade);

Create table customer (ID int(8) auto_increment, cusID int(8), name varchar(100), gender char(1), phone varchar(20), Primary Key(ID), Foreign Key(cusID) References login(ID) ON Update cascade);

Create table restaurant (ID int(8) auto_increment, resID int(8), name varchar(100), address varchar(100), phone varchar(20), opHour varchar(20), description varchar(1000), Primary Key(ID), Foreign Key(resID) References login(ID) ON Update cascade);

Create table homepage (ID int(8) auto_increment, homeID int(8), Primary Key(ID), Foreign Key(homeID) References restaurant(ID) ON Update cascade);

Create table seat (ID int(8) auto_increment, restaurantID int(8), tableID char(1), seat int(4) default 0, occupied int(4) default 0, waiting int(4) default 0, Primary Key(ID), Foreign Key(restaurantID) References restaurant(ID) ON Update cascade);


DELIMITER $$
Create trigger after_new_login
After Insert ON login
For Each Row
Begin
Insert Into image(imageID) Values (NEW.ID);
IF (NEW.status = '1') THEN
Insert Into customer(cusID) Values (NEW.ID);
ELSE
Insert Into restaurant(resID) Values (NEW.ID);
END IF;
END$$
DELIMITER ;

DELIMITER $$
Create trigger after_new_restaurant
After Insert ON  restaurant
For Each Row
Begin
Insert Into seat(restaurantID, tableID) Values (NEW.ID, '1');
Insert Into seat(restaurantID, tableID) Values (NEW.ID, '2');
Insert Into seat(restaurantID, tableID) Values (NEW.ID, '3');
END$$
DELIMITER ;



-- Testing Part --
Alter table login auto_increment = 7001;

Insert Into login(username, password, status) Values ('cs', 'cs', '1');
Insert Into login(username, password, status) Values ('nom', 'nom', '2');

Select * from login;
Select * from image;
Select * from customer;
Select * from restaurant;
select * from seat;


