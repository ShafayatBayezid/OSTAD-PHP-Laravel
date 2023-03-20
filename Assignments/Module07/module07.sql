-- Assignments on module 07 
-- Assignment Name: SQL Commands Assignment 

-- Answers of Employees Table 

-- Question a. Write a query to select all columns and rows from the employees table.

SELECT * FROM employees;

-- Explanations: This query selects all columns and rows from the employees table. The asterisk (*) represents all columns.
------------------------
------------------------

-- Question b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.

SELECT employees.name, employees.salary FROM employees WHERE employees.salary > 50000;

-- Explanations: This query will retrieve the name and salary columns of all employees with a salary greater than 50000.
------------------------
------------------------

-- Question c. Write a query to calculate the average salary of all employees.

SELECT AVG(employees.salary) FROM employees;

-- Explanations: This query will calculate the average salary of all employees.
------------------------
------------------------

-- Question d. Write a query to count the number of employees who work in the "Marketing" department.

SELECT COUNT(*) FROM employees JOIN departments ON employees.department_id = departments.id and departments.dept_name = "Marketing";

-- Explanations: This query will count the number of employees who work in the "Marketing" department by finding the department id of the Marketing department and using it to filter the employees table.
------------------------
------------------------

-- Question e. Write a query to update the salary column of the employee with an id of 1001 to 60000.

UPDATE employees SET employees.salary = 60000 WHERE employees.id = 1001;

-- Explanations: This query will update the salary of the employee whose id is 1001, salary old to 60000.
------------------------
------------------------

-- Question: f. Write a query to delete all employees whose salary is less than 30000.

DELETE FROM employees WHERE employees.salary < 30000;

-- Explanations: This query will delete all employees whose salary is less than 30000.


--- ========== --- ========== ---

-- Answers of Departments Table 

-- Question a. Write a query to select all columns and rows from the departments table.
SELECT * FROM departments;

-- Explanations: This query selects all columns and rows from the employees table. The asterisk (*) represents all columns.
--------------------
--------------------

-- Question b. Write a query to select only the name and manager columns of the "Finance" department.

SELECT departments.name, departments.manager FROM departments WHERE departments.name = 'Finance';

-- Explanations: This query will retrieve the name and manager columns of the "Finance" department.
--------------------
--------------------

-- Question c. Write a query to calculate the total number of employees in each department.

SELECT departments.name, COUNT(*) FROM employees JOIN departments ON employees.department_id = departments.id GROUP BY departments.name;

-- Explanations: This query will join the employees and departments tables based on the department_id column and group the result by department name, and then count the number of employees in each department.
-------------------
-------------------

-- Question d. Write a query to insert a new department called "Research" with a manager named "John Doe".

INSERT INTO departments (departments.name, departments.manager) VALUES ('Research', 'John Doe');

-- Explanations: This query will insert a new department called "Research" with a manager named "John Doe" into the departments table.



