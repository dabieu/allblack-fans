-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema allblack_fans
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema allblack_fans
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `allblack_fans` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `allblack_fans` ;

-- -----------------------------------------------------
-- Table `allblack_fans`.`fans`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `allblack_fans`.`fans` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `documento` VARCHAR(16) NOT NULL,
  `cep` VARCHAR(10) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `telefone` VARCHAR(18) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `ativo` TINYINT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 152
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
