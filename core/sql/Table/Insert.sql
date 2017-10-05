-- Insert value to Account Table
INSERT INTO ACCOUNT (USERNAME, PASSWORD, FIRST_NAME, LAST_NAME, FULL_NAME, EMAIL, ROLE) VALUES
    ('Admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin', 'Admin', 'Admin@admin' ,1),
    ('thuong', '619170c4d559a0786a141d489d019e22', 'thuong', 'thuong', 'thuong thuong', 'thuong@thuong', 2),
    ('hieu', '619170c4d559a0786a141d489d019e22', 'thuong', 'thuong', 'thuong thuong', 'thuong@thuong', 3),
    ('ngan', '4df26b7d69a26516915261039bbb1cb6', 'thuong', 'thuong', 'thuong thuong', 'thuong@thuong', 3);

-- Insert value to Shop Table
INSERT INTO SHOP (SHOP_NAME, LAT, LNG, DATE_CREATED, PHONE, IMAGE, TIME_OPEN, TIME_CLOSE, STATUS, DISCOUNT, VIEW) VALUES
    ("THE COFFEE HOUSE", "16.0639116", "108.2127751", "2015-05-17", "01269736096", "");

CREATE TABLE FEEDBACK (
    FEEDBACK_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    USERNAME VARCHAR(30),
    CONTENT TEXT
);

-- Insert value to Feedback Table
INSERT INTO FEEDBACK (USERNAME, CONTENT) VALUES
    ('Admin', 'Giao diện như cc'),
    ('thuong', 'Giao diện như cc1'),
    ('hieu', 'Giao diện như cc2'),
    ('ngan', 'Giao diện như cc3');
