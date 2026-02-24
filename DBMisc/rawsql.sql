-- Create Database
CREATE DATABASE IF NOT EXISTS skiing_db;
USE skiing_db;

-- Create Resorts Table
CREATE TABLE resorts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    resort_name VARCHAR(100) NOT NULL,
    country VARCHAR(50) NOT NULL,
    elevation_m INT NOT NULL,
    piste_km INT NOT NULL,
    avg_snowfall_cm INT NOT NULL,
    description VARCHAR(150) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

-- Insert Resort Data
INSERT INTO resorts 
(resort_name, country, elevation_m, piste_km, avg_snowfall_cm, description, image_url)
VALUES
('Kitzbühel', 'Austria', 2000, 188, 228, 
'Famous for the challenging Streif downhill run and historic charm. Part of the large KitzSki area with varied terrain.', 
'https://upload.wikimedia.org/wikipedia/commons/f/fb/Ski_landscape_in_Kitzbuhel_Austria_%288138357829%29.jpg'),

('Whistler Blackcomb', 'Canada', 2284, 200, 1100, 
'North America’s largest ski resort with massive vertical, glaciers, and the Peak 2 Peak Gondola. Excellent for all levels.', 
'https://upload.wikimedia.org/wikipedia/commons/d/dd/090215-IMG_0650-MillionDollarView.jpg'),

('Avoriaz', 'France', 2466, 53, 459, 
'Car-free village in the huge Portes du Soleil area. Known for snow reliability and family-friendly runs.', 
'https://backoffice.avoriaz.com/wp-content/uploads/2024/09/Webcam-avoriaz-antares.png'),

('Niseko', 'Japan', 1308, 48, 1200, 
'World-famous for consistent deep powder. Part of Hokkaido’s heavy snowfall region with light, dry snow.', 
'https://d2wk8ab0462hyq.cloudfront.net/winter/_lightbox/20240307_GrandHirafu_NightSkiing_HirafuVillage_Drone_DJI_0975_Lores_3.jpg'),

('Zermatt', 'Switzerland', 3899, 360, 396, 
'Iconic Matterhorn views, year-round skiing on glaciers, and extensive high-altitude terrain.', 
'https://www.sopranovillas.com/wp-content/uploads/2019/12/zermatt-Ski-resort-1.jpg'),

('St. Anton am Arlberg', 'Austria', 2811, 305, 363, 
'Legendary off-piste and freeride paradise in the Arlberg region with consistent snowfall.', 
'https://www.born2ski.co.uk/wp-content/uploads/2024/01/st-anton-austria.jpg'),

('Rusutsu', 'Japan', 994, 42, 800, 
'Hokkaido gem with tree runs, powder, and family appeal. Excellent snow quality in a quieter setting.', 
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6MVQ0pdSL2TgXvcfV4VWztl0vE7K2WN4b7g&s'),

('Val Thorens', 'France', 3230, 150, 600, 
'Europe’s highest resort in the 3 Valleys. Reliable late-season snow and modern facilities.', 
'https://alpinefleet.com/wp-content/uploads/2023/06/Alpine-Fleet_How-to-get-to-Val-Thorens.jpg'),

('Aspen Snowmass', 'USA', 3812, 200, 760, 
'Four mountains with luxury vibe, diverse terrain, and big Colorado powder days.', 
'https://aspenchamber.org/sites/default/files/styles/max_325x325/public/2020-08/Snowmass_FullMoon_JS2016_NoExp.jpg.webp?itok=9QamsGfx'),

('Jackson Hole', 'USA', 3185, 126, 1140, 
'Steep, challenging terrain with huge vertical drop and legendary deep powder.', 
'https://www.datocms-assets.com/50871/1680193117-skier-winter-promo-box-ajimmerson_powder_12-3-2022-1103-jpg.jpg');
