SELECT
    student.surname AS Фамилия,
    student.name AS Имя,
    student.petronymic AS Отчество,
    student.age AS Возраст,
    class.name AS Группа
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
WHERE
	student.age = 19;