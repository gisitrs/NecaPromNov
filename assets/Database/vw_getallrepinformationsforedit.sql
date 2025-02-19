CREATE OR REPLACE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `marinkom_jos1`.`vw_getallrepinformationsforedit` AS
    SELECT 
        `marinkom_jos1`.`jos_osrs_properties`.`id` AS `id`,
        `marinkom_jos1`.`jos_osrs_properties`.`ref` AS `ref`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_name` AS `pro_name`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_small_desc` AS `pro_small_desc`,
        `marinkom_jos1`.`jos_osrs_properties`.`price` AS `price`,
        `marinkom_jos1`.`jos_osrs_properties`.`address` AS `address`,
        `marinkom_jos1`.`jos_osrs_properties`.`metadesc` AS `metadesc`,
        `marinkom_jos1`.`jos_osrs_types`.`type_name` AS `type_name`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_type` AS `pro_type`,
        `marinkom_jos1`.`jos_osrs_properties`.`square_feet` AS `square_feet`,
        `marinkom_jos1`.`jos_osrs_properties`.`land_area` AS `land_area`,
        `marinkom_jos1`.`jos_osrs_properties`.`isFeatured` AS `isFeatured`
    FROM
        (`marinkom_jos1`.`jos_osrs_properties`
        LEFT JOIN `marinkom_jos1`.`jos_osrs_types` ON ((`marinkom_jos1`.`jos_osrs_types`.`id` = `marinkom_jos1`.`jos_osrs_properties`.`pro_type`)))
    WHERE
        (`marinkom_jos1`.`jos_osrs_properties`.`isSold` = 0)