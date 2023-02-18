-- @block Bookmarked query
-- @group Ungrouped
-- @name create customer table

CREATE TABLE customer(
    cust_id INT NOT NULL AUTO_INCREMENT, 
    cust_fname VARCHAR(14) NOT NULL, 
    cust_lname VARCHAR(14) NOT NULL, 
    cust_email VARCHAR(50) NOT NULL,
    PRIMARY KEY (cust_id)
);