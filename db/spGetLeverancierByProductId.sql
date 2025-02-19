-- ********************************************************
-- Version:       Date:       Author:           
-- ********       ****        *******         
-- 01             18-02-2025  Thomas Tadesse 1:18PM 
-- ********************************************************

USE `magazijn-jamin`;

-- Step 01:
-- Goal: Create a new Stored Procedure that returns all Allergens
-- ********************************************************
-- Version:       Date:       Author:           Description
-- ********       ****        *******           ***********
-- 01             18-02-2025  Thomas Tadesse    New Stored Procedure   1:18PM
-- ********************************************************

DELIMITER $$

DROP PROCEDURE IF EXISTS spGetLeverancierByProductId;

CREATE PROCEDURE spGetLeverancierByProductId(
    IN pProductId INT
)
BEGIN

    SELECT 
         LVR.id                AS LeverancierId
        ,LVR.Naam              AS LeverancierNaam
        ,LVR.Contactpersoon    AS Contactpersoon
        ,LVR.Mobiel            AS Mobiel
        ,CNT.Stad              AS Stad
        ,CNT.Straat            AS Straat
        ,CNT.Huisnummer        AS Huisnummer
    FROM 
        Leverancier LVR
    JOIN 
        Contact CNT ON LVR.ContactId = CNT.Id
    JOIN 
        ProductPerLeverancier PPL ON LVR.Id = PPL.LeverancierId
    WHERE 
        PPL.ProductId = pProductId
    AND PPL.IsActief = 1;
END$$

DELIMITER ;
