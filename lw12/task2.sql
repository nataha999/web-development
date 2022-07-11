SELECT
    student.surname AS Фамилия,
    student.name AS Имя,
    student.petronymic AS Отчество,
    class.name AS Группа
FROM 
	student
    INNER JOIN class ON student.class_id = class.id
WHERE
	class.id = 3;