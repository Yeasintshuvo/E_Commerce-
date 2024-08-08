create database ecommerce_website;
use ecommerce_website;
CREATE TABLE products1(
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(200) NOT NULL,
  `product_price` VARCHAR(20) NOT NULL,
  `product_details` VARCHAR(1000) NOT NULL,
  `product_image` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`id`));