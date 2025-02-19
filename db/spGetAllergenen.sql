-- ********************************************************
-- Version:       Date:       Author:           
-- ********       ****        *******         
-- 01             18-02-2025  Thomas Tadesse    1:AM :')
-- ********************************************************

USE `magazijn-jamin`;

-- Step 01:
-- Goal: Create a new Stored Procedure that returns all Allergens
-- ********************************************************
-- Version:       Date:       Author:           Description
-- ********       ****        *******           ***********
-- 01             18-02-2025  Thomas Tadesse    New Stored Procedure   1:02AM :')
-- ********************************************************

DELIMITER $$

    DROP PROCEDURE IF EXISTS GetAllergenen;
    CREATE PROCEDURE GetAllergenen()
        BEGIN
            SELECT 
                ALRG.id               AS AllergeenId
                ,PRCT.Naam            AS ProductNaam
                ,ALRG.Naam            AS AllergeenNaam
                ,ALRG.Omschrijving    AS AllergeenOmschrijving
                ,MGZN.AantalAanwezig  AS AantalInMagazijn
            FROM 
                Allergeen ALRG
            JOIN 
                ProductPerAllergeen PRAL ON ALRG.Id = PRAL.AllergeenId
            JOIN 
                Product PRCT ON PRAL.ProductId = PRCT.Id
            LEFT JOIN 
                Magazijn MGZN ON PRCT.Id = MGZN.ProductId
            WHERE 
                ALRG.IsActief = 1 
                AND PRCT.IsActief = 1
            ORDER BY 
                ProductNaam ASC;
        END$$

DELIMITER ;
