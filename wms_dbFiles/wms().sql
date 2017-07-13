SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `wms` DEFAULT CHARACTER SET latin1 ;
USE `wms` ;

-- -----------------------------------------------------
-- Table `wms`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `wms`.`user` (
  `id` INT(13) NOT NULL AUTO_INCREMENT ,
  `ServiceId` INT(13) NOT NULL ,
  `FirstName` VARCHAR(25) NOT NULL ,
  `LastName` VARCHAR(25) NOT NULL ,
  `Items` VARCHAR(25) NOT NULL ,
  `Agreedamount` INT(13) NOT NULL ,
  `Phone` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


-- -----------------------------------------------------
-- Table `wms`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `wms`.`users` (
  `id` INT(11) NOT NULL ,
  `FirstName` VARCHAR(20) NOT NULL ,
  `LastName` VARCHAR(20) NOT NULL ,
  `Phone` VARCHAR(17) NOT NULL ,
  `BirthDate` DATE NOT NULL ,
  `UserType` VARCHAR(20) NOT NULL )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

USE `wms` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
