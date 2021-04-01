CREATE DATABASE support_pdo;
CREATE TABLE support_pdo.animal(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(100),
    image VARCHAR(255),
    weight FLOAT
);
INSERT INTO support_pdo.animal (name, image, weight) VALUES
('lion', '🦁', 190.0),
('Raccoon', '🦝', 7.5),
('Tiger', '🐅', 280.0),
('Zebra', '🦓', 400)
;