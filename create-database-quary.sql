-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema scoreboard
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `scoreboard` ;

-- -----------------------------------------------------
-- Schema scoreboard
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `scoreboard` DEFAULT CHARACTER SET utf8 ;
USE `scoreboard` ;

-- -----------------------------------------------------
-- Table `scoreboard`.`teams`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scoreboard`.`teams` ;

CREATE TABLE IF NOT EXISTS `scoreboard`.`teams` (
  `team_id` INT UNIQUE NOT NULL AUTO_INCREMENT,
  `team_name` VARCHAR(45) NOT NULL,
  `team_short_name` VARCHAR(10) NOT NULL,
  `team_flag` VARCHAR(255) NULL DEFAULT NULL,
  `team_status` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`team_id`),
  UNIQUE INDEX `team_id_UNIQUE` (`team_id` ASC) );


-- -----------------------------------------------------
-- Table `scoreboard`.`matches`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scoreboard`.`matches` ;

CREATE TABLE IF NOT EXISTS `scoreboard`.`matches` (
  `match_id` INT UNIQUE NOT NULL AUTO_INCREMENT,
  `match_name` VARCHAR(45) NOT NULL,
  `match_date_time` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `match_live_statys` ENUM("LIVE", "END", "PENDING", "CANCEL", "POSTPONED") NULL DEFAULT 'PENDING',
  `match_type` ENUM("TEST", "ODI", "T20") NULL DEFAULT NULL,
  `match_over_count` INT(3) NULL DEFAULT NULL,
  `teams_team_id_toss_win` INT  NULL,
  `match_target` INT(4) NOT NULL DEFAULT 0,
  `teams_team_id01` INT  NOT NULL,
  `team01_status` ENUM("BAT", "BALL") NULL DEFAULT NULL,
  `team01_score` INT(4) NOT NULL DEFAULT 0,
  `team01_play_valid_ball_count` INT(4) NULL,
  `team01_play_all_ball_count` INT(4) NOT NULL DEFAULT 0,
  `team_01_wicket_count` INT(2) NOT NULL DEFAULT 0,
  `teams_team_id02` INT  NOT NULL,
  `team02_status` ENUM("BAT", "BALL") NULL DEFAULT NULL,
  `team02_score` INT(4) NOT NULL DEFAULT 0,
  `team02_play_valid_ball_count` INT(4) NOT NULL DEFAULT 0,
  `team02_play_all_ball_count` INT(4) NULL,
  `team_02_wicket_count` INT(2) NOT NULL DEFAULT 0,
  `match_play_status` ENUM('PENDING', 'ONGOING', '2ND_ROUND', 'WIN', 'DRAW', 'STOPED') NULL DEFAULT 'PENDING',
  `teams_team_id_win` INT  NULL DEFAULT NULL,
  `match_status` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`match_id`),
  INDEX `fk_matches_teams1_idx` (`teams_team_id01` ASC) ,
  INDEX `fk_matches_teams2_idx` (`teams_team_id02` ASC) ,
  INDEX `fk_matches_teams3_idx` (`teams_team_id_win` ASC) ,
  INDEX `fk_matches_teams4_idx` (`teams_team_id_toss_win` ASC) ,
  UNIQUE INDEX `match_id_UNIQUE` (`match_id` ASC) ,
  CONSTRAINT `fk_matches_teams1`
    FOREIGN KEY (`teams_team_id01`)
    REFERENCES `scoreboard`.`teams` (`team_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matches_teams2`
    FOREIGN KEY (`teams_team_id02`)
    REFERENCES `scoreboard`.`teams` (`team_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matches_teams3`
    FOREIGN KEY (`teams_team_id_win`)
    REFERENCES `scoreboard`.`teams` (`team_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matches_teams4`
    FOREIGN KEY (`teams_team_id_toss_win`)
    REFERENCES `scoreboard`.`teams` (`team_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `scoreboard`.`players`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scoreboard`.`players` ;

CREATE TABLE IF NOT EXISTS `scoreboard`.`players` (
  `player_id` INT UNIQUE NOT NULL AUTO_INCREMENT,
  `player_name` VARCHAR(100) NOT NULL,
  `player_image` VARCHAR(255) NULL DEFAULT NULL,
  `teams_team_id` INT  NOT NULL,
  `player_status` INT(1) NULL DEFAULT 1,
  PRIMARY KEY (`player_id`),
  INDEX `fk_players_teams_idx` (`teams_team_id` ASC) ,
  UNIQUE INDEX `player_id_UNIQUE` (`player_id` ASC) ,
  CONSTRAINT `fk_players_teams`
    FOREIGN KEY (`teams_team_id`)
    REFERENCES `scoreboard`.`teams` (`team_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `scoreboard`.`adminUsers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scoreboard`.`adminUsers` ;

CREATE TABLE IF NOT EXISTS `scoreboard`.`adminUsers` (
  `admin_user_id` INT UNIQUE NOT NULL AUTO_INCREMENT,
  `admin_usr_name` VARCHAR(45) NOT NULL,
  `admin_user_email` VARCHAR(100) NOT NULL,
  `admin_user_password` VARCHAR(255) NOT NULL,
  `admin_user_type` ENUM("SU", "NU", "PEN") NULL DEFAULT 'NU',
  `admin_user_status` INT(1) NULL DEFAULT 1,
  `password_reset_link_uuid` VARCHAR(255) NULL DEFAULT NULL,
  `password_reset_link_expier_time` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_user_id`),
  UNIQUE INDEX `admin_user_id_UNIQUE` (`admin_user_id` ASC) );


-- -----------------------------------------------------
-- Table `scoreboard`.`matches_has_records`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scoreboard`.`matches_has_records` ;

CREATE TABLE IF NOT EXISTS `scoreboard`.`matches_has_records` (
  `matches_has_record_id` INT NOT NULL AUTO_INCREMENT,
  `matches_match_id` INT NOT NULL,
  `batting_players_player_id` INT NOT NULL,
  `balling_players_player_id` INT NOT NULL,
  `over` INT NULL,
  `over_ball_index` INT(1) NULL,
  `ball_type` ENUM("VALID", "WIDE", "NO_BALL") NULL DEFAULT 'VALID',
  `score_type` ENUM("N/A", "RUN", "FOUR", "SIX", "WIDE") NULL DEFAULT 'N/A',
  `score` INT(1) NULL DEFAULT 0,
  `is_batmen_out` INT(1) NULL DEFAULT 0,
  `record_status` INT(1) NULL DEFAULT 1,
  INDEX `fk_matches_has_players_players2_idx` (`batting_players_player_id` ASC) ,
  INDEX `fk_matches_has_players_matches2_idx` (`matches_match_id` ASC) ,
  INDEX `fk_matches_has_records_players1_idx` (`balling_players_player_id` ASC) ,
  PRIMARY KEY (`matches_has_record_id`),
  UNIQUE INDEX `matches_has_record_id_UNIQUE` (`matches_has_record_id` ASC) ,
  CONSTRAINT `fk_matches_has_players_matches2`
    FOREIGN KEY (`matches_match_id`)
    REFERENCES `scoreboard`.`matches` (`match_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matches_has_players_players2`
    FOREIGN KEY (`batting_players_player_id`)
    REFERENCES `scoreboard`.`players` (`player_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matches_has_records_players1`
    FOREIGN KEY (`balling_players_player_id`)
    REFERENCES `scoreboard`.`players` (`player_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `scoreboard`.`matches_has_players`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scoreboard`.`matches_has_players` ;

CREATE TABLE IF NOT EXISTS `scoreboard`.`matches_has_players` (
  `matches_match_id` INT NOT NULL,
  `players_player_id` INT  NOT NULL,
  `plyer_bating_order` INT(2) NULL,
  `status` INT(1) NOT NULL DEFAULT 1,
  `playing_status` ENUM("N/A", "OUT", "BAT", "BAT+", "PENDING", "FIELDING", "BALLING") NULL DEFAULT 'N/A',
  PRIMARY KEY (`matches_match_id`, `players_player_id`),
  INDEX `fk_matches_has_players_players3_idx` (`players_player_id` ASC) ,
  INDEX `fk_matches_has_players_matches3_idx` (`matches_match_id` ASC) ,
  CONSTRAINT `fk_matches_has_players_matches3`
    FOREIGN KEY (`matches_match_id`)
    REFERENCES `scoreboard`.`matches` (`match_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matches_has_players_players3`
    FOREIGN KEY (`players_player_id`)
    REFERENCES `scoreboard`.`players` (`player_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
