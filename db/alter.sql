-- CREATE TABLE IF NOT EXISTS `reviews`
-- (
--     `UID` bigint NOT NULL AUTO_INCREMENT,
--     `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     `UserName` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
--     `Email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
--     `AdId` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
--     `Archive` smallint NOT NULL DEFAULT '0',
--     PRIMARY KEY(`UID`)
-- ) ENGINE=MyISAM AUTO_INCREMENT=1;
--
-- CREATE TABLE IF NOT EXISTS `files` (
--   `UID` bigint NOT NULL AUTO_INCREMENT,
--   `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   `Ext` varchar(50) NOT NULL,
--   `Content` longtext NOT NULL,
--   PRIMARY KEY (`UID`)
-- ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- ALTER TABLE `users` ADD `ProfilesImage` INT NOT NULL AFTER `Password`;
--
-- ALTER TABLE `ads` CHANGE `Status` `Status` TEXT NULL DEFAULT NULL;
-- ALTER TABLE `ads` CHANGE `AddDate` `AddDate` DATE NULL DEFAULT NULL;) ENGINE=MyISAM AUTO_INCREMENT=1;
--
--
--
-- ALTER TABLE `ads` ADD `Longitude` VARCHAR(200) NULL DEFAULT NULL AFTER `BookUserId`, ADD `Latitude` VARCHAR(200) NULL DEFAULT NULL AFTER `Longitude`;

CREATE TABLE IF NOT EXISTS `reviews` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Designation` text,
  `Description` text,
  `AdId` varchar(200) NOT NULL,
  `Archive` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

ALTER TABLE `travelinghome`.`reviews`
  ADD COLUMN `Status` VARCHAR(200) NULL AFTER `Designation`,
  ADD COLUMN `Image` INT NULL AFTER `Status`;