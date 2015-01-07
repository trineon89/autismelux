-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 12. Okt 2014 um 23:49
-- Server Version: 5.5.38
-- PHP-Version: 5.4.4-14+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `c1autisme_alpha`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblContent`
--

CREATE TABLE IF NOT EXISTS `tblContent` (
  `idContent` int(11) NOT NULL AUTO_INCREMENT,
  `dtSite` varchar(50) COLLATE utf8_bin NOT NULL,
  `dtType` varchar(50) COLLATE utf8_bin NOT NULL,
  `dtContent` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idContent`),
  KEY `dtSite` (`dtSite`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=31 ;

--
-- Daten für Tabelle `tblContent`
--

INSERT INTO `tblContent` (`idContent`, `dtSite`, `dtType`, `dtContent`) VALUES
(1, 'about', '_TITLE_big_', '<h1>Qui sommes-nous?</h1>'),
(2, 'about', '_TITLE_comment_', '<p style="text-align: center;"><strong>Autisme Luxembourg asbl</strong>, créée en 1981 et reconnue d’utilité publique, est une association qui crée et gère des services d’hébergement, de loisirs, de consultation et de travail pour personnes atteintes d’autisme.</p>'),
(3, 'about', '_TITLE_first_', '<p style="text-align:center"><em>Toute personne intéressée peut devenir membre de l’association.​</em>'),
(4, 'about', '_CONTENT_first_', '<p><strong>« Autisme Luxembourg asbl »</strong> s’est donné l’objectif d''assurer un soutien à toute personne présentant un trouble envahissant du développement (Autisme infantile, Autisme a-typique, Syndrome d’Asperger, Syndrome de Rett, High Functionning Autism, autres troubles envahissant non-spécifiés) et à sa famille et ceci à chaque moment de la vie de la personne concernée et dans chaque domaine de vie (hébergement, travail, formation, loisirs, santé,…).</p><p>Actuellement « Autisme Luxembourg asbl » gère 7 services agréés par l’Etat luxembourgeois, qui proposent différentes activités implantées sur quatre sites différents : Luxembourg-Hollerich, Luxembourg-Gasperich, Esch-sur-Alzette et Beckerich.</p><p>Nous proposons : Un foyer d’hébergement Des ateliers protégés Un service de formation professionnelle Un centre de jour spécialisé Un centre de loisirs Un service d’assistance à domicile Un service de consultation Un service de soins et santé Au regard de la dynamique de l’association et des multiples besoins des personnes présentant des troubles envahissants du développement, d’autres services sont déjà en cours de réalisation.</p><p>Pour recevoir nos brochures et/ou de la documentation sur l’autisme, n’hésitez pas à nous contacter au tél.: 266 233 ou bien par e-Mail</p>'),
(5, 'about', '_TITLE_second_', '<h2>&nbsp;​</h2>'),
(6, 'about', '_CONTENT_second_', '<p><br></p>'),
(7, 'historique', '_TITLE_big_', '<h1>Historique</h1>'),
(8, 'historique', '_TITLE_comment_', '<p>L''association Autisme Luxembourg a.s.b.l. a été fondée en 1981.Le but des pères fondateurs de l’association était la création de classes d''enseignement spécialisé pour des enfants atteints d’autisme. Ainsi fut créé l''Institut pour enfants autistiques et psychotiques, qui fut dans un premier temps subsidié par le Ministère de l’Éducation Nationale avant d’intégrer, en 1988, le Service de l’Éducation Différenciée.<br></p><p>Dès 1989, l''association décida d’ouvrir un lieu de vie et de rencontre à Hollerich: le CIRPA (Centre d’Intégration et de Récréation pour Personnes atteintes d’Autisme). Cette structure permettait d''offrir une aide spécialisée et un accompagnement adapté aux besoins et aux compétences des personnes atteintes d''autisme, tout au long de leur vie.<br></p><p>En 2000, un atelier de mise au travail, spécialisé dans la production d''articles en céramique (Keramikfabrik), fut inauguré sur le site de la Kulturfabrik à Esch-sur-Alzette.<br></p><p>En 2001, Autisme Luxembourg a.s.b.l. lança à Beckerich le projet de création du Centre Roger Thelen (CRT) afin d''y installer plusieurs ateliers protégés et les services centraux. Le bâtiment fut opérationnel dès 2004 et fut officiellement inauguré en 2006. Cette implantation du CRT à Beckerich permit un essor considérable des activités et du personnel de l''association. Progressivement divers services y ont été implantés, tels que:<br></p><ol><li>Un centre d’accueil de jour qui accueille des personnes ne pouvant intégrer la structure de travail. Il propose des activités adaptées qui permettent d’accroître leur autonomie, leur épanouissement personnel et leur bien-être.<br></li><li><br></li><li>Un service de consultation composé d''une équipe multidisciplinaire (psychologue, pédagogue, ergothérapeute, orthophoniste, sophrologue). Ces intervenants spécialisés ont une fonction de personnes "ressources" pour le personnel d’encadrement. Ils interviennent également comme consultants auprès des usagerset de leur famille.<br></li><li><br></li><li> Un service soins et santé composé actuellement de deux infirmières qui assurent les soins, centralisent les données médicale, gèrent les contacts avec les médecins et les familles.D''autres intervenants spécialisés interviennent pour compléter la prise en charge (psychiatre, médecin généralistes, kinésithérapeute, ostéopathe, pédicure).<br></li><li><br></li><li>Un service de formation professionnelle (SFP) qui, depuis 2007, accueille des jeunes dès la fin de leur scolarité obligatoire et leur propose une formation professionnelle les préparant à la vie active, dans un atelier protégé ou sur le marché ordinaire du travail.<br></li><li><br></li><li>Depuis 2009, il existe un service «assistance à domicile» pour accompagner des adultes présentant des troubles du spectre de l’autisme en milieu ouvert. Ce service les soutient dans leur vie quotidienne en veillant particulièrement à leur autonomie et à leur participation à la vie de la communauté.</li></ol><p>&nbsp;</p>'),
(9, 'historique', '_TITLE_first_', '<h2>&nbsp;​</h2>'),
(10, 'historique', '_CONTENT_first_', '<p><br></p>'),
(11, 'historique', '_TITLE_second_', '<h2>&nbsp;​</h2>'),
(12, 'historique', '_CONTENT_second_', '<p><br></p>'),
(13, 'cons_admin', '_TITLE_big_', '<h1>&nbsp;</h1>'),
(14, 'cons_admin', '_TITLE_comment_', '<p>&nbsp;</p>'),
(15, 'cons_admin', '_TITLE_first_', '<h2>&nbsp;​</h2>'),
(16, 'cons_admin', '_CONTENT_first_', '<p>&nbsp;</p>'),
(17, 'cons_admin', '_TITLE_second_', '<h2>&nbsp;​</h2>'),
(18, 'cons_admin', '_CONTENT_second_', '<p>&nbsp;</p>'),
(19, 'organigramme', '_TITLE_big_', '<h1>&nbsp;</h1>'),
(20, 'organigramme', '_TITLE_comment_', '<p>&nbsp;</p>'),
(21, 'organigramme', '_TITLE_first_', '<h2>&nbsp;​</h2>'),
(22, 'organigramme', '_CONTENT_first_', '<p>&nbsp;</p>'),
(23, 'organigramme', '_TITLE_second_', '<h2>&nbsp;​</h2>'),
(24, 'organigramme', '_CONTENT_second_', '<p>&nbsp;</p>'),
(25, 'equipe', '_TITLE_big_', '<h1>&nbsp;</h1>'),
(26, 'equipe', '_TITLE_comment_', '<p>&nbsp;</p>'),
(27, 'equipe', '_TITLE_first_', '<h2>&nbsp;​</h2>'),
(28, 'equipe', '_CONTENT_first_', '<p>&nbsp;</p>'),
(29, 'equipe', '_TITLE_second_', '<h2>&nbsp;​</h2>'),
(30, 'equipe', '_CONTENT_second_', '<p>&nbsp;</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
