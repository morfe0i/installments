CREATE DATABASE installments;

USE installments;

CREATE TABLE customers (
	customer_id INT auto_increment NOT NULL primary key,
    fname varchar(50),
    lname varchar(50),
    phone_number BIGINT
);

CREATE TABLE categories (
	category_id INT auto_increment primary key,
    category_name varchar(100)
);

CREATE TABLE items (
	item_id INT auto_increment primary key,
    item_name varchar(100),
    item_price float,
    item_quantity INT,
    category_id INT,
    image_path varchar(255),
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

CREATE TABLE orders (
	order_id INT auto_increment primary key,
    item_id INT,
    customer_id INT,
    start_date DATE,
	installment_price float,
    installments_number INT,
    installments_left INT,
    installments_paid INT,
    order_quantity INT,

    FOREIGN KEY (item_id) REFERENCES items(item_id),
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);