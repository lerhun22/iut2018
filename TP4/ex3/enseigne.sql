INSERT INTO enseigne VALUES (1,2);
INSERT INTO enseigne VALUES (1,3);
INSERT INTO enseigne VALUES (1,6);
INSERT INTO enseigne VALUES (2,1);
INSERT INTO enseigne VALUES (2,3);
INSERT INTO enseigne VALUES (2,5);
INSERT INTO enseigne VALUES (3,1);
INSERT INTO enseigne VALUES (3,2);
INSERT INTO enseigne VALUES (4,1);
INSERT INTO enseigne VALUES (5,2);
INSERT INTO enseigne VALUES (5,3);
INSERT INTO enseigne VALUES (5,4);
INSERT INTO enseigne VALUES (6,6);
INSERT INTO enseigne VALUES (7,6);
INSERT INTO enseigne VALUES (8,5);
INSERT INTO enseigne VALUES (8,6);
INSERT INTO enseigne VALUES (8,4);
INSERT INTO enseigne VALUES (9,1);
INSERT INTO enseigne VALUES (9,2);
INSERT INTO enseigne VALUES (9,3);
INSERT INTO enseigne VALUES (9,6);

SELECT P.num, P.nom, P.prenom 
FROM profs as P INNER JOIN enseigne AS E ON P.num = E.idprof 
WHERE E.idmat IN (SELECT idmat FROM enseigne WHERE idprof = 1) AND P.num != 1;
