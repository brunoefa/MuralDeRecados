CREATE TABLE `muralderecados`.`recado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(250) NOT NULL,
  `texto` TEXT NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  `likes` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`));
 