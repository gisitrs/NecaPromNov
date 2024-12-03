CREATE 
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
        `marinkom_jos1`.`jos_osrs_properties`.`metadesc` AS `metadesc`
    FROM
        `marinkom_jos1`.`jos_osrs_properties`