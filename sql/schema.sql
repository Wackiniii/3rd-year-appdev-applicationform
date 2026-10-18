CREATE TABLE software_developer_application_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contact_number VARCHAR(11) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    specialization VARCHAR(100) NOT NULL,
    github_link VARCHAR(255) NOT NULL,
    date_applied TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
