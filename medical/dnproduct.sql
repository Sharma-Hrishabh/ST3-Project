CREATE TABLE `medicalitems` (
`id` int(11) NOT NULL AUTO_INCREMENT, 
  
`name` varchar(100) NOT NULL, 
  
`image` varchar(100) NOT NULL,  
  
`price` float NOT NULL, 
  
PRIMARY KEY (id) 
);



INSERT INTO `medicalitems` 
(`id`, `name`, `price`, `image`) 
VALUES
(1, '
Dettol 200ml', 100.00, '1.jpg'),

(2, 'Dettol Handwash', 170.00, '2.jpg'),

(3, 'Zandu Balm', 30.00, '3.jpeg'),

(4, 'Moov',200.00, '4.jpg');

