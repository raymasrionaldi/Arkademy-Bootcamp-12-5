SELECT name.name, work.name as work, salary.salary 
FROM name INNER JOIN work INNER JOIN salary ON name.id_work = work.id AND name.id_salary = salary.id;