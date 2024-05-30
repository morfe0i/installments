use installments;

-- change customer information
UPDATE customers
SET fname = 'something' , lname = 'something' , phone_number = 222222222
WHERE customer_id = 1;

-- change item information
UPDATE items
SET item_name = 'Shirt' , item_price = 44.4 , category_id = 2
WHERE item_id = 1;

