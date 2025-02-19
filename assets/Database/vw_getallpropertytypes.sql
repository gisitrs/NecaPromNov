CREATE OR REPLACE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `marinkom_jos1`.`vw_getallpropertytypes` AS
    SELECT 
        `marinkom_jos1`.`jos_osrs_types`.`id` AS `id`,
        `marinkom_jos1`.`jos_osrs_types`.`type_name` AS `type_name`
    FROM
        `marinkom_jos1`.`jos_osrs_types` 
    UNION SELECT 0 AS `0`, 'Svi tipovi' AS `Svi tipovi`