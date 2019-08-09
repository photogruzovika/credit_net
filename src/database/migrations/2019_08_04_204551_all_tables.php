<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(<<<SQL

DROP TABLE IF EXISTS `credit`.`review` ;

CREATE TABLE IF NOT EXISTS `credit`.`review` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NULL,
  `from` VARCHAR(200) NULL,
  `text` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


DROP TABLE IF EXISTS `credit`.`questions` ;

CREATE TABLE IF NOT EXISTS `credit`.`questions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

DROP TABLE IF EXISTS `credit`.`request` ;

CREATE TABLE IF NOT EXISTS `credit`.`request` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `price` VARCHAR(1000) NULL,
  `country_to_delivery` VARCHAR(1000) NULL,
  `city_to_delivery` VARCHAR(1000) NULL,
  `address` VARCHAR(1000) NULL,
  `spravka` VARCHAR(1000) NULL,
  `fname` VARCHAR(1000) NULL,
  `sname` VARCHAR(1000) NULL,
  `tname` VARCHAR(1000) NULL,
  `country_from` VARCHAR(1000) NULL,
  `s_pas` VARCHAR(1000) NULL,
  `num_pas` VARCHAR(1000) NULL,
  `phone` VARCHAR(1000) NULL,
  `code` INT(10) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SQL
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
