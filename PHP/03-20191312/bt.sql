CREATE DATABASE aptech_php_22_3;
CREATE TABLE aptech_php_22_3.userss (
	id INT,
    last_name VARCHAR(255),
    first_name VARCHAR(255),
    email VARCHAR(255) unique,
    create_at datetime,
    uState datetime,
    uCreatedate datetime
    );    
INSERT INTO aptech_php_22_3.userss (id, last_name, first_name, email, create_at, uState,  uCreatedate)
value (1, 'Binh', 'Vo', 'binhvo@gmail.com', 1, 1, Now()), (2, 'An', 'Vo', 'anvo@gmail.com', 1, 1, Now()), (3, 'Hiep', 'Nguyen', 'hiepnguyen@gmail.com', 1, 4, Now()), (4, 'Nam', 'Nguyen', 'namnguyen@gmail.com', 1, 2, Now()), (5, 'Thinh', 'Nguyen', 'thinhnguyen@gmail.com', 1, 5, Now());      
ALTER TABLE aptech_php_22_3.users
ADD dob date;
SELECT*FROM aptech_php_22_3.userss;
SELECT DISTINCT id
FROM aptech_php_22_3.userss;
SELECT*FROM aptech_php_22_3.userss
LIMIT 3;
SELECT*FROM aptech_php_22_3.userss
WHERE id = 1 and ustate = 1;
SELECT*FROM aptech_php_22_3.userss
WHERE id = 1;
UPDATE aptech_php_22_3.userss
SET ustate = -1
WHERE id = 4;
DELETE FROM aptech_php_22_3.userss
WHERE id = 5;
ALTER TABLE aptech_php_22_3.userss
ADD PRIMARY KEY (id);
ALTER TABLE aptech_php_22_3.userss
MODIFY COLUMN id int NOT NULL AUTO_INCREMENT;
INSERT INTO aptech_php_22_3.userss ( last_name, first_name, email, create_at, uState, uCreatedate)
VALUES ('Hai', 'Le', 'haile@gmail.com', 2, 1, NOW()); 
CREATE TABLE aptech_php_22_3.Role(
rId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
rTitle varchar(255) NOT NULL UNIQUE,
rState int DEFAULT 1 );
INSERT INTO aptech_php_22_3.Role (rTitle)
VALUES ('Administrator'),('Copywritrer');	
ALTER TABLE aptech_php_22_3.userss
MODIFY COLUMN email varchar(255) NOT NULL UNIQUE;
ALTER TABLE aptech_php_22_3.userss
MODIFY COLUMN uState int DEFAULT 1,
MODIFY COLUMN create_at int DEFAULT 2;
ALTER TABLE aptech_php_22_3.userss
MODIFY COLUMN uCreatedate datetime DEFAULT NOW();
ALTER TABLE aptech_php_22_3.userss
ADD FOREIGN KEY (create_at) REFERENCES aptech_php_22_3.Role(rId);
INSERT INTO aptech_php_22_3.userss (last_name, first_name, email)
VALUES ('Tri', 'Truong', 'tritruong@gmail.com');
