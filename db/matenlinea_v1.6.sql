-- MySQL Script generated by MySQL Workbench
-- Wed Jul 19 13:02:37 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mathonline
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mathonline
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mathonline` DEFAULT CHARACTER SET utf8 ;
USE `mathonline` ;

-- -----------------------------------------------------
-- Table `mathonline`.`unit_uam`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`unit_uam` (
  `id_unit_uam` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250) NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_unit_uam`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`degree`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`degree` (
  `id_degree` INT NOT NULL AUTO_INCREMENT,
  `id_unit_uam` INT NOT NULL,
  `division` VARCHAR(4) NOT NULL,
  `degree` VARCHAR(500) NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_degree`),
  INDEX `fk_degree_unit_uam1_idx` (`id_unit_uam` ASC),
  CONSTRAINT `fk_degree_unit_uam1`
    FOREIGN KEY (`id_unit_uam`)
    REFERENCES `mathonline`.`unit_uam` (`id_unit_uam`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`avatar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`avatar` (
  `id_avatar` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250) NOT NULL,
  `gender` INT NOT NULL,
  `location` VARCHAR(500) NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_avatar`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(250) NOT NULL,
  `password` LONGTEXT NOT NULL,
  `type_user` INT NOT NULL COMMENT '1.- Administrador\n2.- CCC\n3.- Alumno/Usuario',
  `id_avatar` INT NOT NULL,
  `name` VARCHAR(250) NULL,
  `last_name` VARCHAR(250) NULL,
  `sex` INT NULL COMMENT '1.- Hombre\n2.- Mujer',
  `year_birthday` INT NULL,
  `email` VARCHAR(250) NOT NULL,
  `id_degree` INT NOT NULL,
  `uam_identifier` VARCHAR(15) NULL,
  `is_student` TINYINT NULL,
  `is_employed` TINYINT NULL,
  `registration_date` DATETIME NOT NULL,
  `total_score` INT NULL DEFAULT 0,
  `status` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_user`),
  INDEX `fk_user_degree1_idx` (`id_degree` ASC),
  INDEX `fk_user_avatar1_idx` (`id_avatar` ASC),
  CONSTRAINT `fk_user_degree1`
    FOREIGN KEY (`id_degree`)
    REFERENCES `mathonline`.`degree` (`id_degree`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_avatar1`
    FOREIGN KEY (`id_avatar`)
    REFERENCES `mathonline`.`avatar` (`id_avatar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`theme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`theme` (
  `id_theme` INT NOT NULL AUTO_INCREMENT,
  `theme` VARCHAR(250) NOT NULL,
  `status` TINYINT NOT NULL,
  PRIMARY KEY (`id_theme`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`subtopic`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`subtopic` (
  `id_subtopic` INT NOT NULL AUTO_INCREMENT,
  `id_theme` INT NOT NULL,
  `subtopic` VARCHAR(250) NOT NULL,
  `status` TINYINT NOT NULL,
  PRIMARY KEY (`id_subtopic`),
  INDEX `fk_subtopic_theme_idx` (`id_theme` ASC),
  CONSTRAINT `fk_subtopic_theme`
    FOREIGN KEY (`id_theme`)
    REFERENCES `mathonline`.`theme` (`id_theme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`tutorial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`tutorial` (
  `id_tutorial` INT NOT NULL AUTO_INCREMENT,
  `id_subtopic` INT NOT NULL,
  `tutorial` VARCHAR(250) NOT NULL,
  `status` TINYINT NOT NULL,
  PRIMARY KEY (`id_tutorial`),
  INDEX `fk_tutorial_subtopic1_idx` (`id_subtopic` ASC),
  CONSTRAINT `fk_tutorial_subtopic1`
    FOREIGN KEY (`id_subtopic`)
    REFERENCES `mathonline`.`subtopic` (`id_subtopic`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`blog_tutorials`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`blog_tutorials` (
  `id_blog_tutorials` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `id_tutorial` INT NOT NULL,
  `time_finish` INT NOT NULL COMMENT 'In seconds',
  `tutorial_date` DATETIME NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_blog_tutorials`, `id_user`, `id_tutorial`),
  INDEX `fk_user_has_tutorial_tutorial1_idx` (`id_tutorial` ASC),
  INDEX `fk_user_has_tutorial_user1_idx` (`id_user` ASC),
  CONSTRAINT `fk_user_has_tutorial_user1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mathonline`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_tutorial_tutorial1`
    FOREIGN KEY (`id_tutorial`)
    REFERENCES `mathonline`.`tutorial` (`id_tutorial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`evaluation_tests`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`evaluation_tests` (
  `id_evaluation_tests` INT NOT NULL AUTO_INCREMENT,
  `id_subtopic` INT NOT NULL,
  `question` LONGTEXT NOT NULL,
  `points` INT NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_evaluation_tests`),
  INDEX `fk_evaluation_tests_subtopic1_idx` (`id_subtopic` ASC),
  CONSTRAINT `fk_evaluation_tests_subtopic1`
    FOREIGN KEY (`id_subtopic`)
    REFERENCES `mathonline`.`subtopic` (`id_subtopic`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`evaluation_response`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`evaluation_response` (
  `id_evaluation_response` INT NOT NULL AUTO_INCREMENT,
  `id_evaluation_tests` INT NOT NULL,
  `response` LONGTEXT NOT NULL,
  `is_correct` TINYINT NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_evaluation_response`),
  INDEX `fk_evaluation_response_evaluation_tests1_idx` (`id_evaluation_tests` ASC),
  CONSTRAINT `fk_evaluation_response_evaluation_tests1`
    FOREIGN KEY (`id_evaluation_tests`)
    REFERENCES `mathonline`.`evaluation_tests` (`id_evaluation_tests`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`evaluation_test_log`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`evaluation_test_log` (
  `id_evaluation_test_log` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `id_theme` INT NOT NULL,
  `time_finish` INT NOT NULL,
  `score` INT NOT NULL,
  `evaluation_date` DATETIME NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_evaluation_test_log`),
  INDEX `fk_evaluation_test_log_theme1_idx` (`id_theme` ASC),
  INDEX `fk_evaluation_test_log_user1_idx` (`id_user` ASC),
  CONSTRAINT `fk_evaluation_test_log_theme1`
    FOREIGN KEY (`id_theme`)
    REFERENCES `mathonline`.`theme` (`id_theme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evaluation_test_log_user1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mathonline`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`monthly_theme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`monthly_theme` (
  `id_monthly_theme` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `mounth` INT NOT NULL COMMENT '1.- Enero\n2.- Febrero\n3.- Marzo\n12.- Diciembre',
  `title` VARCHAR(500) NOT NULL,
  `description` LONGTEXT NOT NULL,
  `image` VARCHAR(500) NULL,
  `url_video` VARCHAR(250) NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_monthly_theme`),
  INDEX `fk_monthly_theme_user1_idx` (`id_user` ASC),
  CONSTRAINT `fk_monthly_theme_user1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mathonline`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`links_interest`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`links_interest` (
  `id_links_interest` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `title` VARCHAR(500) NOT NULL,
  `description` LONGTEXT NOT NULL,
  `link` LONGTEXT NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_links_interest`),
  INDEX `fk_links_interest_user1_idx` (`id_user` ASC),
  CONSTRAINT `fk_links_interest_user1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mathonline`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`bibliography`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`bibliography` (
  `id_bibliography` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `id_theme` INT NOT NULL,
  `author` VARCHAR(500) NOT NULL,
  `title` VARCHAR(500) NOT NULL,
  `place_publication` VARCHAR(500) NOT NULL,
  `editorial` VARCHAR(500) NOT NULL,
  `year` INT NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_bibliography`),
  INDEX `fk_bibliography_user1_idx` (`id_user` ASC),
  INDEX `fk_bibliography_theme1_idx` (`id_theme` ASC),
  CONSTRAINT `fk_bibliography_user1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mathonline`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bibliography_theme1`
    FOREIGN KEY (`id_theme`)
    REFERENCES `mathonline`.`theme` (`id_theme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mathonline`.`evalation_response`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mathonline`.`evalation_response` (
  `id_evalation_response` INT NOT NULL AUTO_INCREMENT,
  `id_evaluation_test_log` INT NOT NULL,
  `id_evaluation_tests` INT NOT NULL,
  `is_correct` TINYINT NULL,
  `status` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`id_evalation_response`),
  INDEX `fk_evalation_response_evaluation_test_log1_idx` (`id_evaluation_test_log` ASC),
  INDEX `fk_evalation_response_evaluation_tests1_idx` (`id_evaluation_tests` ASC),
  CONSTRAINT `fk_evalation_response_evaluation_test_log1`
    FOREIGN KEY (`id_evaluation_test_log`)
    REFERENCES `mathonline`.`evaluation_test_log` (`id_evaluation_test_log`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evalation_response_evaluation_tests1`
    FOREIGN KEY (`id_evaluation_tests`)
    REFERENCES `mathonline`.`evaluation_tests` (`id_evaluation_tests`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mathonline`.`unit_uam`
-- -----------------------------------------------------
START TRANSACTION;
USE `mathonline`;
INSERT INTO `mathonline`.`unit_uam` (`id_unit_uam`, `name`, `status`) VALUES (1, 'Ninguna', 1);
INSERT INTO `mathonline`.`unit_uam` (`id_unit_uam`, `name`, `status`) VALUES (2, 'Unidad Azcapotzalco', 1);
INSERT INTO `mathonline`.`unit_uam` (`id_unit_uam`, `name`, `status`) VALUES (3, 'Unidad Cuajimalpa', 1);
INSERT INTO `mathonline`.`unit_uam` (`id_unit_uam`, `name`, `status`) VALUES (4, 'Unidad Iztapalapa', 1);
INSERT INTO `mathonline`.`unit_uam` (`id_unit_uam`, `name`, `status`) VALUES (5, 'Unidad Lerma', 1);
INSERT INTO `mathonline`.`unit_uam` (`id_unit_uam`, `name`, `status`) VALUES (6, 'Unidad Xochimilco', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mathonline`.`degree`
-- -----------------------------------------------------
START TRANSACTION;
USE `mathonline`;
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (1, 1, 'NA', 'NA', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (2, 2, 'CSH', 'Administración', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (3, 2, 'CAD', 'Arquitectura', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (4, 2, 'CSH', 'Derecho', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (5, 2, 'CAD', 'Diseño de la Comunicación Gráfica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (6, 2, 'CAD', 'Diseño Industrial', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (7, 2, 'CSH', 'Economía', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (8, 2, 'CBI', 'Ingeniería Ambiental', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (9, 2, 'CBI', 'Ingeniería Civil', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (10, 2, 'CBI', 'Ingeniería Eléctrica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (11, 2, 'CBI', 'Ingeniería Electrónica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (12, 2, 'CBI', 'Ingeniería en Computación', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (13, 2, 'CBI', 'Ingeniería Física', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (14, 2, 'CBI', 'Ingeniería Industrial', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (15, 2, 'CBI', 'Ingeniería Mecánica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (16, 2, 'CBI', 'Ingeniería Metalúrgica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (17, 2, 'CBI', 'Ingeniería Química', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (18, 2, 'CSH', 'Sociología', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (19, 3, 'CSH', 'Administración', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (20, 3, 'CNI', 'Biología Molecular', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (21, 3, 'CCD', 'Ciencias de la Comunicación ', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (22, 3, 'CSH', 'Derecho', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (23, 3, 'CCD', 'Diseño', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (24, 3, 'CSH', 'Estudios Socioterritoriales ', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (25, 3, 'CSH', 'Humanídades', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (26, 3, 'CNI', 'Ingeniería Biológica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (27, 3, 'CNI ', 'Ingeniería en Computación', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (28, 3, 'CNI', 'Matemáticas Aplicadas', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (29, 3, 'CCD', 'Tecnologías y Sistemas de Información ', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (30, 4, 'CSH', 'Administración', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (31, 4, 'CSH', 'Antropología Social', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (32, 4, 'CBS', 'Biología', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (33, 4, 'CBS', 'Biología Experimental', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (34, 4, 'CBI', 'Ciencias Atmosféricas', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (35, 4, 'CSH', 'Ciencia Política', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (36, 4, 'CBI', 'Computación', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (37, 4, 'CSH', 'Economía', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (38, 4, 'CSH', 'Filosofía', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (39, 4, 'CBI', 'Física', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (40, 4, 'CSH', 'Geografía Humana', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (41, 4, 'CBS', 'Hidrobiología', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (42, 4, 'CSH', 'Historia', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (43, 4, 'CBI', 'Ingeniería Biomédica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (44, 4, 'CBS', 'Ingeniería Bioquímica Industrial', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (45, 4, 'CBS', 'Ingeniería de los Alimentos', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (46, 4, 'CBI', 'Ingeniería Electrónica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (47, 4, 'CBI', 'Ingeniería en Energía', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (48, 4, 'CBI', 'Ingeniería Hidrológica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (49, 4, 'CBI', 'Ingeniería Química', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (50, 4, 'CSH', 'Letras Hispánicas', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (51, 4, 'CSH', 'Lingüística', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (52, 4, 'CBI', 'Matemáticas', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (53, 4, 'CBS', 'Producción Animal', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (54, 4, 'CSH', 'Psicología Social', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (55, 4, 'CBI', 'Química', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (56, 4, 'CSH', 'Sociología', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (57, 5, 'CSH', 'Arte y Comunicación Digitales', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (58, 5, 'CBS', 'Biología Ambiental', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (59, 5, 'CBI', 'Ingeniería en Computación y Telecomunicaciones', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (60, 5, 'CBI', 'Ingeniería en Recursos Hídricos', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (61, 5, 'CSH', 'Políticas Públicas', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (62, 6, 'CSH', 'Administración', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (63, 6, 'CBS', 'Agronomía', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (64, 6, 'CAD', 'Arquitectura', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (65, 6, 'CBS', 'Biología', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (66, 6, 'CSH', 'Comunicación Social', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (67, 6, 'CAD', 'Diseño de la Comunicación Gráfica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (68, 6, 'CAD', 'Diseño Industrial', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (69, 6, 'CSH', 'Economía', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (70, 6, 'CBS', 'Enfermería', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (71, 6, 'CBS', 'Estomatología', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (72, 6, 'CBS', 'Medicina', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (73, 6, 'CBS', 'Medicina Veterinaria y Zootecnia', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (74, 6, 'CBS', 'Nutrición Humana ', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (75, 6, 'CAD', 'Planeación Territorial', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (76, 6, 'CSH', 'Política y Gestión Social', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (77, 6, 'CSH', 'Psicología', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (78, 6, 'CBS', 'Química Farmacéutica Biológica', 1);
INSERT INTO `mathonline`.`degree` (`id_degree`, `id_unit_uam`, `division`, `degree`, `status`) VALUES (79, 6, 'CSH', 'Sociología', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mathonline`.`avatar`
-- -----------------------------------------------------
START TRANSACTION;
USE `mathonline`;
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (1, 'airhostess', 2, '/statics/img/avatar/airhostess.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (2, 'alien', 1, '/statics/img/avatar/alien.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (3, 'alieness', 2, '/statics/img/avatar/alieness.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (4, 'angel', 1, '/statics/img/avatar/angel.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (5, 'aphrodite', 2, '/statics/img/avatar/aphrodite.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (6, 'astronaut', 2, '/statics/img/avatar/astronaut.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (7, 'canary', 2, '/statics/img/avatar/canary.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (8, 'captainess', 2, '/statics/img/avatar/captainess.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (9, 'catwoman', 2, '/statics/img/avatar/catwoman.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (10, 'contractor', 1, '/statics/img/avatar/contractor.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (11, 'dandy', 1, '/statics/img/avatar/dandy.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (12, 'devil', 1, '/statics/img/avatar/devil.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (13, 'doctor', 1, '/statics/img/avatar/doctor.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (14, 'fairy', 2, '/statics/img/avatar/fairy.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (15, 'female_dummy', 2, '/statics/img/avatar/female_dummy.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (16, 'gangster', 1, '/statics/img/avatar/gangster.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (17, 'king', 1, '/statics/img/avatar/king.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (18, 'maid', 2, '/statics/img/avatar/maid.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (19, 'male_dummy', 1, '/statics/img/avatar/male_dummy.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (20, 'nick', 2, '/statics/img/avatar/nick.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (21, 'ninja', 1, '/statics/img/avatar/ninja.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (22, 'nun', 2, '/statics/img/avatar/nun.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (23, 'nurse', 2, '/statics/img/avatar/nurse.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (24, 'officer', 1, '/statics/img/avatar/officer.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (25, 'priest', 1, '/statics/img/avatar/priest.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (26, 'queen', 2, '/statics/img/avatar/queen.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (27, 'robot', 1, '/statics/img/avatar/robot.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (28, 'robotess', 2, '/statics/img/avatar/robotess.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (29, 'sportsman', 1, '/statics/img/avatar/sportsman.png', 1);
INSERT INTO `mathonline`.`avatar` (`id_avatar`, `name`, `gender`, `location`, `status`) VALUES (30, 'teacher', 2, '/statics/img/avatar/teacher.png', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mathonline`.`user`
-- -----------------------------------------------------
START TRANSACTION;
USE `mathonline`;
INSERT INTO `mathonline`.`user` (`id_user`, `user_name`, `password`, `type_user`, `id_avatar`, `name`, `last_name`, `sex`, `year_birthday`, `email`, `id_degree`, `uam_identifier`, `is_student`, `is_employed`, `registration_date`, `total_score`, `status`) VALUES (1, 'AdminMatEnLinea', '1rxKMj42HBeT3HHYpzQnU9pAL0jsG7mpegAjmCmTWK+eN55P0jcpebohu52R7lAPMMI+CSVX3wg0kGXRc4Gbeg==', 1, 16, 'Administrador', 'Mate en línea', NULL, NULL, 'matenlinea.cbi@gmail.com', 1, 'NULL', NULL, NULL, '2017-05-01 00:00:00', NULL, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mathonline`.`theme`
-- -----------------------------------------------------
START TRANSACTION;
USE `mathonline`;
INSERT INTO `mathonline`.`theme` (`id_theme`, `theme`, `status`) VALUES (1, 'Números', 1);
INSERT INTO `mathonline`.`theme` (`id_theme`, `theme`, `status`) VALUES (2, 'Álgebra', 1);
INSERT INTO `mathonline`.`theme` (`id_theme`, `theme`, `status`) VALUES (3, 'Geometría y Trigonometría', 1);
INSERT INTO `mathonline`.`theme` (`id_theme`, `theme`, `status`) VALUES (4, 'Geometría analítica', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mathonline`.`subtopic`
-- -----------------------------------------------------
START TRANSACTION;
USE `mathonline`;
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (1, 1, 'Enteros', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (2, 1, 'Fracciones, porcentajes, razones y proporciones', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (3, 1, 'Reales y decimales', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (4, 1, 'Operaciones numéricas', 0);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (5, 1, 'Cálculos y estimaciones', 0);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (6, 1, 'Logaritmos y exponenciales', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (7, 2, 'Operaciones algebraicas', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (8, 2, 'Ecuaciones, fórmulas, expresiones e identidades', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (9, 3, 'Recta', 0);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (10, 3, 'Ángulos', 0);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (11, 3, 'Triángulos', 0);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (12, 3, 'Cículos y sus ángulos', 0);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (13, 3, 'Cuadriláteros y polígonos', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (14, 3, 'Semejanza', 0);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (15, 3, 'Trigonometría', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (16, 4, 'Plano cartesiano', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (17, 4, 'Rectas y ecuaciones lineales', 1);
INSERT INTO `mathonline`.`subtopic` (`id_subtopic`, `id_theme`, `subtopic`, `status`) VALUES (18, 4, 'Cónicas', 0);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mathonline`.`tutorial`
-- -----------------------------------------------------
START TRANSACTION;
USE `mathonline`;
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (1, 1, 'Enteros', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (2, 2, 'Fracciones', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (3, 2, 'Porcentajes', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (4, 2, 'Proporción directa e inversa', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (5, 3, 'Introducción al valor absoluto', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (6, 3, 'Ecuaciones con valor absoluto', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (7, 3, 'Desigualdades con valor absoluto', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (8, 6, 'Logaritmos y exponenciales', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (9, 7, 'Series y sucesiones', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (10, 7, 'Expresiones algebraicas', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (11, 8, 'Productos notables', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (12, 8, 'Ecuaciones lineales', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (13, 8, 'Introducción a ecuaciones cuadráticas', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (14, 8, 'Ecuaciones cuadráticas: Factorización', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (15, 8, 'Ecuaciones cuadráticas: TCP y fórmula general', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (16, 13, 'Polígonos', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (17, 15, 'Trigonometría', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (18, 15, 'Funciones trigonométricas', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (19, 16, 'Plano cartesiano', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (20, 17, 'Proporcionalidad', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (21, 17, 'Recta al origen', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (22, 17, 'Recta por dos puntos', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (23, 17, 'Pendiente y ordenada', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (24, 17, 'Sistemas de ecuaciones', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (25, 17, 'Distancia punto a recta', 1);
INSERT INTO `mathonline`.`tutorial` (`id_tutorial`, `id_subtopic`, `tutorial`, `status`) VALUES (26, 17, 'Desigualdades', 1);

COMMIT;

