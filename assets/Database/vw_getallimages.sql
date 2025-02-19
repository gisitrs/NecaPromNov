CREATE OR REPLACE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `marinkom_jos1`.`vw_getallimages` AS
    SELECT 
        `marinkom_jos1`.`jos_osrs_properties`.`id` AS `id`,
        `marinkom_jos1`.`jos_osrs_properties`.`ref` AS `ref`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_name` AS `pro_name`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_small_desc` AS `pro_small_desc`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_type` AS `pro_type`,
        `marinkom_jos1`.`jos_osrs_photos`.`ordering` AS `ordering`,
        (CASE
            WHEN (`marinkom_jos1`.`jos_osrs_properties`.`price` = 0) THEN 'Na upit!'
            ELSE CAST(`marinkom_jos1`.`jos_osrs_properties`.`price`
                AS CHAR CHARSET UTF8MB4)
        END) AS `price`,
        (CASE
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 1)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'houserealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 2)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'flatrealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 3)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'cottagerealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 4)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'parcelrealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 5)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'villagerealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 6)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'businessrealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 7)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'issuingrealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 8)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'replacementrealestate')
            WHEN
                (`marinkom_jos1`.`jos_osrs_properties`.`pro_type` = 11)
            THEN
                CONCAT(CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                            AS CHAR CHARSET UTF8MB4),
                        'apartmentrealestate')
            ELSE 'other'
        END) AS `typeId`,
        `marinkom_jos1`.`jos_osrs_photos`.`image` AS `image`,
        (CASE
            WHEN (`marinkom_jos1`.`jos_osrs_photos`.`image` IS NULL) THEN 'assets/images/2019/nopropertyphoto.png'
            ELSE CONCAT('assets/images/properties/',
                    CAST(`marinkom_jos1`.`jos_osrs_properties`.`id`
                        AS CHAR CHARSET UTF8MB4),
                    '/',
                    CONVERT( `marinkom_jos1`.`jos_osrs_photos`.`image` USING UTF8MB4))
        END) AS `image_path`
    FROM
        (`marinkom_jos1`.`jos_osrs_properties`
        LEFT JOIN `marinkom_jos1`.`jos_osrs_photos` ON ((`marinkom_jos1`.`jos_osrs_photos`.`pro_id` = `marinkom_jos1`.`jos_osrs_properties`.`id`)))