-- 1- Il nome di tutte le sale di Pisa


SELECT DISTINCT Nome
    FROM Sale
    WHERE Citta = "Pisa";


-- 2- Il titolo dei film di F. Fellini prodotti dopo il 1960.


SELECT DISTINCT Titolo
    FROM film
    WHERE Regista = "Fellini" and AnnoProduzione > 1960;




-- 3- Il titolo e la durata dei film di fantascienza giapponesi o francesi prodotti dopo il 1990


SELECT Titolo
    FROM film
    WHERE Nazionalita = "JAP" and Nazionalita = "FRA" and AnnoProduzione > 1990;


-- 4- Il titolo dei film di fantascienza giapponesi prodotti dopo il 1990 oppure francesi


SELECT film.titolo
    FROM film
    WHERE Genere = "fantascienza" and Nazionalita = "JAP" and AnnoProduzione > 1990 and Nazionalita = "FRA";


-- 5- I titolo dei film dello stesso regista di “Casablanca”


SELECT film.Titolo
    FROM film
    WHERE Regista = "Curtiz";


-- 6- Il titolo ed il genere dei film proiettati il giorno di Natale 2004


SELECT film.Titolo, film.Genere
    FROM proiezioni, film
    WHERE proiezioni.CodFilm = film.Codfilm and Proiezioni.DataProiezione = "2004-12-25";  


-- 7- Il titolo ed il genere dei film proiettati a Napoli il giorno di Natale 2004


SELECT DISTINCT film.Titolo, film.Genere
    FROM proiezioni, film, sale


-- 13- Il numero di sale di Pisa con più di 60 posti


SELECT COUNT(*) AS "Numero di sale"
    FROM sale
    WHERE Citta = "Pisa" AND posti > 60;




-- 14- Il numero totale di posti nelle sale di Pisa


SELECT SUM(posti) as "Numero posti di Pisa"
    FROM sale
    WHERE Citta = "Pisa";


-- 14b- Il numero di attori non italiani


SELECT COUNT(*) AS "Attori non Italiani"
    FROM attori
    WHERE Nazionalita <> "ITA";


-- 14c- Il numero di film in cui ha recitato un attore o attrice italiana


SELECT COUNT(DISTINCT(film.titolo) AS "Film con attori italiani"
    FROM film, recita, attori
    WHERE attori.Nazionalita = "ITA" and recita.CodFilm = film.CodFilm and recita.CodAttore = attori.CodAttore;


-- 14d- la somma degli incassi realizzati il giorno di Natale del 2004


SELECT SUM(incasso) as "Incassi Totali"
    FROM proiezioni
    WHERE DataProiezione = "2004-12-25";


-- 14e- il numero di sale in cui è stato proiettato il film "Il piccolo diavolo"


SELECT COUNT(*) AS "Numero Sale Proiezione Il piccolo Diavolo"
    FROM sale, proiezioni, film
    WHERE proiezioni.CodFilm = film.CodFilm AND proiezioni.CodSala = sale.CodSala AND film.titolo = "Il piccolo diavolo";


-- 17- Per ogni regista, il numero di film diretti dopo il 1990

SELECT regista, COUNT(*) as "Numero Film"
    FROM Film
    WHERE AnnoProduzione > 1990
        GROUP BY Regista;


-- 18- Per ogni regista, l’incasso totale di tutte le proiezioni dei suoi film
SELECT regista, SUM(incasso) as "Incasso"
    FROM Proiezioni, Film
    WHERE proiezioni.CodFilm = film.CodFilm 
        GROUP BY(Regista);

-- 19- Per ogni film di S.Spielberg, il titolo del film, il numero totale di proiezioni a Pisa e l’incasso totale
SELECT titolo, COUNT(CodProiezione) AS "Numero Proiezioni", Citta, SUM(incasso) AS "Incasso"
    FROM Film, Proiezioni, Sale
    WHERE proiezioni.CodFilm = film.CodFilm AND proiezioni.CodSala = sale.CodSala AND film.regista = "Fellini";