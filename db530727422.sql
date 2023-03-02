-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Hôte : db530727422.db.1and1.com
-- Généré le : mer. 04 mai 2022 à 14:02
-- Version du serveur : 5.5.60-0+deb7u1-log
-- Version de PHP : 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db530727422`
--

-- --------------------------------------------------------

--
-- Structure de la table `audit`
--

CREATE TABLE `audit` (
  `id_operation` int(11) NOT NULL,
  `operation` varchar(100) NOT NULL,
  `user` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date_op` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `audit`
--

INSERT INTO `audit` (`id_operation`, `operation`, `user`, `username`, `date_op`) VALUES
(1, ' a ajouter un Responsable :  Ahmed Mohamed', 'H4512', 'Admin', '2016-01-15'),
(2, ' a ajouter un Responsable :  Amin Amal', 'H4512', 'Admin', '2016-01-15'),
(3, ' a ajouter un Responsable :  karem karem', 'H4512', 'Admin', '2016-01-15'),
(4, ' a ajouter un Responsable :  Ismael Ismael', 'H4512', 'Admin', '2016-01-16'),
(5, ' a ajouter  professeur :  hossein hossam', '12345', 'Ahmed', '2016-01-16'),
(6, ' a ajouter  professeur :  jamel jamal', '12345', 'Ahmed', '2016-01-16'),
(7, ' a ajoute un nouveau etudiant :  khaled jolim', '12345', 'Ahmed', '2016-01-16'),
(8, ' a recu 5000 DH espece paye par  :  khaled jolim', '12345', 'Ahmed', '2016-01-16'),
(9, ' a ajoute un nouveau etudiant :  kamal kameli', '12345', 'Ahmed', '2016-01-16'),
(10, ' a ajoute un nouveau etudiant :  amena kamel', '12345', 'Ahmed', '2016-01-16'),
(11, ' a ajoute une nouvelle module :  POO', '12345', 'Ahmed', '2016-01-16'),
(12, ' a ajoute une nouvelle module :  Base de Donnees', '12345', 'Ahmed', '2016-01-16'),
(13, ' a ajoute une nouvelle module :  Systeme', '12345', 'Ahmed', '2016-01-16'),
(14, ' a ajoute une nouvelle module :  TEC', '12345', 'Ahmed', '2016-01-16'),
(15, ' a ajoute une nouvelle module :  UIT', '12345', 'Ahmed', '2016-01-16'),
(16, ' a ajoute une nouvelle module :  GEO', '12345', 'Ahmed', '2016-01-16'),
(17, ' a ajoute une nouvelle matiÃ¨re :  C++', '12345', 'Ahmed', '2016-01-16'),
(18, ' a ajoute une nouvelle matiÃ¨re :  JAVA', '12345', 'Ahmed', '2016-01-16'),
(19, ' a ajoute une nouvelle matiÃ¨re :  SQL', '12345', 'Ahmed', '2016-01-16'),
(20, ' a ajoute une nouvelle matiÃ¨re :  PL/SQL', '12345', 'Ahmed', '2016-01-16'),
(21, ' a ajoute une nouvelle matiÃ¨re :  Administration', '12345', 'Ahmed', '2016-01-16'),
(22, ' a ajoute une nouvelle matiÃ¨re :  programmation', '12345', 'Ahmed', '2016-01-16'),
(23, ' a ajoute une nouvelle matiÃ¨re :  projet', '12345', 'Ahmed', '2016-01-16'),
(24, ' a ajoute une nouvelle matiÃ¨re :  uiPro', '12345', 'Ahmed', '2016-01-16'),
(25, ' a ajoute une nouvelle matiÃ¨re :  GEOInformatique', '12345', 'Ahmed', '2016-01-16'),
(26, ' a ajoute un nouveau etudiant :  nohaila samed', '4598', 'Ismael', '2016-01-16'),
(27, ' a ajoute un nouveau etudiant :  hamed Fouad', '4598', 'Ismael', '2016-01-16'),
(28, ' a supprimer professeur :  Ahmed Mohamed', '4598', 'Ismael', '2016-01-16'),
(29, ' a supprimer professeur :  Ahmed Mohamed', '4598', 'Ismael', '2016-01-16'),
(30, ' a supprimer professeur :  hossein hossam', '4598', 'Ismael', '2016-01-16'),
(31, ' a ajoute une nouvelle module :  POO', '4598', 'Ismael', '2016-01-17'),
(32, ' a ajoute une nouvelle matiÃ¨re :  C++', '4598', 'Ismael', '2016-01-17'),
(33, ' a ajoute une nouvelle matiÃ¨re :  JAVA', '4598', 'Ismael', '2016-01-17'),
(34, ' a ajoute une nouvelle matiÃ¨re :  PHP5', '4598', 'Ismael', '2016-01-17'),
(35, ' a ajoute une nouvelle module :  POO', '12345', 'Ahmed', '2016-01-17'),
(36, ' a ajoute une nouvelle matiÃ¨re :  C#', '12345', 'Ahmed', '2016-01-17'),
(37, ' a ajoute une nouvelle matiÃ¨re :  RUBY', '12345', 'Ahmed', '2016-01-17'),
(38, ' a supprimer professeur :  hossein hossam', '4598', 'Ismael', '2016-01-17'),
(39, ' a supprimer professeur :  hossein hossam', '12345', 'Ahmed', '2016-01-18'),
(40, ' a supprimer professeur :  hossein hossam', '12345', 'Ahmed', '2016-01-18'),
(41, ' a supprimer professeur :  hossein hossam', '12345', 'Ahmed', '2016-01-18'),
(42, ' a ajoute un nouvel evenement :  GALA', 'H4512', 'Admin', '2016-01-18'),
(43, ' a ajoute un nouvel evenement :  GALA', 'H4512', 'Admin', '2016-01-18'),
(44, ' a supprimer professeur :  Ahmed Mohamed', '4598', 'Ismael', '2016-01-18'),
(45, ' Vous avez supprime Formation :  dca 2015-10-01 Industrie', 'H4512', 'Admin', '2016-02-18'),
(46, ' a ajouter un Responsable :  BADIR Hassan', 'H4512', 'Admin', '2016-02-18'),
(47, ' Vous avez supprime Formation :  dcess 0000-00-00 Informatique DÃ©cisi', 'H4512', 'Admin', '2016-02-18'),
(48, ' Vous avez supprime Formation :  dcess 2015-10-01 electronique', 'H4512', 'Admin', '2016-02-18'),
(49, ' Vous avez supprime Formation :  dcess 2015-10-01 energetique', 'H4512', 'Admin', '2016-02-18'),
(50, ' a ajoute un nouveau etudiant :  Aptidon Djama   Moussa ', 'C622421', 'BADIR', '2016-03-08'),
(51, ' a ajoute un nouveau etudiant :   LAHLOU    chakib ', 'C622421', 'BADIR', '2016-03-08'),
(52, ' a ajoute une nouvelle module :  MSIIDE1', 'C622421', 'BADIR', '2016-03-17'),
(53, ' a ajoute une nouvelle module :  MSIIDE2', 'C622421', 'BADIR', '2016-03-17'),
(54, ' a ajoute une nouvelle module :  MSIIDE3', 'C622421', 'BADIR', '2016-03-17'),
(55, ' a ajoute une nouvelle module :  MSIIDE4', 'C622421', 'BADIR', '2016-03-17'),
(56, ' a ajoute une nouvelle module :  M1', 'C622421', 'BADIR', '2016-03-17'),
(57, ' a ajoute une nouvelle module :  M2', 'C622421', 'BADIR', '2016-03-17'),
(58, ' a ajoute une nouvelle module :  M3', 'C622421', 'BADIR', '2016-03-17'),
(59, ' a ajoute une nouvelle module :  M4', 'C622421', 'BADIR', '2016-03-17'),
(60, ' a ajoute une nouvelle module :  M5', 'C622421', 'BADIR', '2016-03-17'),
(61, ' a ajoute une nouvelle module :  M6', 'C622421', 'BADIR', '2016-03-17'),
(62, ' a ajoute une nouvelle module :  M7', 'C622421', 'BADIR', '2016-03-17'),
(63, ' a ajoute une nouvelle module :  M8', 'C622421', 'BADIR', '2016-03-17'),
(64, ' a ajoute une nouvelle module :  M9', 'C622421', 'BADIR', '2016-03-17'),
(65, ' a ajoute une nouvelle module :  Stage', 'C622421', 'BADIR', '2016-03-17'),
(66, ' a ajoute une nouvelle module :  Etape1', 'C622421', 'BADIR', '2016-03-17'),
(67, ' a ajoute une nouvelle module :  Etape2', 'C622421', 'BADIR', '2016-03-17'),
(68, ' a ajoute une nouvelle module :  Etape3', 'C622421', 'BADIR', '2016-03-17'),
(69, ' a ajoute une nouvelle module :  Etape4', 'C622421', 'BADIR', '2016-03-17'),
(70, ' a ajoute une nouvelle module :  Etape5', 'C622421', 'BADIR', '2016-03-17'),
(71, ' a ajoute une nouvelle module :  Etape6', 'C622421', 'BADIR', '2016-03-17'),
(72, ' a ajoute une nouvelle matiÃ¨re :  BD et SQL Oracle', 'C622421', 'BADIR', '2016-03-17'),
(73, ' a ajoute une nouvelle matiÃ¨re :  Administration Systeme', 'C622421', 'BADIR', '2016-03-17'),
(74, ' a ajoute une nouvelle matiÃ¨re :  Reseau 1', 'C622421', 'BADIR', '2016-03-17'),
(75, ' a ajoute une nouvelle matiÃ¨re :  Optim et PLSQL', 'C622421', 'BADIR', '2016-03-17'),
(76, ' a ajoute une nouvelle matiÃ¨re :  Anglais Scientifique', 'C622421', 'BADIR', '2016-03-17'),
(77, ' a ajoute une nouvelle matiÃ¨re :  Programmation Web PHP', 'C622421', 'BADIR', '2016-03-17'),
(78, ' a ajoute une nouvelle matiÃ¨re :  Theorie des Graphes', 'C622421', 'BADIR', '2016-03-17'),
(79, ' a ajoute une nouvelle matiÃ¨re :  Administration Oracle12c', 'C622421', 'BADIR', '2016-03-17'),
(80, ' a ajoute une nouvelle matiÃ¨re :  ERP_PGI', 'C622421', 'BADIR', '2016-03-17'),
(81, ' a ajoute une nouvelle matiÃ¨re :  POO et Java', 'C622421', 'BADIR', '2016-03-17'),
(82, ' a ajoute une nouvelle matiÃ¨re :  UML-SCRUM', 'C622421', 'BADIR', '2016-03-17'),
(83, ' a ajoute une nouvelle matiÃ¨re :  Reseau 2', 'C622421', 'BADIR', '2016-03-17'),
(84, ' a ajouter  professeur :  BADIR Hassan', 'C622421', 'BADIR', '2016-03-17'),
(85, ' a ajouter  professeur :  Amechnoue Khalid', 'C622421', 'BADIR', '2016-03-17'),
(86, ' a ajouter  professeur :  FISSOUNE Rachida', 'C622421', 'BADIR', '2016-03-17'),
(87, ' a ajouter  professeur :  BOUCHKAREN Said', 'C622421', 'BADIR', '2016-03-17'),
(88, ' a ajouter  professeur :  BARHOUNE Youssef', 'C622421', 'BADIR', '2016-03-17'),
(89, ' a ajouter  professeur :  IBN AHRACH Sara', 'C622421', 'BADIR', '2016-03-17'),
(90, ' a ajouter  professeur :  AHAJJAM Sara', 'C622421', 'BADIR', '2016-03-17'),
(91, ' a ajouter  professeur :  Kudagba Florent Kunale', 'C622421', 'BADIR', '2016-03-17'),
(92, ' a ajouter  professeur :  Kudagba Florent', 'C622421', 'BADIR', '2016-03-17'),
(93, ' a ajoute un nouveau etudiant :  SELMANI Chakir', 'C622421', 'BADIR', '2016-03-26'),
(94, ' a ajoute un nouveau etudiant :  Et-tahiri Yassine', 'C622421', 'BADIR', '2016-03-26'),
(95, ' a ajoute un nouveau etudiant :  GEULAI Youssef', 'C622421', 'BADIR', '2016-03-26'),
(96, ' a ajoute un nouveau etudiant :  HAJJAJ Mohammed', 'C622421', 'BADIR', '2016-03-26'),
(97, ' a ajoute un nouveau etudiant :  EL KHANTOUTI Imad Eddine', 'C622421', 'BADIR', '2016-03-26'),
(98, ' a ajoute un nouveau etudiant :  SOUAL FAISSAL', 'C622421', 'BADIR', '2016-03-26'),
(99, ' a ajoute un nouveau etudiant :  EL KIRI Hamza', 'C622421', 'BADIR', '2016-03-26'),
(100, ' a ajoute un nouvel evenement :  Seminaire: SecuritÃ© de donnÃ©es dans le cloud computing', 'C622421', 'BADIR', '2016-03-26'),
(101, ' a ajoute un nouveau etudiant :  Agbalou Ahmed', 'C622421', 'BADIR', '2016-03-26'),
(102, ' a ajoute un nouveau etudiant :  HASSOUN Ayoub', 'C622421', 'BADIR', '2016-03-26'),
(103, ' a ajoute un nouveau etudiant :  Akudad Mohamed', 'C622421', 'BADIR', '2016-03-26'),
(104, ' a recu 10000 DH par cheque paye par  :  Aptidon Djama   Moussa ', 'C622421', 'BADIR', '2016-03-30'),
(105, ' a recu 13000 DH par cheque paye par  :  EL KIRI Hamza', 'C622421', 'BADIR', '2016-03-30'),
(106, ' a recu 10000 DH par cheque paye par  :  HAJJAJ Mohammed', 'C622421', 'BADIR', '2016-03-30'),
(107, ' a recu 15000 DH par cheque paye par  :  SOUAL FAISSAL', 'C622421', 'BADIR', '2016-03-30'),
(108, ' a recu 10000 DH par cheque paye par  :  Agbalou Ahmed', 'C622421', 'BADIR', '2016-03-30'),
(109, ' a ajoute un nouveau etudiant :   ZIDANE  Oulaya', 'ZG29679', 'FISSOUNE', '2016-03-31'),
(110, ' a ajouter un Responsable :  MOUSSA AHmed', 'H4512', 'Admin', '2016-04-06'),
(111, ' a ajouter un Responsable :  RESPO RESPO', 'H4512', 'Admin', '2016-04-14'),
(112, ' a ajoute un nouveau etudiant :  AHMED AHMED', '99995132', 'RESPO', '2016-04-14'),
(113, ' a ajoute un nouveau etudiant :  AHMEDI AHMEDI', '99995132', 'RESPO', '2016-04-15'),
(114, ' a ajoute un nouveau etudiant :  KAMEL KAMEL', '99995132', 'RESPO', '2016-04-15'),
(115, ' a recu 2200 DH espece paye par  :  AHMEDI AHMEDI', '99995132', 'RESPO', '2016-04-15'),
(116, ' a recu 15220 DH prit en charge  de  :  AHMEDI AHMEDI', '99995132', 'RESPO', '2016-04-15'),
(117, ' a recu 34780 DH prit en charge  de  :  AHMEDI AHMEDI', '99995132', 'RESPO', '2016-04-15'),
(118, ' a ajouter un Responsable :  respo respo', 'H4512', 'Admin', '2016-06-15'),
(119, ' Vous avez supprime Formation :  dcess 2016-04-01 Info', 'H4512', 'Admin', '2016-06-15'),
(120, ' Vous avez supprime Formation :  dca 2015-10-01 informatique', 'H4512', 'Admin', '2016-06-15'),
(121, ' a ajouter un Responsable :  zaidi zaidi', 'H4512', 'Admin', '2016-06-15'),
(122, ' a ajoute un nouveau etudiant :  ahmed ahmed', '123456', 'zaidi', '2016-06-15'),
(123, ' a ajoute une nouvelle module :  Programmation Systeme', '123456', 'zaidi', '2016-06-15'),
(124, ' a ajoute une nouvelle module :  POO', '123456', 'zaidi', '2016-06-15'),
(125, ' a ajoute une nouvelle module :  BDComplexe', '123456', 'zaidi', '2016-06-15'),
(126, ' a ajoute une nouvelle module :  Statistique', '123456', 'zaidi', '2016-06-15'),
(127, ' a ajoute une nouvelle matiÃ¨re :  C in Linux', '123456', 'zaidi', '2016-06-15'),
(128, ' a ajoute une nouvelle matiÃ¨re :  Java', '123456', 'zaidi', '2016-06-15'),
(129, ' a ajoute une nouvelle matiÃ¨re :  C#', '123456', 'zaidi', '2016-06-15'),
(130, ' a ajoute une nouvelle matiÃ¨re :  stochastique', '123456', 'zaidi', '2016-06-15'),
(131, ' a ajoute un nouveau etudiant :  estudiante1 estudiante1', '123456', 'zaidi', '2016-06-15'),
(132, ' Vous avez supprime Formation :  dcess 2016-06-30 bioInfor', 'H4512', 'Admin', '2016-12-02'),
(133, ' Vous avez supprime Formation :  dcess 2016-10-01 Informatique', 'H4512', 'Admin', '2017-01-20'),
(134, ' a ajouter  professeur :  Attariuas Hicham ', 'C622421', 'BADIR', '2017-01-20'),
(135, ' a ajoute une nouvelle module :  Decisionnel_BI', 'C622421', 'BADIR', '2017-01-20'),
(136, ' a ajoute une nouvelle module :  Programmation_AvancÃ©e', 'C622421', 'BADIR', '2017-01-20'),
(137, ' a ajoute une nouvelle module :  Cloud Computing et SÃ©curitÃ©', 'C622421', 'BADIR', '2017-01-20'),
(138, ' a ajoute une nouvelle matiÃ¨re :  Datawarehouse', 'C622421', 'BADIR', '2017-01-20'),
(139, ' a ajoute une nouvelle matiÃ¨re :  Data Mining', 'C622421', 'BADIR', '2017-01-20'),
(140, ' a ajoute une nouvelle matiÃ¨re :  Big Data', 'C622421', 'BADIR', '2017-01-20'),
(141, ' a ajoute une nouvelle matiÃ¨re :  Reseau II', 'C622421', 'BADIR', '2017-01-20'),
(142, ' a ajoute une nouvelle matiÃ¨re :  Securite Info', 'C622421', 'BADIR', '2017-01-20'),
(143, ' a ajoute une nouvelle matiÃ¨re :  Cloud Computing', 'C622421', 'BADIR', '2017-01-20'),
(144, ' a ajoute un nouveau etudiant :   Aptidon Djama    Moussa ', 'C622421', 'BADIR', '2017-01-20'),
(145, ' a mise a jour les information  du :   Aptidon Djama    Moussa ', 'C622421', 'BADIR', '2017-01-20'),
(146, ' a mise a jour les information  du :   Aptidon Djama    Moussa ', 'C622421', 'BADIR', '2017-01-20'),
(147, ' a recu 10000 DH espece paye par  :   Aptidon Djama    Moussa ', 'C622421', 'BADIR', '2017-01-20'),
(148, ' a ajoute un nouveau etudiant :   SELMANI   Chakir ', 'C622421', 'BADIR', '2017-01-20'),
(149, ' a recu 10000 DH espece paye par  :   SELMANI   Chakir ', 'C622421', 'BADIR', '2017-01-20'),
(150, ' a ajoute un nouveau etudiant :   Et-tahiri   Yassine', 'C622421', 'BADIR', '2017-01-20'),
(151, ' a recu 13000 DH espece paye par  :   Et-tahiri   Yassine', 'C622421', 'BADIR', '2017-01-20'),
(152, ' a recu 12000 DH espece paye par  :   Et-tahiri   Yassine', 'C622421', 'BADIR', '2017-01-20'),
(153, ' a ajoute un nouveau etudiant :  GEULAI Youssef', 'C622421', 'BADIR', '2017-01-20'),
(154, ' a mise a jour les information  du :  GEULAI Youssef', 'C622421', 'BADIR', '2017-01-20'),
(155, ' a recu 10000 DH espece paye par  :  GEULAI Youssef', 'C622421', 'BADIR', '2017-01-20'),
(156, ' a recu 10000 DH espece paye par  :  GEULAI Youssef', 'C622421', 'BADIR', '2017-01-20'),
(157, ' a ajoute un nouveau etudiant :   HAJJAJ   Mohammed ', 'C622421', 'BADIR', '2017-01-20'),
(158, ' a mise a jour les information  du :   HAJJAJ   Mohammed ', 'C622421', 'BADIR', '2017-01-20'),
(159, ' a recu 10000 DH espece paye par  :   HAJJAJ   Mohammed ', 'C622421', 'BADIR', '2017-01-20'),
(160, ' a ajoute un nouveau etudiant :  EL KHANTOUTI   Imad Eddine ', 'C622421', 'BADIR', '2017-01-20'),
(161, ' a mise a jour les information  du :  EL KHANTOUTI   Imad Eddine ', 'C622421', 'BADIR', '2017-01-20'),
(162, ' a recu 10000 DH espece paye par  :  EL KHANTOUTI   Imad Eddine ', 'C622421', 'BADIR', '2017-01-20'),
(163, ' a recu 10000 DH espece paye par  :  EL KHANTOUTI   Imad Eddine ', 'C622421', 'BADIR', '2017-01-20'),
(164, ' a ajoute un nouveau etudiant :   SOUAL    Faissal ', 'C622421', 'BADIR', '2017-01-20'),
(165, ' a recu 10000 DH par cheque paye par  :   SOUAL    Faissal ', 'C622421', 'BADIR', '2017-01-20'),
(166, ' a recu 10000 DH par cheque paye par  :   HAJJAJ   Mohammed ', 'C622421', 'BADIR', '2017-01-20'),
(167, ' a recu 10000 DH par cheque paye par  :   HAJJAJ   Mohammed ', 'C622421', 'BADIR', '2017-01-20'),
(168, ' a recu 15000 DH par cheque paye par  :   SOUAL    Faissal ', 'C622421', 'BADIR', '2017-01-20'),
(169, ' a recu 15000 DH par cheque paye par  :   SOUAL    Faissal ', 'C622421', 'BADIR', '2017-01-20'),
(170, ' a recu 10000 DH par cheque paye par  :   SOUAL    Faissal ', 'C622421', 'BADIR', '2017-01-20'),
(171, ' a ajoute un nouveau etudiant :  a s', 'C622421', 'BADIR', '2018-03-09'),
(172, ' a recu 10000 DH prit en charge  de  :  a s', 'C622421', 'BADIR', '2018-03-09'),
(173, ' a recu 12000 DH espece paye par  :  a s', 'C622421', 'BADIR', '2018-03-09'),
(174, ' a ajoute une nouvelle matiÃ¨re :  dsdsd', 'C622421', 'BADIR', '2018-05-29'),
(175, ' Vous avez supprime Formation :  dcess 2015-10-01 Informatique', 'H4512', 'Admin', '2018-06-12'),
(176, ' Vous avez supprime Formation :  dcess 2016-10-01 Informatique: securi', 'H4512', 'Admin', '2018-06-12'),
(177, ' a ajoute un nouveau etudiant :  ZEGGAF Yassine', 'C622421', 'BADIR', '2018-06-12'),
(178, ' a recu 15000 DH espece paye par  :  ZEGGAF Yassine', 'C622421', 'BADIR', '2018-06-13'),
(179, ' a ajoute une nouvelle module :  BD', 'C622421', 'BADIR', '2018-06-14'),
(180, ' a ajoute une nouvelle matiÃ¨re :  BDR', 'C622421', 'BADIR', '2018-06-14'),
(181, ' a ajouter  professeur :  Fissoune rachida', 'C622421', 'BADIR', '2018-06-14'),
(182, ' a ajouter un Responsable :  BADIR5 Hassan2', 'H4512', 'Admin', '2018-11-05'),
(183, ' Vous avez supprime Formation :  dcess 2018-10-30 IngÃ©nierie Informat', 'H4512', 'Admin', '2018-11-05'),
(184, ' a recu 10000 DH espece paye par  :  ZEGGAF Yassine', 'C622421', 'BADIR', '2019-06-11'),
(185, ' a ajouter un Responsable :  Badir Hassan', 'H4512', 'Admin', '2021-12-02'),
(186, ' a ajouter un Responsable :  Badir Hasan', 'H4512', 'Admin', '2021-12-02'),
(187, ' Vous avez supprime Formation :  dcess 2015-10-01 elc', 'H4512', 'Admin', '2021-12-02'),
(188, ' Vous avez supprime Formation :  dcess 2014-10-01 Informatique', 'H4512', 'Admin', '2021-12-02'),
(189, ' a mise a jour les information  du :  ZEGGAF Yassine', 'C622421', 'BADIR', '2022-05-04'),
(190, ' a ajoute une nouvelle module :  BD-WEB', 'C622421-2', 'BADIR5', '2022-05-04'),
(191, ' a ajoute une nouvelle matiÃ¨re :  PHP', 'C622421-2', 'BADIR5', '2022-05-04'),
(192, ' a ajoute une nouvelle matiÃ¨re :  BD SQL', 'C622421-2', 'BADIR5', '2022-05-04'),
(193, ' a recu 12500 DH espece paye par  :  ZEGGAF Yassine', 'C622421', 'BADIR', '2022-05-04');

-- --------------------------------------------------------

--
-- Structure de la table `authentification`
--

CREATE TABLE `authentification` (
  `login` varchar(20) NOT NULL,
  `mdp` varchar(700) NOT NULL,
  `profil` varchar(1) NOT NULL,
  `cin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `authentification`
--

INSERT INTO `authentification` (`login`, `mdp`, `profil`, `cin`) VALUES
('a', 'e10adc3949ba59abbe56e057f20f883e', 'e', '111'),
('Admin', '202cb962ac59075b964b07152d234b70', 'a', 'H4512'),
('AHAJJAM', 'c9f0f895fb98ab9159f51fd0297e236d', 'p', '8'),
('Ahmed', '202cb962ac59075b964b07152d234b70', 'r', '12345'),
('Amechnoue', 'c6f057b86584942e415435ffb1fa93d4', 'p', '000'),
('Amin', '202cb962ac59075b964b07152d234b70', 'r', '1245'),
('Attariuas', 'e10adc3949ba59abbe56e057f20f883e', 'p', 'K1111'),
('BADIR', '202cb962ac59075b964b07152d234b70', 'r', 'C622421'),
('BADIR5', '202cb962ac59075b964b07152d234b70', 'r', 'C622421-2'),
('BARHOUNE', 'cfcd208495d565ef66e7dff9f98764da', 'p', '0'),
('BOUCHKAREN', 'b4b147bc522828731f1a016bfa72c073', 'p', '00'),
('FISSOUNE', 'e0a0c52974ccb672ebf1931b0a3edead', 'r', 'ZG29679'),
('hossein', '202cb962ac59075b964b07152d234b70', 'p', '5693'),
('IBN AHRACH', 'ac627ab1ccbdb62ec96e702f07f6425b', 'p', '99'),
('Ismael', '202cb962ac59075b964b07152d234b70', 'r', '4598'),
('jamel', '202cb962ac59075b964b07152d234b70', 'p', '12587'),
('karem', '202cb962ac59075b964b07152d234b70', 'r', '4568'),
('Kudagba', 'c9f0f895fb98ab9159f51fd0297e236d', 'p', '8'),
('MOUSSA', 'ed20a959d410ccd843d9e1dfcee04228', 'r', 'a12'),
('RESPO', '9ef06e2e651d680e276c4ca6ee901f37', 'r', '99995132'),
('zaidi', 'e10adc3949ba59abbe56e057f20f883e', 'r', '123456'),
('ZEGGAF', 'e10adc3949ba59abbe56e057f20f883e', 'e', 'K501723');

-- --------------------------------------------------------

--
-- Structure de la table `cheque`
--

CREATE TABLE `cheque` (
  `num_cheque` varchar(30) NOT NULL,
  `banque` varchar(30) NOT NULL,
  `scan` varchar(20) NOT NULL,
  `proprietaire` varchar(30) NOT NULL,
  `num_paiement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cheque`
--

INSERT INTO `cheque` (`num_cheque`, `banque`, `scan`, `proprietaire`, `num_paiement`) VALUES
('1', 'Attijari W', '../uploads_photo/adm', '2 cheques MAman', 19),
('2', 'Banque', '../uploads_photo/adm', 'lui', 20);

-- --------------------------------------------------------

--
-- Structure de la table `demande_attestation`
--

CREATE TABLE `demande_attestation` (
  `id_da` int(11) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `envoye` varchar(1) NOT NULL,
  `cin_respo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande_attestation`
--

INSERT INTO `demande_attestation` (`id_da`, `cin`, `envoye`, `cin_respo`) VALUES
(1, 'L556663', '0', '12345'),
(2, '12354', '0', '4598'),
(3, 'L556663', '0', '12345'),
(4, '12354', '0', '4598'),
(5, '12354', '0', '4598');

-- --------------------------------------------------------

--
-- Structure de la table `echeance`
--

CREATE TABLE `echeance` (
  `num` int(11) NOT NULL,
  `montant` double NOT NULL,
  `type` varchar(15) NOT NULL,
  `cin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `echeance`
--

INSERT INTO `echeance` (`num`, `montant`, `type`, `cin`) VALUES
(1, 5000, 'espece', '458862'),
(2, 10000, 'par cheque', ' 10RE48189'),
(3, 13000, 'par cheque', ' GM152703 '),
(6, 10000, 'par cheque', ' KB83717 '),
(7, 2200, 'espece', '8564'),
(8, 15220, ' prise en charg', '8564'),
(9, 34780, ' prise en charg', '8564'),
(10, 10000, 'espece', ' 10RE48189'),
(11, 10000, 'espece', ' GJ5888 '),
(12, 13000, 'espece', ' CD313062 '),
(13, 12000, 'espece', ' CD313062 '),
(14, 10000, 'espece', ' K458114 '),
(15, 10000, 'espece', ' K458114 '),
(17, 10000, 'espece', ' I681972 '),
(18, 10000, 'espece', ' I681972 '),
(20, 10000, 'par cheque', ' I683992 '),
(21, 10000, 'par cheque', ' I683992 '),
(23, 15000, 'par cheque', ' D992469 '),
(24, 10000, 'par cheque', ' D992469 '),
(25, 10000, ' prise en charg', '111'),
(26, 12000, 'espece', '111'),
(27, 15000, 'espece', 'K501723'),
(28, 10000, 'espece', 'K501723'),
(29, 12500, 'espece', 'K501723');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `CNE` varchar(20) NOT NULL,
  `CIN` varchar(12) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `LIEU_N` varchar(20) NOT NULL,
  `DATE_N` date NOT NULL,
  `SEXE` varchar(1) NOT NULL,
  `TYPE_BAC` varchar(10) NOT NULL,
  `DATE_BAC` varchar(10) NOT NULL,
  `TYPE_DIPLOME` varchar(20) NOT NULL,
  `date_diplome` varchar(10) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `ADRESSE` varchar(60) NOT NULL,
  `TEL` varchar(16) NOT NULL,
  `PHOTO` varchar(50) NOT NULL,
  `TYPE_FOR` varchar(6) NOT NULL,
  `DATE_DEBUT_FOR` date NOT NULL,
  `SPECIALITE_FOR` varchar(20) NOT NULL,
  `montant_for` double NOT NULL,
  `montant_rest` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`CNE`, `CIN`, `NOM`, `PRENOM`, `LIEU_N`, `DATE_N`, `SEXE`, `TYPE_BAC`, `DATE_BAC`, `TYPE_DIPLOME`, `date_diplome`, `EMAIL`, `ADRESSE`, `TEL`, `PHOTO`, `TYPE_FOR`, `DATE_DEBUT_FOR`, `SPECIALITE_FOR`, `montant_for`, `montant_rest`) VALUES
('00', '111', 'a', 's', 't', '1992-09-12', 'M', 'sc ', 'ffvg', 'Licence', '2012-2013', 'ghgh@ggg.copm', '', '', '../uploads_photo/000000025753.png', 'dcess', '2015-10-01', 'Informatique', 40000, 18000),
('', 'K501723', 'ZEGGAF', 'Yassine', 'Tanger', '1995-03-06', 'F', 'sc', '2000', 'Licence', '2015-2016', 'zeggaf@gmail.com', '', '', '../uploads_photo/', 'dcess', '2017-10-15', 'MSIIDE4', 37500, 0);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_archive`
--

CREATE TABLE `etudiant_archive` (
  `CNE` varchar(20) NOT NULL,
  `CIN` varchar(12) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `LIEU_N` varchar(20) NOT NULL,
  `DATE_N` date NOT NULL,
  `SEXE` varchar(1) NOT NULL,
  `TYPE_BAC` varchar(10) NOT NULL,
  `DATE_BAC` varchar(10) NOT NULL,
  `TYPE_DIPLOME` varchar(20) NOT NULL,
  `date_diplome` varchar(10) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `ADRESSE` varchar(60) NOT NULL,
  `TEL` varchar(16) NOT NULL,
  `PHOTO` varchar(50) NOT NULL,
  `TYPE_FOR` varchar(6) NOT NULL,
  `DATE_DEBUT_FOR` date NOT NULL,
  `SPECIALITE_FOR` varchar(20) NOT NULL,
  `montant_for` double NOT NULL,
  `montant_rest` double NOT NULL,
  `diplome` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant_archive`
--

INSERT INTO `etudiant_archive` (`CNE`, `CIN`, `NOM`, `PRENOM`, `LIEU_N`, `DATE_N`, `SEXE`, `TYPE_BAC`, `DATE_BAC`, `TYPE_DIPLOME`, `date_diplome`, `EMAIL`, `ADRESSE`, `TEL`, `PHOTO`, `TYPE_FOR`, `DATE_DEBUT_FOR`, `SPECIALITE_FOR`, `montant_for`, `montant_rest`, `diplome`) VALUES
('', ' 10RE48189 ', ' Aptidon Djama  ', ' Moussa ', 'DJIBOUTI', '1991-11-23', 'F', 'Sc ex', '2011', 'Licence', '2015', 'aptidon.djama@gmail.com', '', '0633438601', '../uploads_photo/aptidon.JPG', 'dcess', '2015-10-01', 'Informatique', 40000, 30000, 1),
('', ' CD313062 ', ' Et-tahiri  ', 'Yassine', 'OUARZAZATE', '1989-01-02', 'M', 'Sc. Ex', '2009', 'Licence', '2014', 'ettahiri.yassine@gmail.com', '', '0611425743', '../uploads_photo/Silhouette-homme.png', 'dcess', '2015-10-01', 'Informatique', 37500, 12500, 1),
('', ' D992469 ', ' SOUAL  ', ' Faissal ', 'Meknes', '1989-11-04', 'M', 'Sc. Ex', '2011', 'Licence', '2015', 'faissal.soual472@gmail.com', '', '0664039012', '../uploads_photo/bicon_study.png', 'dcess', '2015-10-01', 'Informatique', 35000, -15000, 1),
('', ' GJ5888 ', ' SELMANI ', ' Chakir ', 'Lamrabih Sidi Kacem', '1989-01-01', 'M', 'Sc ex', ' Chakir', 'Licence', '2012', 'chakir.selmani@gmail.com', '', '0618082822', '../uploads_photo/H.png', 'dcess', '2015-10-01', 'Informatique', 37500, 27500, 1),
('', ' I681972 ', 'EL KHANTOUTI ', ' Imad Eddine ', 'Sidi Jaber Beni Mell', '1990-02-10', 'F', 'Sc. Ex', '2008', 'Licence', '2014', 'i.elkhantouti@gmail.com', '', '0661183287', '../uploads_photo/H.png', 'dcess', '2015-10-01', 'Informatique', 37500, 17500, 1),
('', ' I683992 ', ' HAJJAJ ', ' Mohammed ', 'Bradia fquih bensale', '1989-08-23', 'F', 'Sc. Ex', '2009', 'Licence', '2013', 'm.hajjaj@gmail.com', '', '0678137030', '../uploads_photo/b.JPG', 'dcess', '2015-10-01', 'Informatique', 37500, 7500, 1),
('', ' K458114 ', 'GEULAI', 'Youssef', 'Tanger', '1990-03-29', 'F', 'Sc. Ex', '2008', 'Licence', '2015', 'jauzzef@gmail.com', '', '0600750768', '../uploads_photo/bicon_study.png', 'dcess', '2015-10-01', 'Informatique', 37500, 17500, 1);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_evnmt` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `date_event` date NOT NULL,
  `description` varchar(700) NOT NULL,
  `photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evnmt`, `titre`, `date_event`, `description`, `photo`) VALUES
(1, 'GALA', '2016-01-15', 'Soire d\'integration, soyez nombreux!', '../uploads_photo/4767_universe.jpg'),
(2, 'GALA', '2016-01-15', 'Soire d\'integration, soyez nombreux!', '../uploads_photo/4767_universe.jpg'),
(3, 'Seminaire: SecuritÃ©', '2016-04-02', 'Intervenant: Sara Rhazlane et Amina El Ouazzani', '../uploads_photo/cyber.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `DATE_DEBUT` date NOT NULL,
  `DATE_FIN` date NOT NULL,
  `SPECIALITE` varchar(20) NOT NULL,
  `RESPONSABLE` varchar(30) NOT NULL,
  `PRE_REQUIS` varchar(200) NOT NULL,
  `LIEN_WEB` varchar(60) NOT NULL,
  `TYPE` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`DATE_DEBUT`, `DATE_FIN`, `SPECIALITE`, `RESPONSABLE`, `PRE_REQUIS`, `LIEN_WEB`, `TYPE`) VALUES
('2016-06-23', '2016-09-15', 'inform', '123456', 'nothing', 'bioInfo', 'dca'),
('2017-10-15', '2019-08-31', 'MSIIDE4', 'C622421', 'Bac+3', 'msiide.ensa-learning.com', 'dcess'),
('2018-10-30', '2020-10-29', 'Informatique', 'C622421-2', 'BD et Reseau', 'http://msiide.ensa-learning.com', 'dcess'),
('2021-11-05', '2023-08-31', 'Informatique sÃ©curi', 'C622124', 'BD, Algo', 'msiide.ensa-learning.com', 'dcess');

-- --------------------------------------------------------

--
-- Structure de la table `form_module`
--

CREATE TABLE `form_module` (
  `NUM_MODULE` int(11) NOT NULL,
  `DATE_DEBUT` date NOT NULL,
  `TYPE` varchar(6) NOT NULL,
  `SPECIALITE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `form_module`
--

INSERT INTO `form_module` (`NUM_MODULE`, `DATE_DEBUT`, `TYPE`, `SPECIALITE`) VALUES
(1, '2015-10-01', 'dcess', 'energetique'),
(2, '2015-10-01', 'dca', 'informatique'),
(3, '2015-10-01', 'dcess', 'Informatique'),
(4, '2015-10-01', 'dcess', 'Informatique'),
(5, '2015-10-01', 'dcess', 'Informatique'),
(6, '2015-10-01', 'dcess', 'Informatique'),
(7, '2015-10-01', 'dcess', 'Informatique'),
(8, '2015-10-01', 'dcess', 'Informatique'),
(9, '2015-10-01', 'dcess', 'Informatique'),
(10, '2015-10-01', 'dcess', 'Informatique'),
(11, '2015-10-01', 'dcess', 'Informatique'),
(12, '2015-10-01', 'dcess', 'Informatique'),
(13, '2015-10-01', 'dcess', 'Informatique'),
(14, '2015-10-01', 'dcess', 'Informatique'),
(15, '2015-10-01', 'dcess', 'Informatique'),
(16, '2015-10-01', 'dcess', 'Informatique'),
(17, '2015-10-01', 'dcess', 'Informatique'),
(18, '2015-10-01', 'dcess', 'Informatique'),
(19, '2015-10-01', 'dcess', 'Informatique'),
(20, '2015-10-01', 'dcess', 'Informatique'),
(21, '2015-10-01', 'dcess', 'Informatique'),
(22, '2015-10-01', 'dcess', 'Informatique'),
(23, '2016-06-23', 'dca', 'inform'),
(24, '2016-06-23', 'dca', 'inform'),
(25, '2016-06-23', 'dca', 'inform'),
(26, '2016-06-23', 'dca', 'inform'),
(27, '2015-10-01', 'dcess', 'Informatique'),
(28, '2015-10-01', 'dcess', 'Informatique'),
(29, '2015-10-01', 'dcess', 'Informatique'),
(30, '2017-10-15', 'dcess', 'MSIIDE4'),
(31, '2018-10-30', 'dcess', 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `NUM_MATIERE` int(11) NOT NULL,
  `NOM_MATIERE` varchar(20) NOT NULL,
  `NB_HEURE` int(11) NOT NULL,
  `NUM_MODULE` int(11) NOT NULL,
  `COUT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`NUM_MATIERE`, `NOM_MATIERE`, `NB_HEURE`, `NUM_MODULE`, `COUT`) VALUES
(6, 'BD et SQL Oracle', 21, 17, 6000),
(7, 'Administration Syste', 21, 17, 4500),
(8, 'Reseau 1', 21, 17, 4500),
(9, 'Optim et PLSQL', 21, 18, 6000),
(10, 'Anglais Scientifique', 21, 18, 4500),
(11, 'Programmation Web PH', 21, 18, 5250),
(12, 'Theorie des Graphes', 21, 19, 4500),
(13, 'Administration Oracl', 21, 19, 6000),
(14, 'ERP_PGI', 21, 19, 4500),
(15, 'POO et Java', 21, 20, 4500),
(16, 'UML-SCRUM', 21, 20, 6000),
(17, 'Reseau 2', 21, 20, 4500),
(18, 'C in Linux', 24, 23, 2000),
(19, 'Java', 42, 24, 2000),
(20, 'C#', 64, 24, 5000),
(21, 'stochastique', 24, 26, 2000),
(22, 'Datawarehouse', 21, 27, 5000),
(23, 'Data Mining', 21, 27, 5000),
(24, 'Big Data', 21, 27, 5000),
(25, 'Reseau II', 21, 29, 4500),
(26, 'Securite Info', 21, 29, 4500),
(27, 'Cloud Computing', 21, 29, 4500),
(28, 'dsdsd', 12, 17, 4000),
(29, 'BDR', 21, 30, 4400),
(30, 'PHP', 24, 31, 5000),
(31, 'BD SQL', 24, 31, 6000);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `NUM_MODULE` int(11) NOT NULL,
  `NOM_MODULE` varchar(20) NOT NULL,
  `SEMESTRE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`NUM_MODULE`, `NOM_MODULE`, `SEMESTRE`) VALUES
(16, 'Stage', 4),
(17, 'Etape1', 1),
(18, 'Etape2', 1),
(19, 'Etape3', 2),
(20, 'Etape4', 2),
(21, 'Etape5', 3),
(22, 'Etape6', 3),
(23, 'Programmation System', 0),
(24, 'POO', 0),
(25, 'BDComplexe', 0),
(26, 'Statistique', 0),
(27, 'Decisionnel_BI', 3),
(28, 'Programmation_AvancÃ', 3),
(29, 'Cloud Computing et S', 3),
(30, 'BD', 0),
(31, 'BD-WEB', 0);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `num_paiement` int(11) NOT NULL,
  `montant` double NOT NULL,
  `date_paiement` date NOT NULL,
  `type` varchar(20) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `type_echeance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`num_paiement`, `montant`, `date_paiement`, `type`, `cin`, `type_echeance`) VALUES
(1, 5000, '2016-01-16', 'espece', '458862', 1),
(2, 10000, '2016-03-30', 'par cheque', ' 10RE48189', 1),
(3, 13000, '2016-03-30', 'par cheque', ' GM152703 ', 1),
(6, 10000, '2016-03-30', 'par cheque', ' KB83717 ', 1),
(7, 2200, '2016-04-15', 'espece', '8564', 1),
(8, 15220, '2016-04-15', 'prise en charge', '8564', 2),
(9, 34780, '2016-04-15', 'prise en charge', '8564', 3),
(10, 10000, '2017-01-20', 'espece', ' 10RE48189', 2),
(11, 10000, '2017-01-20', 'espece', ' GJ5888 ', 1),
(12, 13000, '2017-01-20', 'espece', ' CD313062 ', 1),
(13, 12000, '2017-01-20', 'espece', ' CD313062 ', 2),
(14, 10000, '2017-01-20', 'espece', ' K458114 ', 1),
(15, 10000, '2017-01-20', 'espece', ' K458114 ', 2),
(17, 10000, '2017-01-20', 'espece', ' I681972 ', 1),
(18, 10000, '2017-01-20', 'espece', ' I681972 ', 2),
(20, 10000, '2017-01-20', 'par cheque', ' I683992 ', 3),
(21, 10000, '2017-01-20', 'par cheque', ' I683992 ', 4),
(23, 15000, '2017-01-20', 'par cheque', ' D992469 ', 1),
(24, 10000, '2017-01-20', 'par cheque', ' D992469 ', 2),
(25, 10000, '2018-03-09', 'prise en charge', '111', 1),
(26, 12000, '2018-03-09', 'espece', '111', 2),
(27, 15000, '2018-06-13', 'espece', 'K501723', 1),
(28, 10000, '2019-06-11', 'espece', 'K501723', 2),
(29, 12500, '2022-05-04', 'espece', 'K501723', 3);

-- --------------------------------------------------------

--
-- Structure de la table `prise_en_charge`
--

CREATE TABLE `prise_en_charge` (
  `num_pec` int(11) NOT NULL,
  `societe` varchar(30) NOT NULL,
  `scan` varchar(30) NOT NULL,
  `num_paiement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prise_en_charge`
--

INSERT INTO `prise_en_charge` (`num_pec`, `societe`, `scan`, `num_paiement`) VALUES
(1, 'SOS', '../uploads_photo/images.jpg', 8),
(2, 'LOKIL', '../uploads_photo/images.jpg', 9),
(3, '', '../uploads_photo/019144-green-', 25);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `CIN` varchar(10) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `SEXE` varchar(1) NOT NULL,
  `DATE_N` date NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `ADRESSE` varchar(60) NOT NULL,
  `TEL` varchar(16) NOT NULL,
  `DEPART` varchar(20) NOT NULL,
  `PHOTO` varchar(60) NOT NULL,
  `LIEN_BLOG` varchar(100) NOT NULL,
  `BIOGRAPHIE` varchar(500) NOT NULL,
  `SALAIRE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`CIN`, `NOM`, `PRENOM`, `SEXE`, `DATE_N`, `EMAIL`, `ADRESSE`, `TEL`, `DEPART`, `PHOTO`, `LIEN_BLOG`, `BIOGRAPHIE`, `SALAIRE`) VALUES
('0', 'BARHOUNE', 'Youssef', 'H', '0000-00-00', 'youssef.barhoun@edu.uca.ac.ma', 'Tanger', '', 'Labtic', '../uploads_photo/barh.JPG', '', '', 9000),
('00', 'BOUCHKAREN', 'Said', 'H', '0000-00-00', 'saidbouchkaren1@hotmail.com', 'Tanger', '', 'MI', '../uploads_photo/H.JPG', '', '', 9000),
('000', 'Amechnoue', 'Khalid', 'H', '0000-00-00', 'kamechnoue@gmail.com', 'Tanger', '', 'MI', '../uploads_photo/amechnoue.jpg', '', '', 5250),
('0000', 'Fissoune', 'rachida', 'F', '0000-00-00', 'fissoune@gmal.com', '', '', 'SIC', '../uploads_photo/frontend.png', '', '', 4400),
('12345', 'respo', 'respo', 'H', '2016-06-24', 'respo@res.com', '10th lrespo street NY', '06.66.66.66.66', 'Informatique', '../uploads_photo/images.jpg', 'ifo.ac.bolg.ma', 'to be filled later', 0),
('123456', 'zaidi', 'zaidi', 'H', '2016-06-24', 'respo@res.com', '10th lrespo street NY', '06.66.66.66.66', 'ifo', '../uploads_photo/zaid.jpg', 'ifo.ac.bolg.ma', 'to be filled later', 12300),
('77', 'Kudagba', 'Florent', 'H', '0000-00-00', 'kkunale@gmail.com', 'Tanger', '', 'Suptem', '../uploads_photo/florent.jpg', '', '', 4500),
('8', 'AHAJJAM', 'Sara', 'F', '0000-00-00', 'ahajjamsara@gmail.com', 'Casa', '', 'Labtic', '../uploads_photo/ahajjam.JPG', '', '', 6500),
('99', 'IBN AHRACH', 'Sara', 'F', '0000-00-00', 'sara.sharito@gmail.com', 'Tanger', '', 'Labtic', '../uploads_photo/sara2.JPG', '', '', 4500),
('99995132', 'RESPO', 'RESPO', 'H', '0000-00-00', 'RESPO@GMAIL.COM', '', '', '', '../uploads_photo/images.jpg', '', '', 0),
('a12', 'MOUSSA', 'AHmed', 'H', '1970-12-12', 'hbadir@gmail.com', '', '', 'sss', '../uploads_photo/', '', '', 0),
('C622124', 'Badir', 'Hassan', 'H', '1972-11-25', 'badir.pedagogie@gmail.com', '', '0600650604', 'SIC', '../uploads_photo/badir7.jpg', '', '', 0),
('C622421', 'BADIR', 'Hassan', 'H', '0000-00-00', 'badir.ensa@gmail.com', 'Tanger', '0662802144', 'SIC', '../uploads_photo/anan1.JPG', 'badir.ensa-learning.com', 'Prof', 12000),
('C622421-2', 'BADIR5', 'Hassan2', 'H', '0000-00-00', 'badir.hasssan@uae.ac.ma', '', '', 'SIC', '../uploads_photo/badir10.JPG', 'http://badir.ensa-learning.com', '', 0),
('H4512', 'Admin', 'Admin', 'F', '2016-01-26', 'admin@gmail.com', 'Tetouane', '061587429', 'Maths', '..\\uploads_photo\\avatar-1.jpg', 'www.blog.com', 'I am a the greatest admin ever.', 40000),
('K1111', 'Attariuas', 'Hicham ', 'H', '0000-00-00', 'attariuas.hicham@gmail.com', '', '', 'ENSATe', '../uploads_photo/Hom2.jpg', '', '', 4500),
('ZG29679', 'FISSOUNE', 'Rachida', 'F', '1978-03-16', 'fissoune@gmail.com', 'Tanger', '', 'SIC', '../uploads_photo/fissoune.JPG', '', '', 12000);

-- --------------------------------------------------------

--
-- Structure de la table `prof_from`
--

CREATE TABLE `prof_from` (
  `CIN` varchar(10) NOT NULL,
  `DATE_DEBUT` date NOT NULL,
  `TYPE` varchar(6) NOT NULL,
  `SPECIALITE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prof_from`
--

INSERT INTO `prof_from` (`CIN`, `DATE_DEBUT`, `TYPE`, `SPECIALITE`) VALUES
('0', '2015-10-01', 'dcess', 'Informatique'),
('00', '2015-10-01', 'dcess', 'Informatique'),
('00', '2016-06-23', 'dca', 'inform'),
('000', '2015-10-01', 'dcess', 'Informatique'),
('0000', '2017-10-15', 'dcess', 'MSIIDE4'),
('12587', '2015-10-01', 'dca', 'informatique'),
('12587', '2015-10-01', 'dcess', 'energetique'),
('4568', '2015-10-01', 'dcess', 'energetique'),
('4598', '2015-10-01', 'dca', 'informatique'),
('77', '2015-10-01', 'dcess', 'Informatique'),
('8', '2015-10-01', 'dcess', 'Informatique'),
('8', '2016-06-23', 'dca', 'inform'),
('99', '2015-10-01', 'dcess', 'Informatique'),
('99995132', '2016-06-23', 'dca', 'inform'),
('C622421', '2015-10-01', 'dcess', 'Informatique'),
('K1111', '2015-10-01', 'dcess', 'Informatique'),
('ZG29679', '2015-10-01', 'dcess', 'Informatique'),
('ZG29679', '2018-10-30', 'dcess', 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `prof_matiere`
--

CREATE TABLE `prof_matiere` (
  `NUM_MATIERE` int(11) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `NB_HEURE` int(11) NOT NULL,
  `NB_HEURE_ENS` int(11) NOT NULL,
  `responsable` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prof_matiere`
--

INSERT INTO `prof_matiere` (`NUM_MATIERE`, `CIN`, `NB_HEURE`, `NB_HEURE_ENS`, `responsable`) VALUES
(1, '4568', 24, 9, '4598'),
(2, '12587', 36, 6, '4598'),
(2, '4568', 36, 3, '4598'),
(4, '4598', 42, 3, '12345'),
(5, '12587', 96, 15, '12345'),
(6, 'ZG29679', 21, 0, 'C622421'),
(7, '0', 21, 0, 'C622421'),
(8, '00', 21, 0, 'C622421'),
(9, 'ZG29679', 21, 0, 'C622421'),
(10, '99', 21, 0, 'C622421'),
(11, '000', 21, 0, 'C622421'),
(12, '77', 21, 0, 'C622421'),
(13, 'C622421', 21, 3, 'C622421'),
(14, '8', 21, 0, 'C622421'),
(15, '0', 21, 0, 'C622421'),
(16, 'C622421', 21, 0, 'C622421'),
(17, '00', 21, 0, 'C622421'),
(18, '8', 24, 0, '123456'),
(29, '0000', 21, 3, 'C622421');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id_operation`);

--
-- Index pour la table `authentification`
--
ALTER TABLE `authentification`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `cheque`
--
ALTER TABLE `cheque`
  ADD PRIMARY KEY (`num_cheque`);

--
-- Index pour la table `demande_attestation`
--
ALTER TABLE `demande_attestation`
  ADD PRIMARY KEY (`id_da`);

--
-- Index pour la table `echeance`
--
ALTER TABLE `echeance`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`CIN`);

--
-- Index pour la table `etudiant_archive`
--
ALTER TABLE `etudiant_archive`
  ADD PRIMARY KEY (`CIN`,`TYPE_FOR`,`DATE_DEBUT_FOR`,`SPECIALITE_FOR`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evnmt`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`DATE_DEBUT`,`SPECIALITE`,`TYPE`);

--
-- Index pour la table `form_module`
--
ALTER TABLE `form_module`
  ADD PRIMARY KEY (`NUM_MODULE`,`DATE_DEBUT`,`TYPE`,`SPECIALITE`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`NUM_MATIERE`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`NUM_MODULE`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`num_paiement`);

--
-- Index pour la table `prise_en_charge`
--
ALTER TABLE `prise_en_charge`
  ADD PRIMARY KEY (`num_pec`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`CIN`);

--
-- Index pour la table `prof_from`
--
ALTER TABLE `prof_from`
  ADD PRIMARY KEY (`CIN`,`DATE_DEBUT`,`TYPE`,`SPECIALITE`);

--
-- Index pour la table `prof_matiere`
--
ALTER TABLE `prof_matiere`
  ADD PRIMARY KEY (`NUM_MATIERE`,`CIN`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `audit`
--
ALTER TABLE `audit`
  MODIFY `id_operation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT pour la table `demande_attestation`
--
ALTER TABLE `demande_attestation`
  MODIFY `id_da` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `echeance`
--
ALTER TABLE `echeance`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evnmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `NUM_MATIERE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `NUM_MODULE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `num_paiement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `prise_en_charge`
--
ALTER TABLE `prise_en_charge`
  MODIFY `num_pec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
