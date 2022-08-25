-- Create Database Name: Cars
-- Create Table Name: cars

CREATE TABLE `cars` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `cars` (`brand`, `model`, `color`) VALUES
('Maruti Suzuki','Wagon R','Silver'),
('Maruti Suzuki','Wagon R','White'),
('Maruti Suzuki','Baleno','Blue'),
('Hyundai','Palisade','Red'),
('Hyundai','Nexo','White'),
('Hyundai','City','White'),
('Toyota','Safari','Black'),
('Toyota','Tiago','Orange'),
('Toyota','Altroz','Gray'),
('KIA','Sorento','White'),
('KIA','Rio','Orange'),
('KIA','Sportage','Navy Blue'),
('Mahindra','Scorpio ','White'),
('Mahindra','Thar','Red'),
('Mahindra','XUV300','White');