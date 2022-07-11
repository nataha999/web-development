CREATE DATABASE university character set utf8 collate utf8_general_ci;

USE university;

CREATE TABLE faculty
(
  id INT AUTO_INCREMENT NOT NULL,
  name VARCHAR(255) NOT NULL,
  PRIMARY KEY(id)
)
;

CREATE TABLE class
(
  id INT AUTO_INCREMENT NOT NULL,
  name VARCHAR(255) NOT NULL,
  faculty_id INT NOT NULL,
  FOREIGN KEY (faculty_id) REFERENCES faculty(id),
  PRIMARY KEY(id)
)
;

CREATE TABLE student
(
  id INT AUTO_INCREMENT NOT NULL,
  surname VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  petronymic VARCHAR(255) NOT NULL,
  age INT NOT NULL,
  class_id INT NOT NULL,
  FOREIGN KEY (class_id) REFERENCES class(id),
  PRIMARY KEY (id)
)
;

INSERT INTO faculty (name)
VALUES
    ('ФИиВТ'),
    ('ЭФ'),
    ('ИММ')
;

INSERT INTO class (name, faculty_id)
VALUES
    ('ПС-11', 1),
    ('ПС-12', 1),
    ('ПС-13', 1),
    ('ПИ-11', 2),
    ('ПИ-12', 2),
    ('ПИ-13', 2),
    ('МТМ-11', 3),
    ('МТМ-12', 3),
    ('МТМ-13', 3)
;

INSERT INTO student (surname, name, petronymic, age, class_id)
VALUES
    ('Горник', 'Мария', 'Юрьевна', 19, 1),
    ('Журавлева', 'Татьяна', 'Александровна', 19, 1),
    ('Пащенко', 'Дарья', 'Дмитриевна', 20, 1),
    ('Александрова', 'Анна', 'Александровна', 19, 1),
    ('Васильева', 'Ольга', 'Викторовна', 21, 1),
    ('Клочко', 'Александр', 'Юрьевич', 21, 2),
    ('Иванов', 'Александр', 'Григорьевич', 18, 2),
    ('Петров', 'Денис', 'Романович', 20, 2),
    ('Пьянзина', 'Мария', 'Алексеевна', 18, 2),
    ('Романова', 'Анна', 'Андреевна', 19, 2),
    ('Вязов', 'Родион', 'Валерьевич', 21, 3),
    ('Пирогова', 'Светлана', 'Павловна', 18, 3),
    ('Спиридонова', 'Наталья', 'Николаевна', 18, 3),
    ('Зыкова', 'Дарья', 'Алексеевна', 18, 3),
    ('Кропотова', 'Юлия', 'Александровна', 19, 3),
    ('Александров', 'Максим', 'Сергеевич', 19, 4),
    ('Таныгина', 'Виктория', 'Дмитриевна', 19, 4),
    ('Пирогова', 'Людмила', 'Павловна', 20, 4),
    ('Романова', 'Антонина', 'Викторовна', 19, 4),
    ('Шестова', 'Ирина', 'Николаевна', 21, 4),
    ('Смирнов', 'Павел', 'Аркадьевич', 21, 5),
    ('Яковлев', 'Кирилл', 'Сергеевич', 18, 5),
    ('Волков', 'Данил', 'Иванович', 20, 5),
    ('Иванов', 'Даниил', 'Александрович', 18, 5),
    ('Каплунова', 'Анастасия', 'Владимировна', 19, 5),
    ('Дудин', 'Николай', 'Александрович', 21, 6),
    ('Ямбулатов', 'Роман', 'Олегович', 18, 6),
    ('Федоров', 'Владимир', 'Алексеевич', 20, 6),
    ('Розин', 'Максим', 'Владиславович', 18, 6),
    ('Кондратьев ', 'Максим', 'Витальевич', 19, 6),
    ('Костромин', 'Виктор', 'Николаевич', 19, 7),
    ('Курочкин', 'Даниил', 'Юрьевич', 19, 7),
    ('Куклин', 'Вадим', 'Денисович', 20, 7),
    ('Демьянов', 'Даниил', 'Артурович', 19, 7),
    ('Милютин', 'Данил', 'Александрович', 21, 7),
    ('Крюков', 'Владимир', 'Дмитриевич', 21, 8),
    ('Иванова', 'Мария', 'Владимировна', 18, 8),
    ('Сидыганова', 'Юлия', 'Алексеевна', 20, 8),
    ('Петухов', 'Никита', 'Олегович', 18, 8),
    ('Таныгин', 'Вадим', 'Викторович', 19, 8),
    ('Вязова', 'Светлана', 'Павловна', 21, 9),
    ('Тамбасова', 'Юлия', 'Михайловна', 18, 9),
    ('Архипова', 'Марина', 'Юрьевна', 20, 9),
    ('Федосеев', 'Максим', 'Алексеевич', 18, 9),
    ('Комиссарова', 'Арина', 'Александровна', 19, 9)
;