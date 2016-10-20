use simpleq;
select database();
create table faculty(
	faculty_Name  VARCHAR(30) NOT NULL,
	faculty_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);
show tables;
describe faculty;
create table quizzes(
	quiz_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	faculty_ID INT UNSIGNED NOT NULL);