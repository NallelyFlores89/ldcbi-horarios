SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`laboratorios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`laboratorios` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`laboratorios` (
  `idlaboratorios` INT NOT NULL ,
  `nombrelaboratorios` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`idlaboratorios`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`divisiones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`divisiones` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`divisiones` (
  `iddivisiones` INT NOT NULL AUTO_INCREMENT ,
  `nombredivision` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`iddivisiones`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`uea`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`uea` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`uea` (
  `iduea` INT NOT NULL AUTO_INCREMENT ,
  `nombreuea` VARCHAR(45) NOT NULL ,
  `horarioi` TIME NOT NULL ,
  `horariof` TIME NOT NULL ,
  `siglas` VARCHAR(15) NOT NULL ,
  `clave` VARCHAR(45) NOT NULL ,
  `laboratorios_idlaboratorios` INT NOT NULL ,
  `divisiones_iddivisiones` INT NOT NULL ,
  PRIMARY KEY (`iduea`) ,
  INDEX `fk_uea_laboratorios` (`laboratorios_idlaboratorios` ASC) ,
  INDEX `fk_uea_divisiones1` (`divisiones_iddivisiones` ASC) ,
  CONSTRAINT `fk_uea_laboratorios`
    FOREIGN KEY (`laboratorios_idlaboratorios` )
    REFERENCES `mydb`.`laboratorios` (`idlaboratorios` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_uea_divisiones1`
    FOREIGN KEY (`divisiones_iddivisiones` )
    REFERENCES `mydb`.`divisiones` (`iddivisiones` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`recursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`recursos` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`recursos` (
  `idrecursos` INT NOT NULL AUTO_INCREMENT ,
  `recurso` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idrecursos`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`profesores` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`profesores` (
  `idprofesores` INT NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `numempleado` VARCHAR(45) NOT NULL ,
  `correo` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idprofesores`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`grupo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`grupo` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`grupo` (
  `idgrupo` INT NOT NULL AUTO_INCREMENT ,
  `nombregrupo` VARCHAR(45) NOT NULL ,
  `uea_iduea` INT NOT NULL ,
  PRIMARY KEY (`idgrupo`) ,
  INDEX `fk_grupo_uea1` (`uea_iduea` ASC) ,
  CONSTRAINT `fk_grupo_uea1`
    FOREIGN KEY (`uea_iduea` )
    REFERENCES `mydb`.`uea` (`iduea` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarioadmin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`usuarioadmin` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`usuarioadmin` (
  `idusuarioadmin` INT NOT NULL ,
  `usuario` VARCHAR(45) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  `correo` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idusuarioadmin`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesores_has_uea`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`profesores_has_uea` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`profesores_has_uea` (
  `profesores_idprofesores` INT NOT NULL ,
  `uea_iduea` INT NOT NULL ,
  PRIMARY KEY (`profesores_idprofesores`, `uea_iduea`) ,
  INDEX `fk_profesores_has_uea_uea1` (`uea_iduea` ASC) ,
  INDEX `fk_profesores_has_uea_profesores1` (`profesores_idprofesores` ASC) ,
  CONSTRAINT `fk_profesores_has_uea_profesores1`
    FOREIGN KEY (`profesores_idprofesores` )
    REFERENCES `mydb`.`profesores` (`idprofesores` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_has_uea_uea1`
    FOREIGN KEY (`uea_iduea` )
    REFERENCES `mydb`.`uea` (`iduea` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`laboratorios_has_recursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`laboratorios_has_recursos` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`laboratorios_has_recursos` (
  `laboratorios_idlaboratorios` INT NOT NULL ,
  `recursos_idrecursos` INT NOT NULL ,
  PRIMARY KEY (`laboratorios_idlaboratorios`, `recursos_idrecursos`) ,
  INDEX `fk_laboratorios_has_recursos_recursos1` (`recursos_idrecursos` ASC) ,
  INDEX `fk_laboratorios_has_recursos_laboratorios1` (`laboratorios_idlaboratorios` ASC) ,
  CONSTRAINT `fk_laboratorios_has_recursos_laboratorios1`
    FOREIGN KEY (`laboratorios_idlaboratorios` )
    REFERENCES `mydb`.`laboratorios` (`idlaboratorios` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_laboratorios_has_recursos_recursos1`
    FOREIGN KEY (`recursos_idrecursos` )
    REFERENCES `mydb`.`recursos` (`idrecursos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`dias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`dias` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`dias` (
  `iddias` INT NOT NULL AUTO_INCREMENT ,
  `nombredia` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`iddias`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`dias_has_uea`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`dias_has_uea` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`dias_has_uea` (
  `dias_iddias` INT NOT NULL ,
  `uea_iduea` INT NOT NULL ,
  PRIMARY KEY (`dias_iddias`, `uea_iduea`) ,
  INDEX `fk_dias_has_uea_uea1` (`uea_iduea` ASC) ,
  INDEX `fk_dias_has_uea_dias1` (`dias_iddias` ASC) ,
  CONSTRAINT `fk_dias_has_uea_dias1`
    FOREIGN KEY (`dias_iddias` )
    REFERENCES `mydb`.`dias` (`iddias` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dias_has_uea_uea1`
    FOREIGN KEY (`uea_iduea` )
    REFERENCES `mydb`.`uea` (`iduea` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`laboratorios`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`laboratorios` (`idlaboratorios`, `nombrelaboratorios`) VALUES (105, 'AT-105');
INSERT INTO `mydb`.`laboratorios` (`idlaboratorios`, `nombrelaboratorios`) VALUES (106, 'AT-106');
INSERT INTO `mydb`.`laboratorios` (`idlaboratorios`, `nombrelaboratorios`) VALUES (219, 'AT-219');
INSERT INTO `mydb`.`laboratorios` (`idlaboratorios`, `nombrelaboratorios`) VALUES (220, 'AT-220');

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`divisiones`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`divisiones` (`iddivisiones`, `nombredivision`) VALUES (1, 'CBI');
INSERT INTO `mydb`.`divisiones` (`iddivisiones`, `nombredivision`) VALUES (2, 'CBS');
INSERT INTO `mydb`.`divisiones` (`iddivisiones`, `nombredivision`) VALUES (3, 'CSH');

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`uea`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`uea` (`iduea`, `nombreuea`, `horarioi`, `horariof`, `siglas`, `clave`, `laboratorios_idlaboratorios`, `divisiones_iddivisiones`) VALUES (1, 'programación avanzada', '10:00', '13:00', 'PA01', '1234', 105, 1);
INSERT INTO `mydb`.`uea` (`iduea`, `nombreuea`, `horarioi`, `horariof`, `siglas`, `clave`, `laboratorios_idlaboratorios`, `divisiones_iddivisiones`) VALUES (2, 'programación aplicada a la química', '11:00', '13:00', 'PAQ', '1342', 106, 2);
INSERT INTO `mydb`.`uea` (`iduea`, `nombreuea`, `horarioi`, `horariof`, `siglas`, `clave`, `laboratorios_idlaboratorios`, `divisiones_iddivisiones`) VALUES (3, 'introducción a la programación', '16:00', '19:00', 'IP01', '1467', 220, 1);
INSERT INTO `mydb`.`uea` (`iduea`, `nombreuea`, `horarioi`, `horariof`, `siglas`, `clave`, `laboratorios_idlaboratorios`, `divisiones_iddivisiones`) VALUES (4, 'sistemas operativos', '08:00', '11:00', 'SO', '1111', 106, 1);
INSERT INTO `mydb`.`uea` (`iduea`, `nombreuea`, `horarioi`, `horariof`, `siglas`, `clave`, `laboratorios_idlaboratorios`, `divisiones_iddivisiones`) VALUES (5, 'programación en administración', '14:00', '16:00', 'PAD', '4642', 219, 3);

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`recursos`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`recursos` (`idrecursos`, `recurso`) VALUES (1, 'Ubuntu 12.04');
INSERT INTO `mydb`.`recursos` (`idrecursos`, `recurso`) VALUES (2, 'Windows 7');
INSERT INTO `mydb`.`recursos` (`idrecursos`, `recurso`) VALUES (3, 'Geogebra');
INSERT INTO `mydb`.`recursos` (`idrecursos`, `recurso`) VALUES (4, 'Eclipse');
INSERT INTO `mydb`.`recursos` (`idrecursos`, `recurso`) VALUES (5, 'Netbeans');

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`profesores`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`profesores` (`idprofesores`, `nombre`, `numempleado`, `correo`) VALUES (1000, 'juanito perez lopez', '2929', 'juanito@xanum.com');
INSERT INTO `mydb`.`profesores` (`idprofesores`, `nombre`, `numempleado`, `correo`) VALUES (1001, 'lorenzo cardenas ', '2012', 'lorenzo@xanum.com');
INSERT INTO `mydb`.`profesores` (`idprofesores`, `nombre`, `numempleado`, `correo`) VALUES (1002, 'jose cardenas', '2011', 'jose@xanum.com');

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`grupo`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`grupo` (`idgrupo`, `nombregrupo`, `uea_iduea`) VALUES (1, 'cg21', 1);
INSERT INTO `mydb`.`grupo` (`idgrupo`, `nombregrupo`, `uea_iduea`) VALUES (2, 'ch32', 1);
INSERT INTO `mydb`.`grupo` (`idgrupo`, `nombregrupo`, `uea_iduea`) VALUES (3, 'kh23', 3);
INSERT INTO `mydb`.`grupo` (`idgrupo`, `nombregrupo`, `uea_iduea`) VALUES (4, 'ah32', 2);
INSERT INTO `mydb`.`grupo` (`idgrupo`, `nombregrupo`, `uea_iduea`) VALUES (5, 'jg23', 3);
INSERT INTO `mydb`.`grupo` (`idgrupo`, `nombregrupo`, `uea_iduea`) VALUES (6, 'af11', 1);

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`usuarioadmin`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`usuarioadmin` (`idusuarioadmin`, `usuario`, `pass`, `correo`) VALUES (1, 'admin', 'admin', 'admin@correo.com');

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`profesores_has_uea`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1000, 1);
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1000, 2);
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1000, 3);
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1001, 1);
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1001, 2);
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1002, 1);
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1002, 3);
INSERT INTO `mydb`.`profesores_has_uea` (`profesores_idprofesores`, `uea_iduea`) VALUES (1002, 2);

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`laboratorios_has_recursos`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (105, 1);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (106, 1);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (219, 1);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (220, 2);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (105, 2);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (105, 3);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (106, 2);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (106, 3);
INSERT INTO `mydb`.`laboratorios_has_recursos` (`laboratorios_idlaboratorios`, `recursos_idrecursos`) VALUES (219, 3);

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`dias`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`dias` (`iddias`, `nombredia`) VALUES (1, 'lunes');
INSERT INTO `mydb`.`dias` (`iddias`, `nombredia`) VALUES (2, 'martes');
INSERT INTO `mydb`.`dias` (`iddias`, `nombredia`) VALUES (3, 'miercoles');
INSERT INTO `mydb`.`dias` (`iddias`, `nombredia`) VALUES (4, 'jueves');
INSERT INTO `mydb`.`dias` (`iddias`, `nombredia`) VALUES (5, 'viernes');

COMMIT;

-- -----------------------------------------------------
-- Data for table `mydb`.`dias_has_uea`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (1, 1);
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (1, 2);
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (1, 3);
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (2, 1);
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (3, 2);
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (4, 1);
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (5, 4);
INSERT INTO `mydb`.`dias_has_uea` (`dias_iddias`, `uea_iduea`) VALUES (5, 2);

COMMIT;
