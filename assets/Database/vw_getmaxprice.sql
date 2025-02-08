CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `marinkom_jos1`.`vw_getmaxprice` AS
    SELECT 
        (MAX(`marinkom_jos1`.`jos_osrs_properties`.`price`) + 10000) AS `max_price`,
        (MAX(`marinkom_jos1`.`jos_osrs_properties`.`square_feet`) + 10) AS `max_object_square_feet`,
        (MAX(`marinkom_jos1`.`jos_osrs_properties`.`land_area`) + 10) AS `max_object_land_area`
    FROM
        `marinkom_jos1`.`jos_osrs_properties`