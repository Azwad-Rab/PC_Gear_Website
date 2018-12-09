CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
)


INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, '3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),

									(2, 'External Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
									(3, 'Asus Motherboard', 'MOBO', 'images/ASUS.png', 16000.00),
									
(4, 'Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00);
(13, 'ASUS ROG STRIX-GTX1070-O8G-GAMING Graphics Card', 'gpu1', 'images/gpu/gpu 1.jpg', 55000, 'GPU');
