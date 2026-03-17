CREATE DATABASE IF NOT EXISTS skiing_db;
USE skiing_db;

-- =========================
-- Resorts Table
-- =========================
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

INSERT INTO resorts (resort_name, country, elevation_m, piste_km, avg_snowfall_cm, description, image_url) VALUES
('Kitzbühel', 'Austria', 2000, 188, 228, 'Famous for the challenging Streif downhill run and historic charm. Part of the large KitzSki area with varied terrain.', 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Ski_landscape_in_Kitzbuhel_Austria_%288138357829%29.jpg'),
('Whistler Blackcomb', 'Canada', 2284, 200, 1100, 'North America’s largest ski resort with massive vertical, glaciers, and the Peak 2 Peak Gondola. Excellent for all levels.', 'https://upload.wikimedia.org/wikipedia/commons/d/dd/090215-IMG_0650-MillionDollarView.jpg'),
('Avoriaz', 'France', 2466, 53, 459, 'Car-free village in the huge Portes du Soleil area. Known for snow reliability and family-friendly runs.', 'https://backoffice.avoriaz.com/wp-content/uploads/2024/09/Webcam-avoriaz-antares.png'),
('Niseko', 'Japan', 1308, 48, 1200, 'World-famous for consistent deep powder. Part of Hokkaido’s heavy snowfall region with light, dry snow.', 'https://d2wk8ab0462hyq.cloudfront.net/winter/_lightbox/20240307_GrandHirafu_NightSkiing_HirafuVillage_Drone_DJI_0975_Lores_3.jpg'),
('Zermatt', 'Switzerland', 3899, 360, 396, 'Iconic Matterhorn views, year-round skiing on glaciers, and extensive high-altitude terrain.', 'https://www.sopranovillas.com/wp-content/uploads/2019/12/zermatt-Ski-resort-1.jpg'),
('St. Anton am Arlberg', 'Austria', 2811, 305, 363, 'Legendary off-piste and freeride paradise in the Arlberg region with consistent snowfall.', 'https://www.born2ski.co.uk/wp-content/uploads/2024/01/st-anton-austria.jpg'),
('Rusutsu', 'Japan', 994, 42, 800, 'Hokkaido gem with tree runs, powder, and family appeal. Excellent snow quality in a quieter setting.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6MVQ0pdSL2TgXvcfV4VWztl0vE7K2WN4b7g&s'),
('Val Thorens', 'France', 3230, 150, 600, 'Europe’s highest resort in the 3 Valleys. Reliable late-season snow and modern facilities.', 'https://alpinefleet.com/wp-content/uploads/2023/06/Alpine-Fleet_How-to-get-to-Val-Thorens.jpg'),
('Aspen Snowmass', 'USA', 3812, 200, 760, 'Four mountains with luxury vibe, diverse terrain, and big Colorado powder days.', 'https://swiftmedia.s3.amazonaws.com/mountain.swiftcom.com/images/sites/5/2023/10/10132157/Snowmass_winter_scenic_base_village_jeremy_swanson_DJI_0831.noexp_-1024x767.jpg'),
('Jackson Hole', 'USA', 3185, 126, 1140, 'Steep, challenging terrain with huge vertical drop and legendary deep powder.', 'https://www.datocms-assets.com/50871/1680193117-skier-winter-promo-box-ajimmerson_powder_12-3-2022-1103-jpg.jpg');


-- =========================
-- Resort Details Table
-- =========================
CREATE TABLE resort_details (
  id INT AUTO_INCREMENT PRIMARY KEY,
  resort_id INT NOT NULL,
  difficulty_rating VARCHAR(20),
  ski_season VARCHAR(50),
  nearest_airport VARCHAR(100),
  lift_count INT,
  run_count INT,
  night_skiing BOOLEAN,
  ski_school BOOLEAN,
  terrain_park BOOLEAN,
  FOREIGN KEY (resort_id) REFERENCES resorts(id)
);

INSERT INTO resort_details (resort_id, difficulty_rating, ski_season, nearest_airport, lift_count, run_count, night_skiing, ski_school, terrain_park) VALUES
(1, 'Advanced', 'November - April', 'Innsbruck Airport (90km)', 57, 170, 0, 1, 0),
(2, 'Intermediate', 'November - April', 'Vancouver Airport (125km)', 37, 200, 1, 1, 1),
(3, 'Intermediate', 'December - April', 'Geneva Airport (75km)', 75, 206, 0, 1, 1),
(4, 'Beginner Friendly', 'December - March', 'New Chitose Airport (170km)', 30, 30, 0, 1, 0),
(5, 'Advanced', 'November - April', 'Geneva Airport (250km)', 58, 360, 0, 1, 1),
(6, 'Advanced', 'December - April', 'Innsbruck Airport (100km)', 88, 340, 0, 1, 1),
(7, 'Beginner Friendly', 'December - March', 'New Chitose Airport (170km)', 18, 38, 0, 1, 0),
(8, 'Intermediate', 'December - April', 'Geneva Airport (180km)', 36, 150, 0, 1, 1),
(9, 'Intermediate', 'November - April', 'Denver Airport (200km)', 41, 337, 0, 1, 1),
(10, 'Expert', 'December - April', 'Jackson Hole Airport (13km)', 13, 131, 0, 1, 1);