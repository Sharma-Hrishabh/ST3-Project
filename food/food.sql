CREATE TABLE `food` (
`id` int(11) NOT NULL AUTO_INCREMENT, 
  
`name` varchar(100) NOT NULL, 
  
`image` varchar(100) NOT NULL,  
  
`price` float NOT NULL, 
  
PRIMARY KEY (id) 
);



INSERT INTO `food` 
(`id`, `name`, `price`, `image`) 
VALUES
(1, 'Pav Bhaji', 90.00, '1.jpg'),

(2, 'Tava Pulao', 90.00, '2.jpg'),

(3, 'Chowmein', 80.00, '3.jpg'),

(4, 'Burger', 40.00, '4.jpg');


INSERT INTO `food` (`id`, `name`, `price`, `image`) 
VALUES
(5, 'Sandwhich', 90.00, '5.jpg'),

(6, 'Chinese', 70.00, '7.jpg'),

(7, 'Chholey Bhature', 80.00, '8.jpg');