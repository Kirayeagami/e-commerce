"# e-commerce" 
E-commerce-in-PHP
===================

i use php , html ,tailwind css, js

# For ***DATABASE*** i use MySql
--------------------------------

# in This project there is the BD name is ecom.
# Tables are :-
        * users
        * sellers
        * products
        * specifications
        * cart
        * product_keywords
        * ShippingInfo
        * PaymentInfo

# Table CREATE command :

## users :-
        **
## sellers :-
        **
## product :-
        CREATE TABLE products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        uploder_email VARCHAR(255) NOT NULL,
        product_name VARCHAR(255) NOT NULL,
        product_description TEXT NOT NULL,
        categories VARCHAR(255) NOT NULL,
        payment_type VARCHAR(50) NOT NULL,
        product_total_stock INT NOT NULL,
        refundable VARCHAR(50) NOT NULL,
        product_max_price VARCHAR(50) NOT NULL,
        product_min_price VARCHAR(50) NOT NULL,
        product_pickup_address VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
## specifications :-
        CREATE TABLE specifications (
        id INT AUTO_INCREMENT PRIMARY KEY,
        product_id INT NOT NULL,
        spec_name VARCHAR(255) NOT NULL,
        spec_description TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
        );
## product_keywords :-
        create table product_keywords (
        id int auto_increment primary key,
        product_id int not null,
        keywords varchar(255),
        FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
        );
## cart :-
        create table cart(
        id int auto_increment primary key,
        user_email varchar(255) not null,
        user_type varchar(255) not null,
        product_id int not null ,
        product_quantity int not null default 1,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );
## ShippingInfo :-
        CREATE TABLE ShippingInfo (
        id INT PRIMARY KEY AUTO_INCREMENT,
        user_email varchar(255) not null,
        fullName VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phoneNumber VARCHAR(20) NOT NULL,
        address TEXT NOT NULL,
        pinCode VARCHAR(10) NOT NULL
        );
## PaymentInfo :- 
        CREATE TABLE PaymentInfo (
        id INT PRIMARY KEY AUTO_INCREMENT,
        user_email varchar(255) not null,
        cardNumber VARCHAR(16) NOT NULL,
        cardholderName VARCHAR(255) NOT NULL,
        expiryDate VARCHAR(7) NOT NULL, -- Format: MM/YYYY
        cvv VARCHAR(3) NOT NULL
        );"# My-Project" 
"# fashion_experiment" 
