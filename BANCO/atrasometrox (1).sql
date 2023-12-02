-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 04:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atrasometrox`
--

-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `nomealuno` varchar(200) NOT NULL,
  `cursoaluno` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `matricula`, `nomealuno`, `cursoaluno`) VALUES
(1, '4545597300', 'ALLAN HOFFMANN TROMBIM', 1),
(2, '4550459106', 'ANA JÚLIA INGRACIA VIANA', 1),
(3, '4543791761', 'ARTUR RECALCATTI BORDIGNON', 1),
(4, '4550418000', 'DAVI DE SOUZA DE CARVALHO', 1),
(5, '4540390502', 'DAVI STEINER FREITAS', 1),
(6, '4540157808', 'FERNANDO NUNES DE AGUIAR', 1),
(7, '4550439776', 'GABRIEL DA COSTA ANACLETO', 1),
(8, '4545848990', 'GUILHERME TEIXEIRA CARDOSO', 1),
(9, '4547898439', 'GUSTAVO SCARABELOT DOS SANTOS', 1),
(10, '4544810255', 'HACHEMI HAFYANE', 1),
(11, '4545843076', 'HENRIQUE MACHADO DE SOUZA', 1),
(12, '4501953798', 'IGOR ANTUNES CUSTODIO', 1),
(13, '4550416121', 'ISADORA ARAUJO ROCHA', 1),
(14, '4546012690', 'JOAO MIGUEL MAIA SANTOS', 1),
(15, '4540001859', 'JOAO VICTOR SERAFIM TOMAZ', 1),
(16, '4542718998', 'JOAO VITOR DE SOUZA RODRIGUES', 1),
(17, '4550417020', 'JORGE HENRIQUE DE SOUZA CARDOSO', 1),
(18, '4545842452', 'KEVIN GIRELLI', 1),
(19, '4543705660', 'LEONARDO DE MELOS DAITX', 1),
(20, '4546897579', 'LETICIA DA ROSA JUVENCIO', 1),
(21, '4550440316', 'MARIA CRISTINA TERNUS', 1),
(22, '4545742601', 'MATEUS MARTINS BOAROLI', 1),
(23, '4501951400', 'MATHEUS DOMINGOS MARANGONI', 1),
(24, '4550418442', 'MICAELLA EUGENIO DALMOLIM', 1),
(25, '4550426798', 'PEDRO HENRIQUE DE SOUZA RIBEIRO', 1),
(26, '4550416210', 'PEDRO VITOR MARCOLINO IRMAO', 1),
(27, '4550416997', 'RAFAEL COELHO DE SOUZA', 1),
(28, '4550781105', 'VITÓRIA DE ASSUNÇÃO DE MEDEIROS', 1),
(29, '4547902568', 'ZAYMA KINSIONA', 1),
(30, '4550417233', 'ADRIEL INACIO CARDOSO', 2),
(31, '4550726619', 'ADRIELE DE OLIVEIRA STANO BRESSAN', 2),
(32, '4550937881', 'ALBANO DA SILVA LIMA', 2),
(33, '4550417837', 'ALESSANDRO DE JESUS DE SÁ', 2),
(34, '4550418680', 'ALESSANDRO TRAMONTIN FRIGO', 2),
(35, '4540189149', 'ANA CAROLINA MARIANO DO ROSARIO', 2),
(36, '4545826899', 'ANA JULIA DE SOUZA ALANO', 2),
(37, '4550419279', 'ANDREI MARQUES DIAS', 2),
(38, '4545465101', 'ANTONIO GABRIEL FERREIRA ZANETTE', 2),
(39, '4550639457', 'BIANCA MICHELS DA SILVA', 2),
(40, '4550423314', 'BRAYAN ALVES CARDOSO', 2),
(41, '4540007172', 'BRUNO DA SILVA MARTINS', 2),
(42, '4550419430', 'CARLOS ZEFERINO BUTTNER', 2),
(43, '4540007156', 'CAUAN MANENTI', 2),
(44, '4550417497', 'DAVI MACHADO TOMAZ', 2),
(45, '4541264934', 'EMILI CECCONI PARANAGUÁ', 2),
(46, '4550420935', 'ERIK ZILLI', 2),
(47, '4545711781', 'GABRIEL MARTINS MEDEIROS', 2),
(48, '4550420510', 'GUSTAVO DE REZENDE BIAVA', 2),
(49, '4545837084', 'HIGOR WARMLING CAVANHOLI', 2),
(50, '4550421079', 'IVAN RONSANI DA SILVA', 2),
(51, '4501547102', 'JHONATA RODRIGUES MATTOS', 2),
(52, '4550439121', 'JOÃO VITOR DA SILVA MIGUEL', 2),
(53, '4501971694', 'KAUA DOS SANTOS DE SOUZA', 2),
(54, '4543242610', 'KAUAN DA SILVA ALEXANDRE', 2),
(55, '4550420692', 'KAUANE TERRA LUCAS', 2),
(56, '4550420587', 'KEVIN DE MORAIS SPRÍCIGO', 2),
(57, '4546039122', 'LEONARDO MATIAS MACHADO', 2),
(58, '4545726207', 'LUCAS ADRIANO DA COSTA', 2),
(59, '4550421249', 'MAURICIO NASCIMENTO MENDES', 2),
(60, '4543242300', 'NICHOLAS VENDRAME FABRE', 2),
(61, '4544306549', 'NICOLAS FORMIGONI DE SOUZA', 2),
(62, '4550419295', 'PEDRO HENRIQUE MORAES DA SILVA', 2),
(63, '4545633349', 'REGIS COSTA PEDRO', 2),
(64, '4550474857', 'SAMUEL FRAGA NUNES', 2),
(65, '4545684261', 'SARA DA SILVA VIEIRA', 2),
(66, '4540187057', 'SUIANE ROSA HENRIQUE', 2),
(67, '4542384208', 'TIAGO GABRIEL PEREIRA TEIXEIRA', 2),
(68, '4544562251', 'ARTUR DA ROSA BRISTOT', 3),
(69, '4540732616', 'BEATRIZ DE ASSUNCAO ELIAS', 3),
(70, '4550423420', 'DAVI JACINTO DE SOUZA', 3),
(71, '4550427468', 'EDUARDO CUSTÓDIA ORTOLAN', 3),
(72, '4550465688', 'EDUARDO DOS SANTOS GOULART', 3),
(73, '4550423870', 'ELIEZER QUEMUEL GOMES CLAUDINO', 3),
(74, '4550416326', 'ERICA ROCHA MARTINS RODRIGUES', 3),
(75, '4542790818', 'FABRÍCIO ALDIVINO ALMEIDA', 3),
(76, '4501956673', 'FELIPE ROSSETTO DA SILVA', 3),
(77, '4550449003', 'FILIPE SILVA SALVADOR', 3),
(78, '4550425201', 'GABRIEL DOS SANTOS JULIO', 3),
(79, '4545458466', 'GABRIEL SERAFIM NART', 3),
(80, '4545827372', 'GABRIELA DELFINO CORRÊA', 3),
(81, '4501536259', 'GABRIELA FERNANDES SANTANA', 3),
(82, '4547657202', 'GUILHERME FRANCISCO FERNANDES DE SOUZA', 3),
(83, '4550829027', 'GUSTAVO FREITAS BELEGANTE', 3),
(84, '4548684777', 'GUSTAVO TOPANOTTI FERNANDES FELIPE', 3),
(85, '4545842800', 'HENRIQUE FREITAS GONÇALVES', 3),
(86, '4550101856', 'JOÃO LUCAS MONTEIRO PANTALEÃO', 3),
(87, '4501745060', 'JOAO PEDRO FREITAS PONCIANO', 3),
(88, '4543783815', 'JOÃO VITOR BIANCHINI DOS PASSOS', 3),
(89, '4501955880', 'JOAO VITOR MARTINS', 3),
(90, '4550422830', 'JONATAN DA SILVA LOURENÇO', 3),
(91, '4549156600', 'LIANDER DE ALMEIDA NUNES', 3),
(92, '4550422091', 'LUCAS DE AGUIAR CUNHASKI', 3),
(93, '4543269208', 'MARCELO DOS SANTOS SCHULER', 3),
(94, '4500683355', 'MARCOS ANDRE NASCIMENTO BATISTA CRUZ', 3),
(95, '4501956142', 'MARIA EDUARDA DOS PASSOS REBELLO', 3),
(96, '4550427450', 'MICAELI ESPINDOLA DE ARAUJO', 3),
(97, '4550427646', 'RAFAEL AUGUSTO TEIXEIRA RODRIGUES', 3),
(98, '4550424272', 'WESLLEY THIAGO DE MORAES DA COSTA', 3),
(99, '4501704178', 'CAIO DA SILVA FERNANDES', 4),
(100, '4550427484', 'CAIO DEOLINDO', 4),
(101, '4541964804', 'CAMILLA LUCIETTI', 4),
(102, '4549780869', 'CECILIA HORACIO RUFINO', 4),
(103, '4501825714', 'CHAUAN DA SILVA DE VILLA', 4),
(104, '4550432534', 'DJENIFER DE SOUZA DE ALMEIDA', 4),
(105, '4550456441', 'EDER CAMPOS ANDRÉ', 4),
(106, '4551464120', 'EDUARDO SIEGLITZ DA SILVEIRA', 4),
(107, '4540045937', 'EDUARDO SILVEIRA FRIGO', 4),
(108, '4540683739', 'EMYLI GHEDIN', 4),
(109, '4501527365', 'ENZO DE SOUZA HINGST', 4),
(110, '4541586532', 'ESTER SCHMOELLER FIGUEIREDO', 4),
(111, '4541452889', 'GABRIEL BERNARDO CORREA', 4),
(112, '4550997230', 'GIOVANA ZANONI CESARIO DA SILVA', 4),
(113, '4550727356', 'GUILHERME DE FRAGA VENANCIO', 4),
(114, '4550443587', 'GUILHERME DOS SANTOS DE FARIAS', 4),
(115, '4544076004', 'JACSON DA PAIXÃO ANTUNES', 4),
(116, '4550439237', 'JOÃO VICTOR SZYNDROWSKI DA SILVA', 4),
(117, '4550998325', 'JOÃO VITOR FACHIN SALVADOR', 4),
(118, '4541495995', 'JONATAS LUIZ EVANGELISTA DA COSTA', 4),
(119, '4542742830', 'LEONARDO RIBEIRO KULKAMP', 4),
(120, '4545449947', 'LUCA SALVADEGO', 4),
(121, '4540186654', 'MARCOS VINICIUS VALMARATI SORATO', 4),
(122, '4545591590', 'MATEUS WESLER MARTINS', 4),
(123, '4501956584', 'OTTO SIMAO WELINSKI RIGOBELLO', 4),
(124, '4550439580', 'SIMEI DE SOUZA MONDARDO', 4),
(125, '4540095748', 'VITOR BERNARDINO AMARAL', 4),
(126, '4545811972', 'VITORIA ALVES ZANELLATO', 4),
(127, '4548706592', 'VITORIA EMANUELA DE COSTA RAMOS', 4),
(128, '4550418108', 'YASMIN MENDONÇA', 4),
(129, '4544727498', 'YURI SANTOS GACHO', 4),
(130, '4549091095', 'ARTHUR TEIXEIRA SERAFIM', 5),
(131, '4549091605', 'ARTUR DOS SANTOS CARVALHO', 5),
(132, '4501071809', 'BRUNO GARCIA BETTIOL', 5),
(133, '4501335296', 'CAETANO CORDOVA DA SILVA', 5),
(134, '4549091117', 'CALEBE ARLAN SOUZA DA SILVA', 5),
(135, '4548532365', 'EMANUEL DE SOUZA FERRAZ', 5),
(136, '4549091044', 'GABRIEL DE OLIVEIRA', 5),
(137, '4549091052', 'GABRIEL DOS SANTOS VICENTE DA SILVA', 5),
(138, '4544477394', 'GIOVANE MARTINELLO EYNG', 5),
(139, '701963638', 'GUSTAVO FRANCISCO MACEDO', 5),
(140, '4549090820', 'GUSTAVO GONCALVES DOS SANTOS', 5),
(141, '4549090862', 'HENRIQUE ANDRE DE SOUZA', 5),
(142, '4500653790', 'HENRIQUE DA SILVA RONZANI', 5),
(143, '4544749343', 'ISABELA PATRICIO DE JESUS', 5),
(144, '4549091354', 'ISABELLE LUIZ FELTRIN', 5),
(145, '4544583720', 'JOYCE CAMPOS LAURINDO', 5),
(146, '4544559978', 'KAUAN ROCHA DE JESUS', 5),
(147, '4549091281', 'KEROLLYN CLEZAR MONTEIRO', 5),
(148, '1001428460', 'MARCO ANTONIO SOUZA ORTEGA DE MEDEIROS', 5),
(149, '4549084935', 'MARIA EDUARDA LOCK PEREIRA', 5),
(150, '4549100060', 'MARIA LAURA DE LUCCA', 5),
(151, '4540860444', 'MARIA RITA GONÇALVES DE OLIVEIRA', 5),
(152, '4500715222', 'MARIA VITORIA RIOS MACHADO', 5),
(153, '4546082478', 'NEEMIAS DOS SANTOS PORTO', 5),
(154, '4549637217', 'NICOLE DOS SANTOS VOLKWEIS', 5),
(155, '4549091168', 'PAULINO ACACIO VIEIRA JUNIOR', 5),
(156, '4549091150', 'PEDRO BELLARMINO CARDOSO', 5),
(157, '4500970516', 'VALTER ROESSLE DE VASCONCELOS', 5),
(158, '4543030981', 'VITOR DA ROSA DE OLIVEIRA', 5),
(159, '4541621168', 'VITÓRIO GABRIEL ZANELATTO FERNANDES', 5),
(160, '4500610315', 'WINÍCIUS ANTONELLO', 5),
(161, '4501319088', 'YAGO STOFFEL DE COSTA', 5),
(162, '4549091079', 'ANA FLAVIA GHEDIN ROSSO', 6),
(163, '4546488849', 'ARTHUR FELTRIN GAVA', 6),
(164, '4501151977', 'BEATRIZ MENDONÇA DE SOUZA', 6),
(165, '4544574888', 'BIANCA ZANETTE RONCONI', 6),
(166, '4549621108', 'BRUNO MONTEIRO BONIFACIO', 6),
(167, '4544584620', 'CAIO FERRAREZI DIAS', 6),
(168, '4549071981', 'CAROLINA NONNENMACHER STANGE', 6),
(169, '4549077289', 'DIOGENES RAFAEL GOMES', 6),
(170, '4549994842', 'DIOGO JOÃO LOBO', 6),
(171, '4549079575', 'ERICK DA SILVA AURELIO', 6),
(172, '4544463610', 'FERNANDO FERNANDES DE FARIAS', 6),
(173, '4549091028', 'GABRIEL COSTA GUETNER', 6),
(174, '4544583496', 'GABRIELA DE SOUZA FRATONI', 6),
(175, '4549091257', 'GUILHERME POLA DE JESUS', 6),
(176, '4549091338', 'GUILHERME RABELLO CARRER', 6),
(177, '4549087349', 'HEMANUEL EMIDIO DE OLIVEIRA', 6),
(178, '4547936195', 'JEAN VITOR VIEIRA', 6),
(179, '4549091680', 'JHONI CAUAN FREITAS ELIAS', 6),
(180, '4549079648', 'JOÃO CARLOS RODRIGUES GOMES JUNIOR', 6),
(181, '4501484992', 'JOAO LUIS MACHADO RICKEN', 6),
(182, '4549091443', 'JOAO RAFAEL MEDEIROS MIGUEL', 6),
(183, '4549091346', 'KAUA DA SILVA TEIXEIRA', 6),
(184, '4547317088', 'KAUAN CUSTODIO PROPODOSKI', 6),
(185, '4500460321', 'LEONARDO DA SILVA JOAQUIM', 6),
(186, '4540294333', 'LUIS FILIPE DAMIANI COLOMBO', 6),
(187, '4544557142', 'LUIZ ANDRE GOMES RONCHI', 6),
(188, '4549084625', 'LUIZ FELIPE PIGNATEL', 6),
(189, '4549091184', 'MARIA LUIZA ABREU GONCALVES', 6),
(190, '4544264897', 'MATEUS SALLES MELO', 6),
(191, '4549091591', 'MIGUEL NILO ROSA', 6),
(192, '4549095082', 'NAIRAN DE SOUZA COSTA', 6),
(193, '4540291261', 'NATHAN ROCHA GOMES', 6),
(194, '4542380911', 'NICOLAS MARTINS DA SILVA', 6),
(195, '4500643566', 'NICOLLY MARQUES MARIANO', 6),
(196, '4549091311', 'PEDRO HENRIQUE NETTO FLORIANO', 6),
(197, '4549087519', 'RICK FERNANDES PADILHA', 6),
(198, '4500654789', 'THIAGO DE MOLINER COLOMBO', 6),
(199, '4549091648', 'TIAGO RAMOS AGUIAR', 6),
(200, '4549091508', 'VITOR DA SILVA DE FREITAS ADAO', 6),
(201, '4549091133', 'AGNES PINHEIRO PEREIRA', 7),
(202, '4549091109', 'AUGUSTO RAICHASKI', 7),
(203, '4501018010', 'BRUNO MIGUEL FERNANDES PHILIPPI', 7),
(204, '4544571790', 'DIOGO MARTINS DA ROSA', 7),
(205, '4543585282', 'FILIPE DE JESUS CRISPIM TEIXEIRA', 7),
(206, '4541424990', 'GABRIEL FILLIPE CASAGRANDE FERNANDES', 7),
(207, '4546272269', 'GABRIEL PEREIRA SALVADOR', 7),
(208, '4540326669', 'GABRIEL RODRIGUES VIEIRA', 7),
(209, '4544702177', 'GABRIEL SUMARA FORTUNA', 7),
(210, '1100237523', 'GIOVANNA JACINTO HENRIQUE', 7),
(211, '4549084056', 'GUILHERME RODRIGUES LOPES', 7),
(212, '4549090846', 'GUSTAVO RAICHASKI', 7),
(213, '4500940684', 'IRRUAN RODRIGUES SANTIAGO', 7),
(214, '4549090927', 'JOAO GABRIEL PAGNUSSATI', 7),
(215, '4549091567', 'LAIS KAMINSKI CASAGRANDE', 7),
(216, '4549091265', 'LEONARDO DE OLIVEIRA DALPONTE', 7),
(217, '4549091214', 'LINDSLEY MARCOS GUIMARAES COELHO SCUSSEL', 7),
(218, '4500460461', 'LUCAS LESSA ANACLETO', 7),
(219, '4543872150', 'LUCAS PIZONI FLORES', 7),
(220, '4543590790', 'LUCAS RAMOS PENE DOS SANTOS', 7),
(221, '4544293676', 'MAINE CALABREZI DE SOUZA', 7),
(222, '4500523838', 'MATEUS BURIGO ARAMBURU', 7),
(223, '4541912375', 'RICARDO HENRIQUE DAGOSTIM ALBANO', 7),
(224, '4549091494', 'VINICIUS DE ARAUJO GOULART', 7),
(225, '4500527051', 'VITOR AUGUSTO MUNHOS HESSEL', 7),
(226, '4549091621', 'VITORIA JOICE ALEXANDRE', 7),
(227, '4549091141', 'ANA COSTA', 8),
(228, '4543257242', 'ANDREI DA ROSA', 8),
(229, '1101098268', 'BERNARDO SANTOS DA SILVA', 8),
(230, '4543915533', 'DAVI DEROSSI LUZ', 8),
(231, '4549478810', 'DAVI MARCILIO BURATO', 8),
(232, '4544996286', 'ELYESER GABRIAN OLIVEIRA NUNES', 8),
(233, '4501373066', 'GABRIEL ANTONIO CERVELIN CANDIDO', 8),
(234, '4549091001', 'GABRIEL ANTUNES RABELLO', 8),
(235, '4501099207', 'GABRIEL DELFINO MORAES', 8),
(236, '4544723590', 'GABRIEL SAVIO PEREIRA', 8),
(237, '4549091060', 'GIOVANA ALVES DE OLIVEIRA', 8),
(238, '4540487735', 'HIAGO MACHADO DE SOUZA', 8),
(239, '4549090447', 'ISAAC ALEXSANDER PEREIRA PESSOA', 8),
(240, '4549085710', 'ISABELI SANTIAGO DE SOUZA', 8),
(241, '4501392958', 'JOAO VITOR HARDT MONTEIRO', 8),
(242, '4544435420', 'JOSUE RAMOS DA ROSA', 8),
(243, '4544829053', 'KAUAN PAIANO ROSSA', 8),
(244, '4549091222', 'LETICIA VOCIEKOSKI DOS SANTOS', 8),
(245, '4549079621', 'LUCAS DE BITHENCOURT FLORÊNCIO', 8),
(246, '4544698927', 'LUIZ GUSTAVO NUNES NAPOLEAO', 8),
(247, '4549084285', 'MARIA CLARA PLACIDO MAGAGNIN', 8),
(248, '4549091532', 'MARIA EDUARDA DA SILVA DE SOUZA', 8),
(249, '4544534215', 'NIKOLAS STAHLER PRA', 8),
(250, '4544561441', 'PEDRO HENRIQUE CORREA RONCHI', 8),
(251, '4540500782', 'RAFAELA DE MORAES PAGANINI', 8),
(252, '4549087527', 'RAISSA FELISBERTO LIMAS', 8),
(253, '4549079702', 'VINICIUS FELISBERTO VALVASSORI', 8);

-- --------------------------------------------------------

--
-- Table structure for table `atrasos`
--

CREATE TABLE `atrasos` (
  `id` int(11) NOT NULL,
  `codaluno` int(11) NOT NULL,
  `data_atraso` date NOT NULL,
  `motivo` text NOT NULL,
  `hora_atraso` time DEFAULT NULL,
  `qtd_atraso` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atrasos`
--

INSERT INTO `atrasos` (`id`, `codaluno`, `data_atraso`, `motivo`, `hora_atraso`, `qtd_atraso`) VALUES
(1, 2, '2023-11-06', 'Teste de motivo', '19:56:07', 1),
(2, 30, '2023-11-07', 'Teste', '20:16:30', 2),
(3, 244, '2023-11-07', 'Teste de atraso', '20:51:03', 3),
(4, 27, '2023-11-07', 'Fumando um breu', '13:24:55', 1),
(5, 2, '2023-11-07', 'Orando abencoadinha!!!!', '13:25:54', 2),
(64, 207, '2023-11-11', '41', '16:42:12', NULL),
(65, 207, '2023-11-11', '53', '16:42:18', NULL),
(66, 207, '2023-11-11', '25', '16:42:24', NULL),
(67, 207, '2023-11-11', 'w4', '16:42:36', NULL),
(68, 207, '2023-11-11', '34', '16:44:48', NULL),
(69, 207, '2023-11-11', '5', '16:45:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `num_curso` int(20) NOT NULL,
  `nome_curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id_curso`, `num_curso`, `nome_curso`) VALUES
(1, 251, 'Informática'),
(2, 252, 'Informática'),
(3, 253, 'Informática'),
(4, 254, 'Informática'),
(5, 351, 'Informática'),
(6, 352, 'Informática'),
(7, 353, 'Informática'),
(8, 354, 'Informática');

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome_funcionario`) VALUES
(7, 'Zaira'),
(9, 'Murilo'),
(12, 'Irruan Rodrigues Santiago');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(200) NOT NULL,
  `mail_usuario` varchar(150) NOT NULL,
  `senha_usuario` varchar(60) NOT NULL,
  `nivel_usuario` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES
(26, 'administrador', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Ativo'),
(27, 'Carmela', 'carmela@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Ativo'),
(28, 'Zoraide', 'zo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'Inativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `cursoaluno` (`cursoaluno`);

--
-- Indexes for table `atrasos`
--
ALTER TABLE `atrasos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codaluno` (`codaluno`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `atrasos`
--
ALTER TABLE `atrasos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`cursoaluno`) REFERENCES `cursos` (`id_curso`);

--
-- Constraints for table `atrasos`
--
ALTER TABLE `atrasos`
  ADD CONSTRAINT `atrasos_ibfk_1` FOREIGN KEY (`codaluno`) REFERENCES `alunos` (`id_aluno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
