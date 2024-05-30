use installments;

-- Random data for customers table
INSERT INTO customers (fname, lname, phone_number) VALUES ('أحمد', 'محمود', 123456789);
INSERT INTO customers (fname, lname, phone_number) VALUES ('محمد', 'علي', 987654321);
INSERT INTO customers (fname, lname, phone_number) VALUES ('فاطمة', 'أحمد', 555666777);
INSERT INTO customers (fname, lname, phone_number) VALUES ('نور', 'عبدالله', 111222333);
INSERT INTO customers (fname, lname, phone_number) VALUES ('يوسف', 'مصطفى', 444555666);
INSERT INTO customers (fname, lname, phone_number) VALUES ('ريم', 'أحمد', 888999000);
INSERT INTO customers (fname, lname, phone_number) VALUES ('سارة', 'علي', 777888999);
INSERT INTO customers (fname, lname, phone_number) VALUES ('علي', 'أحمد', 333444555);
INSERT INTO customers (fname, lname, phone_number) VALUES ('ليلى', 'محمد', 666777888);
INSERT INTO customers (fname, lname, phone_number) VALUES ('عبدالرحمن', 'محمود', 222333444);


-- Random data for categories table
INSERT INTO categories (category_name)
VALUES 
    ('الكترونيات'),
    ('ملابس'),
    ('كتب'),
    ('معدات منزلية'),
    ('العاب اطفال'),
    ('اثاث'),
    ('معدات رياضية'),
    ('مجوهرات'),
    ('جمال'),
    ('طعام');

-- Random data for items table
INSERT INTO items (item_name, item_price, category_id, image_path)
VALUES 
    ('لابتوب', 999.99, 1, 'laptop_img.jpg'),
    ('تيشيرت', 19.99, 2, 't-shirt.jpg'),
    ('كتاب', 10.99, 3, 'book.jpg'),
    ('مايكرويف', 149.99, 4,'microwave.jpg'),
    ('لعبة اطفال', 9.99, 5, 'toy.jpg'),
    ('اريكة', 499.99, 6,'sofa.jpg'),
    ('كرة قدم', 29.99, 7, 'football.jpg'),
    ('قلادة', 199.99, 8, 'necklace.jpg'),
    ('احمر شفاه', 14.99, 9, 'lipstick.jpg'),
    ('تفاحة', 0.99, 10, 'apple.jpg');

-- Random data for orders table
INSERT INTO orders (item_id, customer_id, start_date, installment_price, installments_number, installments_left, installments_paid, order_quantity)
VALUES 
    (1, 1, '2023-01-01', 50.00, 12, 10, 2,1),
    (2, 2, '2023-02-05', 30.00, 8, 6, 2,4),
    (3, 3, '2023-03-10', 20.00, 6, 4, 2,1),
    (4, 4, '2023-04-15', 100.00, 24, 20, 4,1),
    (5, 5, '2023-05-20', 40.00, 10, 8, 2,8),
    (6, 6, '2023-06-25', 80.00, 18, 14, 4,1),
    (7, 7, '2023-07-30', 25.00, 12, 9, 3,3),
    (8, 8, '2023-08-01', 60.00, 20, 18, 2,2),
    (9, 9, '2023-09-05', 70.00, 16, 12, 4,1),
    (10, 10, '2023-10-10', 15.00, 6, 4, 2,3);

