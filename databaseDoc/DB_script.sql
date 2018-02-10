-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema WEB_User-login
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema WEB_User-login
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `WEB_User-login` DEFAULT CHARACTER SET utf8 ;
USE `WEB_User-login` ;

-- -----------------------------------------------------
-- Table `WEB_User-login`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WEB_User-login`.`roles` (
  `idRole` INT NOT NULL AUTO_INCREMENT,
  `Role` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idRole`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `WEB_User-login`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WEB_User-login`.`users` (
  `Name` VARCHAR(100) NOT NULL,
  `E-mail` VARCHAR(50) NOT NULL,
  `Password` VARCHAR(15) NULL,
  `Latitude` INT NULL,
  `Longitude` INT NULL,
  PRIMARY KEY (`E-mail`, `Name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `WEB_User-login`.`users_has_roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WEB_User-login`.`users_has_roles` (
  `users_E-mail` VARCHAR(50) NOT NULL,
  `users_Name` VARCHAR(100) NOT NULL,
  `roles_idRole` INT NOT NULL,
  PRIMARY KEY (`users_E-mail`, `users_Name`, `roles_idRole`),
  INDEX `fk_users_has_roles_roles1_idx` (`roles_idRole` ASC),
  INDEX `fk_users_has_roles_users_idx` (`users_E-mail` ASC, `users_Name` ASC),
  CONSTRAINT `fk_users_has_roles_users`
    FOREIGN KEY (`users_E-mail` , `users_Name`)
    REFERENCES `WEB_User-login`.`users` (`E-mail` , `Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_roles_roles1`
    FOREIGN KEY (`roles_idRole`)
    REFERENCES `WEB_User-login`.`roles` (`idRole`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
