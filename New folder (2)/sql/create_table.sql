CREATE DATABASE data_dashboard;

USE data_dashboard;

CREATE TABLE data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    intensity INT,
    likelihood INT,
    relevance INT,
    year INT,
    country VARCHAR(255),
    topics VARCHAR(255),
    region VARCHAR(255),
    city VARCHAR(255),
    sector VARCHAR(255),
    pest VARCHAR(255),
    source VARCHAR(255),
    swot VARCHAR(255)
);
