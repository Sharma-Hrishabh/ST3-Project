CREATE TABLE `dailyneeds` (
`id` int(11) NOT NULL AUTO_INCREMENT, 
  
`name` varchar(100) NOT NULL, 
  
`image` varchar(100) NOT NULL,  
  
`price` float NOT NULL, 
  
PRIMARY KEY (id) 
);



INSERT INTO `dailyneeds` 
(`id`, `name`, `price`, `image`) 
VALUES
(1, '
Classmate Notebook Pack of 6', 270.00, '1.jpg'),

(2, 'Cello Ball Pen- Pack of 10 (Blue) ', 100.00, '2.jpg'),

(3, 'Cello Ball Pen- Pack of 10 (Black)', 100.00, '3.jpg'),

(4, 'Casio FX-991ES Plus Scientific Calculator ',945.00, '4.jpg');



INSERT INTO `dailyneeds` (`id`, `name`, `price`, `image`) 
VALUES
(5, 'Maped 0.5 Compass  (Grey)', 90.00, '5.jpeg'),

(6, 'DOMS Neon Round Shaped Pencils',149.00, '7.jpeg'),

(7, 'Classmate asteroid Metal Geometry Boxes ', 212.00, '8.jpeg');


