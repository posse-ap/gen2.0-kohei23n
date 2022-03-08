DROP DATABASE IF EXISTS webapp;
CREATE DATABASE webapp;
USE webapp;

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
