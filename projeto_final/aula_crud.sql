/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : aula_crud

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-12-05 16:19:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- -----------------------------------------------------
-- Schema aula_crud
-- -----------------------------------------------------

CREATE SCHEMA IF NOT EXISTS `aula_crud` DEFAULT CHARACTER SET utf8 ;
USE `aula_crud` ;

-- ----------------------------
-- Table structure for `categorias`
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'EletrÃ´nicos', 'Aparelhos eletroeletrÃ´nicos');
INSERT INTO `categorias` VALUES ('3', 'Roupas', 'PeÃ§as de Roupas');
INSERT INTO `categorias` VALUES ('4', 'Ferramentas', 'Ferramentas');
INSERT INTO `categorias` VALUES ('5', 'AcessÃ³rios', '');
INSERT INTO `categorias` VALUES ('6', 'Perfumes', '');
INSERT INTO `categorias` VALUES ('7', 'Sapatos', '');
INSERT INTO `categorias` VALUES ('8', 'Livros', '');
INSERT INTO `categorias` VALUES ('9', 'Filmes', '');

-- ----------------------------
-- Table structure for `clientes`
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salario` decimal(15,2) DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obs` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'Denis Lima', 'denislima@iftm.edu.br', '12345679809', null, 'M', '2023-09-12', 'Teste');
INSERT INTO `clientes` VALUES ('2', 'Maria Bezerra', 'Maria@iftm.edu.br', '79845613210', null, 'F', '2023-09-08', 'Teste Testes');

-- ----------------------------
-- Table structure for `Futebol`
-- ----------------------------

DROP TABLE IF EXISTS `Futebol`;
CREATE TABLE `Futebol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_time` varchar(45) DEFAULT NULL,
  `fundacao` date DEFAULT NULL,
  `nome_jogador` varchar(45) DEFAULT NULL,
  `titulos_liga` int(2) DEFAULT NULL,
  `titulos_continentais` int(2) DEFAULT NULL,
  `maior_jogador` varchar(45) DEFAULT NULL,
  `maior_titulo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
-- ----------------------------
-- Table structure for `produtos`
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `valor` decimal(15,2) DEFAULT NULL,
  `codigo` varchar(13) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produtos_categorias_idx` (`categoria_id`),
  CONSTRAINT `fk_produtos_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('1', 'xBox', '8000.00', '123', '1', 'Teste', '3');
INSERT INTO `produtos` VALUES ('2', 'iPhone 14 Pro Max 256gb', '7500.00', '1', '1', 'Smartphone', '2');
INSERT INTO `produtos` VALUES ('3', 'iPhone xs Max 256gb', '8000.00', '7', '10', 'Smartphone', '1');
INSERT INTO `produtos` VALUES ('4', 'iPhone xs Max 256gb', '8000.00', '123', '1', 'Smartphone', '1');
INSERT INTO `produtos` VALUES ('5', 'FÃ©rias', '1500.00', '123', '1', 'FÃ©rias pra quem passou de ano', '1');
INSERT INTO `produtos` VALUES ('7', 'Brigadeiro', '3.00', '14', '50', 'DelÃ­cia', '3');
INSERT INTO `produtos` VALUES ('8', 'Echo dot 5', '300.00', '789654321', '50', 'Alexa da amazon', '1');
INSERT INTO `produtos` VALUES ('9', 'Martelo', '30.00', '7894561325', '50', 'Martelo de desempenar vidros', '4');
