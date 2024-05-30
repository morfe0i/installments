use installments;

-- return the customers with their orders and item name
SELECT customers.fname , orders.order_id , items.item_name 
FROM customers 
LEFT JOIN orders ON customers.customer_id = orders.customer_id 
LEFT JOIN items ON items.item_id = orders.item_id;