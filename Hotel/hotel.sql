CREATE DATABASE hotel;

USE hotel;

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    data_checkin DATE,
    data_checkout DATE,
    room_type VARCHAR(50)
);
