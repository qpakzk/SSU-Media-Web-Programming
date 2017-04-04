/* Include this in the information page */
CREATE DATABASE schooldb;
SHOW DATABASES;
USE schooldb;

CREATE TABLE 2015_Spring_Semester
(
subject CHAR(50), 
style CHAR(50),
professor CHAR(50),
credit INT 

);
DESCRIBE 2015_Spring_Semester;

INSERT INTO 2015_Spring_Semester VALUES ('Web Programming and Practice','major','Jean David', '3');
INSERT INTO 2015_Spring_Semester VALUES ('Advanced Programming and Practice','major','Kim JongGeun','3');
INSERT INTO 2015_Spring_Semester VALUES ('Principles and Practice of Digital Media','major','Lee KangHui','3');
INSERT INTO 2015_Spring_Semester VALUES ('Design Theory','major','Park JaeWan','3');
INSERT INTO 2015_Spring_Semester VALUES ('Spreadsheet Advanced Usage','liberal arts','Kang UiSun','1');
INSERT INTO 2015_Spring_Semester VALUES ('Creative Thinking and Reading Argument','liberal arts','Lee GeumLan','1');
INSERT INTO 2015_Spring_Semester VALUES ('Creative Thinking and Writing','liberal arts','Kim SunYoung','2');
INSERT INTO 2015_Spring_Semester VALUES ('Servant Leadership','liberal arts','Kim DoYeol','1');
INSERT INTO 2015_Spring_Semester VALUES ('English2 2','liberal arts','Stewart John Cooper','2');
INSERT INTO 2015_Spring_Semester (subject,professor, credit) VALUES ('CHAPEL','Cho EunSik', '0');
DESCRIBE 2015_Spring_Semester;

SELECT * FROM 2015_Spring_Semester;

CREATE TABLE 2014_Spring_Semester
(
subject CHAR(50), 
style CHAR(50),
professor CHAR(50),
credit INT 

);
DESCRIBE 2014_Spring_Semester;

INSERT INTO 2014_Spring_Semester VALUES ('Programming1 and Practice','major','Oh KyeungSoo', '3');
INSERT INTO 2014_Spring_Semester VALUES ('Information and Art Theory','major','Kim JongGeun','3');
INSERT INTO 2014_Spring_Semester VALUES ('Fundamental Molding and Practice','major','Song WonJin','3');
INSERT INTO 2014_Spring_Semester VALUES ('Modern Man and Bible','liberal arts','Lee HyeukBae','3');
INSERT INTO 2014_Spring_Semester VALUES ('Korean Peninsula Peace and Unification','liberal arts','Cho EunHui','1');
INSERT INTO 2014_Spring_Semester VALUES ('English 1','liberal arts','Margaret McElhenny','2');
INSERT INTO 2014_Spring_Semester VALUES ('Elementary Chinese Speaking','liberal arts','Gu MunGyu','3');
INSERT INTO 2014_Spring_Semester (subject,professor, credit) VALUES ('CHAPEL','Cho EunSik', '0');
DESCRIBE 2014_Spring_Semester;

SELECT * FROM 2014_Spring_Semester;