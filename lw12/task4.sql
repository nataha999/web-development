SELECT
    student.surname AS Фамилия,
    student.name AS Имя,
    student.petronymic AS Отчество,
    faculty.name AS Факультет,
    class.name AS Группа
FROM 
    student
    INNER JOIN class ON student.class_id = class.id
    INNER JOIN faculty ON faculty.id = class.faculty_id
WHERE
    student.id = 13;