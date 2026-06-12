CREATE DATABASE IF NOT EXISTS ketahanan_pangan;
USE ketahanan_pangan;

-- ======================
-- TABEL USERS
-- ======================

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ======================
-- ADMIN DEFAULT
-- username : admin
-- password : 12345
-- ======================

INSERT INTO users
(nama,username,password,role)
VALUES
(
'Administrator',
'admin',
MD5('12345'),
'admin'
);

-- ======================
-- TABEL DATA IKP
-- ======================

CREATE TABLE data_ikp (

    id INT AUTO_INCREMENT PRIMARY KEY,

    provinsi VARCHAR(100),

    ikp_2024 DECIMAL(5,2),

    ikp_2025 DECIMAL(5,2),

    ikp_2026 DECIMAL(5,2)

);

-- ======================
-- DATA DUMMY IKP
-- ======================

INSERT INTO data_ikp
(provinsi,ikp_2024,ikp_2025,ikp_2026)
VALUES

('Aceh',79.50,80.10,81.00),
('Sumatera Utara',81.20,82.30,83.00),
('Sumatera Barat',84.00,84.80,85.50),
('Riau',78.20,79.50,80.30),
('Jambi',80.10,81.00,82.00),
('Sumatera Selatan',79.80,80.50,81.40),
('Bengkulu',81.50,82.40,83.20),
('Lampung',83.00,84.10,85.00),
('Kep. Bangka Belitung',82.30,83.20,84.10),
('Kep. Riau',84.50,85.00,86.00),

('DKI Jakarta',90.20,91.00,92.00),
('Jawa Barat',84.10,85.00,86.00),
('Jawa Tengah',85.40,86.20,87.10),
('DI Yogyakarta',88.20,89.00,90.00),
('Jawa Timur',86.50,87.40,88.20),
('Banten',83.20,84.00,85.00),

('Bali',89.00,90.00,91.00),

('Nusa Tenggara Barat',81.20,82.00,83.00),
('Nusa Tenggara Timur',75.40,76.10,77.00),

('Kalimantan Barat',82.10,83.00,84.00),
('Kalimantan Tengah',83.00,84.10,85.00),
('Kalimantan Selatan',84.20,85.10,86.00),
('Kalimantan Timur',86.00,87.00,88.00),
('Kalimantan Utara',82.50,83.30,84.20),

('Sulawesi Utara',84.00,85.00,86.00),
('Sulawesi Tengah',80.20,81.00,82.00),
('Sulawesi Selatan',85.10,86.00,87.00),
('Sulawesi Tenggara',82.30,83.20,84.00),
('Gorontalo',81.10,82.00,83.00),
('Sulawesi Barat',79.50,80.20,81.00),

('Maluku',78.40,79.10,80.00),
('Maluku Utara',80.10,81.00,82.00),

('Papua',72.00,73.00,74.00),
('Papua Barat',75.20,76.00,77.00),
('Papua Selatan',73.10,74.00,75.00),
('Papua Tengah',72.40,73.20,74.10),
('Papua Pegunungan',70.50,71.50,72.40),
('Papua Barat Daya',74.20,75.00,76.00);

-- ======================
-- TABEL KOMENTAR FORUM
-- ======================

CREATE TABLE komentar_forum (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    komentar TEXT NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE

);