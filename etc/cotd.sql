
CREATE TABLE phones (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    manufacturer VARCHAR(50),
    description TEXT,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);  
