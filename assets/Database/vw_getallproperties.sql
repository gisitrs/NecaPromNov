CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `marinkom_jos1`.`vw_getallproperties` AS
    SELECT 
        `marinkom_jos1`.`jos_osrs_properties`.`id` AS `id`,
        `marinkom_jos1`.`jos_osrs_properties`.`ref` AS `ref`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_name` AS `pro_name`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_small_desc` AS `pro_small_desc`,
        `marinkom_jos1`.`jos_osrs_properties`.`pro_type` AS `pro_type`,
        `marinkom_jos1`.`jos_osrs_properties`.`square_feet` AS `square_feet`,
        `marinkom_jos1`.`jos_osrs_properties`.`land_area` AS `land_area`,
        ROUND(`marinkom_jos1`.`jos_osrs_properties`.`land_area`,
                1) AS `land_area_text`,
        ROUND(`marinkom_jos1`.`jos_osrs_properties`.`land_area`,
                0) AS `land_area_roundtext`,
        FLOOR(`marinkom_jos1`.`jos_osrs_properties`.`square_feet`) AS `square_feet_text`,
        (CASE
            WHEN (`marinkom_jos1`.`jos_osrs_properties`.`price` = 0) THEN 'Na upit!'
            ELSE CONCAT(FORMAT(`marinkom_jos1`.`jos_osrs_properties`.`price`,
                        '###,###.##'),
                    ' €')
        END) AS price_text,
        marinkom_jos1.jos_osrs_properties.price AS price,
        (CASE
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 1)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'houserealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 2)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'flatrealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 3)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'cottagerealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 4)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'parcelrealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 5)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'villagerealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 6)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'businessrealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 7)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'issuingrealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 8)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'replacementrealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 9)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'togetherbuildingrealestate')
            WHEN
                (marinkom_jos1.jos_osrs_properties.pro_type = 11)
            THEN
                CONCAT(CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                        'apartmentrealestate')
            ELSE 'other'
        END) AS typeId,
        (CASE
            WHEN (marinkom_jos1.vw_getallpropertieswithimages.image IS NULL) THEN 'NoImage'
            ELSE marinkom_jos1.vw_getallpropertieswithimages.image
        END) AS image,
        (CASE
            WHEN (marinkom_jos1.vw_getallpropertieswithimages.image IS NULL) THEN 'assets/images/2019/nopropertyphoto.png'
            ELSE CONCAT('assets/images/properties/',
                    CAST(marinkom_jos1.jos_osrs_properties.id AS CHAR CHARSET UTF8MB4),
                    '/',
                    CONVERT( marinkom_jos1.vw_getallpropertieswithimages.image USING UTF8MB4))
        END) AS image_path
    FROM
        (marinkom_jos1.jos_osrs_properties
        LEFT JOIN marinkom_jos1.vw_getallpropertieswithimages ON ((marinkom_jos1.vw_getallpropertieswithimages.id = marinkom_jos1.jos_osrs_properties.id)))
    WHERE
        (marinkom_jos1.jos_osrs_properties.pro_type NOT IN (8 , 11))