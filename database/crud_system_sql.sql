SELECT DISTINCT birthdays.id, person, dag, tblmaand.maand as maand, jaar, maandoms FROM birthdays RIGHT JOIN tblmaand ON birthdays.maand=tblmaand.maand WHERE birthdays.id = 99 Order by maand, dag, person ASC;


Update  birthdays set person="Raimo" where id = 99 ;


INSERT INTO birthdays (id,person, dag, maand, jaar) VALUES (999,"Alfred",9,9,1999) ;


SELECT DISTINCT birthdays.id, person, dag, tblmaand.maand as maand, jaar, maandoms FROM birthdays RIGHT JOIN tblmaand ON birthdays.maand=tblmaand.maand WHERE birthdays.id = 999 Order by maand, dag, person ASC;

DELETE FROM birthdays WHERE id=999