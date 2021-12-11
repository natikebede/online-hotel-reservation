CREATE TABLE `hotel`.`room` ( `room_no` INT(5) NOT NULL , `room_type` VARCHAR(20) NOT NULL , `room_occupants` INT(3) NOT NULL , `price` INT(5) NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `room` ADD PRIMARY KEY(`room_no`);
ALTER TABLE `room` CHANGE `room_no` `room_no` INT(5) NOT NULL AUTO_INCREMENT;

CREATE TABLE `hotel`.`login` ( `customer_id` INT(5) NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`customer_id`)) ENGINE = InnoDB;

CREATE TABLE `hotel`.`registration` ( `customer_id` INT(5) NOT NULL AUTO_INCREMENT , `first_name` TEXT NOT NULL , `last_name` TEXT NOT NULL , `user_name` VARCHAR(15) NOT NULL , `sex` TEXT NOT NULL , `address` VARCHAR(20) NOT NULL , `phone_number` INT(30) NOT NULL , `email` VARCHAR(30) NOT NULL , `password` VARCHAR(15) NOT NULL , PRIMARY KEY (`customer_id`)) ENGINE = InnoDB;

CREATE TABLE `hotel`.`reservation` ( `reservation_id` INT(5) NOT NULL AUTO_INCREMENT , `arrival_date` DATE NOT NULL , `departure_date` DATE NOT NULL , PRIMARY KEY (`reservation_id`)) ENGINE = InnoDB;

CREATE TABLE `hotel`.`admin` ( `admin_id` INT(5) NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`admin_id`)) ENGINE = InnoDB;

INSERT INTO `hotel`.`admin` (`admin_id`, `user_name`, `password`) VALUES (NULL, 'admin', 'admin')