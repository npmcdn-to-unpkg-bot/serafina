-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema bd_serafinabolos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_serafinabolos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_serafinabolos` ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table1` (
)
ENGINE = InnoDB;

USE `bd_serafinabolos` ;

-- -----------------------------------------------------
-- Table `bd_serafinabolos`.`tipo_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_serafinabolos`.`tipo_usuario` (
  `id_tipo_usuario` INT NOT NULL AUTO_INCREMENT,
  `tipo_usuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_serafinabolos`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_serafinabolos`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(45) NOT NULL,
  `rg_usuario` VARCHAR(15) NULL,
  `cpf_usuario` VARCHAR(15) NULL,
  `tel_usuario` VARCHAR(45) NULL,
  `cel_usuario` VARCHAR(45) NULL,
  `email_usuario` VARCHAR(45) NULL,
  `senha_usuario` VARCHAR(45) NULL,
  `id_tipo_usuario` INT NOT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `id_tipo_usuario_idx` (`id_tipo_usuario` ASC),
  CONSTRAINT `id_tipo_usuario`
    FOREIGN KEY (`id_tipo_usuario`)
    REFERENCES `bd_serafinabolos`.`tipo_usuario` (`id_tipo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_serafinabolos`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_serafinabolos`.`endereco` (
  `id_endereco` INT NOT NULL AUTO_INCREMENT,
  `nome_endereco` VARCHAR(50) NULL,
  `endereco_endereco` VARCHAR(45) NULL,
  `numero_endereco` VARCHAR(8) NULL,
  `complemento_endereco` VARCHAR(70) NULL,
  `bairro_endereco` VARCHAR(70) NULL,
  `cidade_endereco` VARCHAR(70) NULL,
  `cep` VARCHAR(15) NULL,
  `id_usuario` INT NOT NULL,
  PRIMARY KEY (`id_endereco`),
  INDEX `id_usuario_idx` (`id_usuario` ASC),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `bd_serafinabolos`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_serafinabolos`.`bolo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_serafinabolos`.`bolo` (
  `id_bolo` INT NOT NULL AUTO_INCREMENT,
  `sabor_bolo` VARCHAR(100) NULL,
  `preco_bolo` DOUBLE NULL,
  `descricao_bolo` VARCHAR(300) NULL,
  PRIMARY KEY (`id_bolo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_serafinabolos`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_serafinabolos`.`pedido` (
  `id_pedido` INT NOT NULL,
  `id_cliente` INT NOT NULL,
  `entrega_pedido` VARCHAR(10) NULL,
  `dia_pedido` VARCHAR(10) NULL,
  `hora_pedido` VARCHAR(10) NULL,
  `hrentraga_pedido` VARCHAR(10) NULL,
  `id_endereco` INT NOT NULL,
  PRIMARY KEY (`id_pedido`),
  INDEX `id_cliente_idx` (`id_cliente` ASC),
  INDEX `id_endereco_idx` (`id_endereco` ASC),
  CONSTRAINT `id_cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `bd_serafinabolos`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_endereco`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `bd_serafinabolos`.`endereco` (`id_endereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_serafinabolos`.`pedido_bolo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_serafinabolos`.`pedido_bolo` (
  `id_pedido_bolo` INT NOT NULL,
  `nome_bolo` VARCHAR(45) NULL,
  `preco` DOUBLE NULL,
  `quantidade` INT NULL,
  `id_pedido` INT NOT NULL,
  `id_bolo` INT NOT NULL,
  INDEX `id_pedido_idx` (`id_pedido` ASC),
  INDEX `id_bolo_idx` (`id_bolo` ASC),
  CONSTRAINT `id_pedido`
    FOREIGN KEY (`id_pedido`)
    REFERENCES `bd_serafinabolos`.`pedido` (`id_pedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_bolo`
    FOREIGN KEY (`id_bolo`)
    REFERENCES `bd_serafinabolos`.`bolo` (`id_bolo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;

-- -----------------------------------------------------
-- Placeholder table for view `mydb`.`view1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`view1` (`id` INT);

-- -----------------------------------------------------
-- View `mydb`.`view1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`view1`;
USE `mydb`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
