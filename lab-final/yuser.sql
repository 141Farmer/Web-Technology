SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Create table
CREATE TABLE user (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    message VARCHAR(100) NOT NULL,
    PRIMARY KEY (id) -- Define the primary key inside the table creation
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insert data
INSERT INTO user (name, email, subject, message) VALUES
('kamrul', '141@g', 'db', 'none'),
('k', '1@g', 'd', 'o');

-- Ensure auto-increment starts at 3 (if needed)
ALTER TABLE user AUTO_INCREMENT = 3;

COMMIT;
