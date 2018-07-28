-- MySQL Script generated by MySQL Workbench
-- 07/27/18 00:01:03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema selecao_educandus
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `selecao_educandus` ;

-- -----------------------------------------------------
-- Schema selecao_educandus
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `selecao_educandus` DEFAULT CHARACTER SET utf8 ;
USE `selecao_educandus` ;

-- -----------------------------------------------------
-- Table `selecao_educandus`.`contas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `selecao_educandus`.`contas` ;

CREATE TABLE IF NOT EXISTS `selecao_educandus`.`contas` (
  `idcontas` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(45) NULL COMMENT '',
  `limite_max_conta` INT NULL COMMENT '',
  `limite_max_arquivo` INT NULL COMMENT '',
  PRIMARY KEY (`idcontas`)  COMMENT '')
ENGINE = InnoDB;

INSERT INTO contas (idcontas, descricao, limite_max_conta, limite_max_arquivo) VALUES ('1', 'Gratuito', '5000', '25'), ('2', 'Premium', '500000', '250');

-- -----------------------------------------------------
-- Table `selecao_educandus`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `selecao_educandus`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `selecao_educandus`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `contas_idcontas` INT NOT NULL COMMENT '',
  `email` VARCHAR(255) NOT NULL COMMENT '',
  `senha` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idusuarios`)  COMMENT '',
  CONSTRAINT `fk_usuarios_contas1`
    FOREIGN KEY (`contas_idcontas`)
    REFERENCES `selecao_educandus`.`contas` (`idcontas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_usuarios_contas1_idx` ON `selecao_educandus`.`usuarios` (`contas_idcontas` ASC)  COMMENT '';

CREATE UNIQUE INDEX `email_UNIQUE` ON `selecao_educandus`.`usuarios` (`email` ASC)  COMMENT '';


-- -----------------------------------------------------
-- Table `selecao_educandus`.`tipo_arquivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `selecao_educandus`.`tipo_arquivo` ;

CREATE TABLE IF NOT EXISTS `selecao_educandus`.`tipo_arquivo` (
  `idtipo_arquivo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idtipo_arquivo`)  COMMENT '')
ENGINE = InnoDB;

INSERT INTO tipo_arquivo (idtipo_arquivo, descricao) VALUES ('1', 'Foto'), ('2', 'Vídeo'), ('3', 'Documentos'), ('4', 'Outros');

-- -----------------------------------------------------
-- Table `selecao_educandus`.`arquivos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `selecao_educandus`.`arquivos` ;

CREATE TABLE IF NOT EXISTS `selecao_educandus`.`arquivos` (
  `idarquivos` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuarios_idusuarios` INT NOT NULL COMMENT '',
  `nome` VARCHAR(45) NULL COMMENT '',
  `path` VARCHAR(45) NULL COMMENT '',
  `tamanho` INT NULL COMMENT '',
  `tipo_arquivo_idtipo_arquivo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idarquivos`, `usuarios_idusuarios`, `tipo_arquivo_idtipo_arquivo`)  COMMENT '',
  CONSTRAINT `fk_arquivos_usuarios`
    FOREIGN KEY (`usuarios_idusuarios`)
    REFERENCES `selecao_educandus`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_arquivos_tipo_arquivo1`
    FOREIGN KEY (`tipo_arquivo_idtipo_arquivo`)
    REFERENCES `selecao_educandus`.`tipo_arquivo` (`idtipo_arquivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_arquivos_usuarios_idx` ON `selecao_educandus`.`arquivos` (`usuarios_idusuarios` ASC)  COMMENT '';

CREATE INDEX `fk_arquivos_tipo_arquivo1_idx` ON `selecao_educandus`.`arquivos` (`tipo_arquivo_idtipo_arquivo` ASC)  COMMENT '';


-- -----------------------------------------------------
-- Table `selecao_educandus`.`compartilhamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `selecao_educandus`.`compartilhamento` ;

CREATE TABLE IF NOT EXISTS `selecao_educandus`.`compartilhamento` (
  `arquivos_idarquivos` INT NOT NULL COMMENT '',
  `usuarios_idusuarios` INT NOT NULL COMMENT '',
  PRIMARY KEY (`arquivos_idarquivos`, `usuarios_idusuarios`)  COMMENT '',
  CONSTRAINT `fk_compartilhamento_arquivos1`
    FOREIGN KEY (`arquivos_idarquivos`)
    REFERENCES `selecao_educandus`.`arquivos` (`idarquivos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compartilhamento_usuarios1`
    FOREIGN KEY (`usuarios_idusuarios`)
    REFERENCES `selecao_educandus`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_compartilhamento_arquivos1_idx` ON `selecao_educandus`.`compartilhamento` (`arquivos_idarquivos` ASC)  COMMENT '';

CREATE INDEX `fk_compartilhamento_usuarios1_idx` ON `selecao_educandus`.`compartilhamento` (`usuarios_idusuarios` ASC)  COMMENT '';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
