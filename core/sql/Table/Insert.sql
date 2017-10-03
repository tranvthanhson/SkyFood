-- Insert value to Account Table
INSERT INTO ACCOUNT (USERNAME, PASSWORD, FIRST_NAME, LAST_NAME, FULL_NAME, ROLE) VALUES
	("Admin", "Admin", "Admin", "Admin", "Admin", 0),
	("tranvthanhson", "1", "Son", "Tran", "Tran Vu Thanh Son", 1),
	("ovquang", "2", "Quang", "Ong", "Ong Van Quang", 1),
	("tqdat", "3", "Dat", "Tran", "Tran Quoc Dat", 1);

-- Insert value to Shop Table
INSERT INTO SHOP (SHOP_NAME, LAT, LNG, DATE_CREATED, PHONE, IMAGE, TIME_OPEN, TIME_CLOSE, STATUS, DISCOUNT, VIEW) VALUES
	("THE COFFEE HOUSE", "16.0639116", "108.2127751", "2015-05-17", "01269736096", "");