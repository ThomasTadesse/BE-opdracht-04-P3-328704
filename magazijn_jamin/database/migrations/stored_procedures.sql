DELIMITER //

CREATE OR REPLACE PROCEDURE GetAllergenen()
BEGIN
    SELECT 
        a.id AS id,  -- Ensure we return the ID column
        p.Naam AS ProductNaam,
        a.Naam AS AllergeenNaam,
        a.Omschrijving,
        pa.AantalAanwezig
    FROM allergeen a
    JOIN product_allergeen pa ON a.id = pa.allergeen_id
    JOIN product p ON pa.product_id = p.id;
END //

DELIMITER ;
