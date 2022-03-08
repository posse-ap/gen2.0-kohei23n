DROP DATABASE IF EXISTS webapp;
CREATE DATABASE webapp;
USE webapp;

-- 学習記録テーブル

DROP TABLE IF EXISTS records;
CREATE TABLE records (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  date DATETIME NOT NULL,
  time INT NOT NULL,
  language_id INT NOT NULL,
  content_id INT NOT NULL
);

INSERT INTO records(date, time, language_id, content_id)
VALUES
  ('2022-3-1', 2, 1, 1),
  ('2022-3-2', 3, 2, 1),
  ('2022-3-3', 4, 3, 1),
  ('2022-3-4', 2, 4, 1),
  ('2022-3-5', 3, 1, 2),
  ('2022-3-6', 4, 2, 2),
  ('2022-3-7', 2, 3, 2),
  ('2022-3-8', 3, 4, 2);


-- 学習言語のテーブル

DROP TABLE IF EXISTS languages;
CREATE TABLE languages (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  language VARCHAR(255) NOT NULL,
  colour VARCHAR(255) NOT NULL
);

INSERT INTO languages(language, colour)
VALUES
  ('HTML', '#0445ec'),
  ('CSS', '#0f70bd'),
  ('SQL', '#20bdde'),
  ('SHELL', '#3ccefe'),
  ('Javascript', '#b29ef3'),
  ('PHP', '#4a17ef'),
  ('Laravel', '#3005c0'),
  ('その他', '#6c46eb');

-- 学習コンテンツのテーブル

DROP TABLE IF EXISTS contents;
CREATE TABLE contents (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  content VARCHAR(255) NOT NULL,
  colour VARCHAR(255) NOT NULL
);

INSERT INTO contents(content, colour)
VALUES
  ('N予備校', '#0445ec'),
  ('課題', '#0f70bd'),
  ('ドットインストール', '#20bdde');
