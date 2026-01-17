CREATE DATABASE IF NOT EXISTS fana_news;
USE fana_news;

CREATE TABLE IF NOT EXISTS news (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    publish_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO news (title, category, image_path, description, publish_date) VALUES 
('Extreme Skydiving: Pushing the Limits of Human Flight', 'Adventure', 'assets/news-1.jpg', 'Professional skydivers break new records with breathtaking aerial stunts, showcasing the ultimate freedom and adrenaline rush of freefall.', NOW() - INTERVAL 2 HOUR),
('Corporate Innovation: Teams Driving Digital Transformation', 'Business', 'assets/news-2.jpg', 'Leading companies embrace collaborative strategies and cutting-edge technology to revolutionize workplace productivity and business growth.', NOW() - INTERVAL 4 HOUR),
('Traditional Farming Methods See Modern Revival', 'Agriculture', 'assets/news-3.jpg', 'Farmers return to sustainable agricultural practices using traditional techniques, proving that ancient wisdom still holds value in modern food production.', NOW() - INTERVAL 5 HOUR);
