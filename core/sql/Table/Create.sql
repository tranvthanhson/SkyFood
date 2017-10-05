-- Create account table
CREATE TABLE ACCOUNT (
    USERNAME VARCHAR(30) NOT NULL PRIMARY KEY,
    PASSWORD VARCHAR(100),
    FIRST_NAME VARCHAR(20),
    LAST_NAME VARCHAR(20),
    FULL_NAME VARCHAR(50),
    IMAGE VARCHAR(100),
    EMAIL VARCHAR(100) NOT NULL,
    PHONE VARCHAR(11),
    ADDRESS TEXT,
    ROLE INT
);

-- Create shop table
CREATE TABLE SHOP (
    SHOP_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    SHOP_NAME VARCHAR(50),
    LAT VARCHAR(100),
    LNG VARCHAR(100),
    DATE_CREATED DATETIME,
    PHONE VARCHAR(11),
    TIME_OPEN DATETIME,
    TIME_CLOSE DATETIME,
    STATUS INT,
    DISCOUNT DOUBLE,
    ADDRESS TEXT,
    DETAIL TEXT,
    VIEW VARCHAR(100)
);

-- Create save table
CREATE TABLE SAVE (
    SAVE_ID INT,
    USERNAME VARCHAR(30),
    SHOP_ID INT
);

-- Create comment table
CREATE TABLE COMMENT (
    COMMENT_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    USERNAME VARCHAR(30),
    SHOP_ID INT,
    CONTENT TEXT,
    DATE_CREATED DATETIME
);

-- Create rate table
CREATE TABLE RATE (
    RATE_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    SHOP_ID INT,
    USERNAME VARCHAR(30),
    SCORE INT
);

-- Create type table
CREATE TABLE TYPE (
    TYPE_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    TYPE_NAME VARCHAR(50)
);

-- Create foods table
CREATE TABLE FOODS (
    FOOD_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    SHOP_ID INT,
    FOOD_NAME VARCHAR(50)
);

-- Create type_shop table
CREATE TABLE TYPE_SHOP (
    TYPE_ID INT,
    SHOP_ID INT
);

-- Create feedback table
CREATE TABLE FEEDBACK (
    FEEDBACK_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CONTENT TEXT,
    USERNAME VARCHAR(30)
);
