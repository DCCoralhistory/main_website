CREATE DATABASE IF NOT EXISTS `data`;
USE `data`;
CREATE TABLE IF NOT EXISTS `interviews` (
   `id` int NOT NULL AUTO_INCREMENT,
   `interviewed.name` varchar(100),
   `interviewer.name` varchar(100),
   `interviewed.img.loc` VARCHAR(100) DEFAULT 'http://3.bp.blogspot.com/-vDVPkjRdGsY/Tea7KyaCQmI/AAAAAAAAAL0/EEtwpKURoro/s400/3.jpg',
   `interviewer.img.loc` VARCHAR(100) DEFAULT 'http://www.how-to-draw-funny-cartoons.com/image-files/cartoon-eyeball-6.gif',
   `interviewed.shortDesc` VARCHAR(500) DEFAULT 'Sorry, but your profile does not have a description assosciated',
   `interviewer.shortDesc` VARCHAR(500) DEFAULT 'Sorry, but your profile does not have a description assosciated',
   PRIMARY KEY(id)
);
INSERT INTO interviews VALUES(1,'Harrison','Joe','http://3.bp.blogspot.com/-vDVPkjRdGsY/Tea7KyaCQmI/AAAAAAAAAL0/EEtwpKURoro/s400/3.jpg','http://www.how-to-draw-funny-cartoons.com/image-files/cartoon-eyeball-6.gif','Sorry, but your profile does not have a description assosciated','Sorry, but your profile does not have a description assosciated');