CREATE DATABASE library_db;

USE library_db;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    quantity INT
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE issued_books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    student_id INT,
    issue_date DATE,
    return_date DATE,
    returned BOOLEAN DEFAULT 0,
    FOREIGN KEY (book_id) REFERENCES books(id),
    FOREIGN KEY (student_id) REFERENCES students(id)
);
