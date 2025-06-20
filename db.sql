-- Create database
CREATE DATABASE IF NOT EXISTS student_db;
USE student_db;

-- Create table
CREATE TABLE students (
    id VARCHAR(10) PRIMARY KEY,
    name VARCHAR(100),
    m4 INT,
    ss INT,
    cs INT,
    trlf INT,
    adc INT,
    mp INT
);

-- Sample data
INSERT INTO students (id, name, m4, ss, cs, trlf, adc, mp) VALUES
('S001', 'Priya', 85, 90, 88, 87, 89, 90),
('S002', 'Karthik', 78, 80, 75, 70, 72, 74),
('S003', 'Divya', 92, 95, 91, 93, 94, 96);
