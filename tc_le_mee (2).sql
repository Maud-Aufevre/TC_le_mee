-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 26 nov. 2020 à 15:59
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tc_le_mee`
--

-- --------------------------------------------------------

--
-- Structure de la table `actus`
--

CREATE TABLE `actus` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `visuel` varchar(50) NOT NULL,
  `date_parution` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `resume` varchar(150) NOT NULL,
  `texte` longtext NOT NULL,
  `illu1` varchar(50) NOT NULL,
  `illu2` varchar(50) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actus`
--

INSERT INTO `actus` (`id_article`, `titre`, `visuel`, `date_parution`, `resume`, `texte`, `illu1`, `illu2`, `id_categorie`) VALUES
(4, 'Victoire &eacute;quipe 1', 'tennis-1.jpg', '2020-11-06 16:09:07', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida mauris quam, non vestibulum erat molestie a. Morbi tortor arcu, eleifend a felis', 'Pellentesque tempus elit rhoncus odio luctus, non imperdiet risus rutrum. In in volutpat sapien, ut ornare dui. Etiam lectus est, laoreet quis ante in, maximus molestie diam. Vestibulum non condimentum elit. Integer sed dolor luctus, elementum risus nec, feugiat felis. Aliquam erat volutpat. Donec interdum libero non lorem sagittis, lobortis porttitor magna facilisis. Cras id nibh nec orci hendrerit accumsan eu sit amet odio.\r\n\r\nNulla sed laoreet neque. Integer eget erat in tellus cursus iaculis eu quis arcu. Aenean commodo vestibulum nisl, quis ultricies purus. Vivamus sagittis ipsum at convallis rhoncus. Curabitur commodo nunc a nunc iaculis, id ornare purus ornare. Proin aliquet nunc ac ipsum facilisis euismod. Cras mollis elit sem, sit amet pulvinar velit fermentum et. Aliquam mattis lacus enim, eget vulputate quam pulvinar quis. Aenean aliquam ligula non ante gravida, in porta nibh vehicula. Fusce tempus purus ut enim dictum, et tempor sem iaculis. Nulla commodo rhoncus nisi vel lobortis. Praesent dignissim nibh ut ante consequat, at aliquet turpis porta. Integer mi diam, ultrices vestibulum ornare eget, facilisis euismod erat.', 'tennis-2.jpg', 'tennis-3.jpg', 1),
(5, 'Victoire &eacute;quipe 2', 'logo-le-mee-sur-seine.jpg', '2020-11-08 14:06:12', 'resume', 'Texte visible seulement si on clique sur l\\\'article', 'ivanovic.jpg', 'ivanovic-2.jpg', 5),
(7, 'Ev&egrave;nement club du moment ...', 'photo-f.jpg', '2020-11-10 12:40:32', 'res', 'Texte visible seulement si on clique sur l\\\'article', 'tennis-2.jpg', 'tennis-3.jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

CREATE TABLE `bureau` (
  `id_membre` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `discours` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bureau`
--

INSERT INTO `bureau` (`id_membre`, `nom`, `prenom`, `fonction`, `photo`, `discours`) VALUES
(1, 'Bertand', 'Micka&euml;l', 'Pr&eacute;sident', 'mickael-bertrand.jpg', 'Chers membres du tennis club du M&eacute;e sur Seine,\r\n&lt;/br&gt;&lt;/br&gt;\r\nIl y a maintenant deux ans, l&rsquo;assembl&eacute;e g&eacute;n&eacute;rale de notre club m&rsquo;a &eacute;lu pr&eacute;sident. C&rsquo;est avec beaucoup de fiert&eacute; et d&rsquo;enthousiasme que j&rsquo;ai endoss&eacute; cette responsabilit&eacute;.\r\n&lt;/br&gt;&lt;/br&gt;\r\nLe Tennis Club du M&eacute;e sur Seine a une place particuli&egrave;re dans mon c&oelig;ur. Cela fait maintenant huit ans que je suis adh&eacute;rent de ce club dans lequel j&rsquo;ai pass&eacute; de grands moments en tant que joueur, dirigeant et maintenant pr&eacute;sident.\r\nA 33 ans, il est pour moi le moment de redonner en tant que b&eacute;n&eacute;vole &agrave; ce sport qui m&rsquo;a tellement apport&eacute;. L&rsquo;engagement dans une association sportive est pour moi le moyen de contribuer &agrave; promouvoir et d&eacute;velopper les valeurs de respect, partage, solidarit&eacute; et convivialit&eacute; qui me sont ch&egrave;res. L&rsquo;action et les d&eacute;cisions de notre comit&eacute; directeur auront invariablement ces valeurs comme socle.\r\n&lt;/br&gt;&lt;/br&gt;\r\nL&rsquo;objectif du nouveau comit&eacute; directeur est tr&egrave;s simple : continuer &agrave;  d&eacute;velopper le club et offrir &agrave; nos membres, de tous &acirc;ges et tous niveaux, les meilleures conditions de jeu possibles dans un cadre convivial o&ugrave; nous sommes tous fiers de porter les couleurs du TC le M&eacute;e.\r\nPour cela, &agrave; un horizon de 5 ans, nous voulons :\r\nAvoir r&eacute;alis&eacute; un grand plan de modernisation de nos infrastructures pour replacer le TC Le M&eacute;e &agrave; la pointe des clubs r&eacute;gionaux. Ceci comprend :\r\nLa mise en place du paiement en ligne (d&eacute;but 2021)\r\nLa r&eacute;fection totale des terres battues ext&eacute;rieures (Printemps 2021) \r\nLa mise en place d&rsquo;une nouvelle bulle avec l&rsquo;aide de la mairie (2021/2022)\r\nLa modernisation de la salle de fitness et des vestiaires \r\nAm&eacute;liorer notre partenariat avec F&ecirc;te le Mur en signant une nouvelle convention\r\nMultiplier nos actions dans les &eacute;coles\r\nD&eacute;velopper notre structure paratennis et tennis sant&eacute;\r\n&lt;/br&gt;&lt;/br&gt;\r\nA l&rsquo;heure actuelle 368 adh&eacute;rents dont 304 jeunes ont la chance d&rsquo;&ecirc;tre adh&eacute;rent au club, notre objectif est de continuer d&rsquo;augmenter nos effectifs en maintenant la m&ecirc;me qualit&eacute; d&rsquo;accueil.\r\nNous aurons besoin du support de tous nos partenaires pour mettre en place ce projet. Pour cela, nous pouvons compter sur le soutien de notre mairie ainsi que de la f&eacute;d&eacute;ration.\r\nNous souhaitons aussi rechercher de nombreux partenaires &agrave; l&rsquo;avenir.\r\n&lt;/br&gt;&lt;/br&gt;\r\nCe projet est celui de tout un club et nous accueillons toute aide &agrave; bras ouverts.\r\nLe comit&eacute; est extr&ecirc;mement motiv&eacute; pour faire aboutir le plan. Pour amener le club ou nous voulons, c&rsquo;est-&agrave;-dire cr&eacute;er un lieu de vie et de pratique pour tous, nous aurons besoin de toute l&rsquo;aide possible des membres. Ce projet est celui de tout un club, n&rsquo;h&eacute;sitez pas &agrave; nous contacter pour apporter votre pierre &agrave; l&rsquo;&eacute;difice, quel que soit votre investissement.\r\n&lt;/br&gt;&lt;/br&gt;\r\nPour finir, nous avons la chance de pouvoir nous appuyer sur une &eacute;quipe p&eacute;dagogique de grande qualit&eacute; et tr&egrave;s motiv&eacute;e avec &agrave; sa t&ecirc;te Da silva Fabien. Je leur en suis reconnaissant et les encourage avec toute mon &eacute;nergie.\r\n&lt;/br&gt;&lt;/br&gt;\r\nVeuillez croire en ma plus haute motivation pour servir notre club en tant que pr&eacute;sident.\r\n&lt;/br&gt;&lt;/br&gt;\r\nTous ensemble pour le TC Le M&eacute;e, et vive le tennis !'),
(5, 'Marteau', 'Laurence', 'tr&eacute;sori&egrave;re', 'laurence-marteau.jpg', ''),
(8, 'Marcoin', 'Lucille', 'secr&eacute;taire g&eacute;n&eacute;rale', 'lucille-macoin.jpg', ''),
(9, 'Sirai', 'Tariq', 'commission jeunes', 'tariq-sirai.jpg', ''),
(10, 'Montagnac', 'A&iuml;da', 'commission jeunes', 'aida-montagnac.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `visuel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom`, `visuel`) VALUES
(1, 'R&eacute;sultats', 'resultats.png'),
(2, 'Vie du club', 'vie-du-club.png'),
(3, 'Handi', 'handi.png'),
(4, 'Entra&icirc;nement', 'entrainement.png'),
(5, 'Divers', 'divers.png');

-- --------------------------------------------------------

--
-- Structure de la table `classements`
--

CREATE TABLE `classements` (
  `id_classement` int(11) NOT NULL,
  `classement` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classements`
--

INSERT INTO `classements` (`id_classement`, `classement`) VALUES
(1, 'NC'),
(2, '40'),
(3, '30/5'),
(4, '30/4'),
(5, '30/3'),
(6, '30/2'),
(7, '30/1'),
(8, '30'),
(9, '15/5'),
(10, '15/4'),
(11, '15/3'),
(12, '15/2'),
(13, '15/1'),
(14, '15'),
(15, '5/6'),
(16, '4/6'),
(17, '3/6'),
(18, '2/6'),
(19, '1/6'),
(20, '0'),
(21, '-5/6'),
(22, '-4/6'),
(23, '-3/6'),
(24, '-2/6');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

CREATE TABLE `enseignants` (
  `id_ens` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `discours` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`id_ens`, `nom`, `prenom`, `fonction`, `photo`, `discours`) VALUES
(1, 'Da Silva', 'Fabien', 'Directeur sportif / DES', 'fabien-dasilva.jpg', 'Cher(e)s membres,\r\n<br/><br/>\r\nDirecteur sportif du tennis club du M&eacute;e depuis maintenant 10 ans, c&rsquo;est avec fiert&eacute; que je m&rsquo;adresse &agrave; vous pour vous pr&eacute;senter notre philosophie.\r\n<br/>\r\nMon objectif principal en tant que directeur sportif est de tout mettre en &oelig;uvre pour que nous conservions nos points forts, &agrave; savoir cette convivialit&eacute;, ce lien entre tous avec un seul mot d&rsquo;ordre:\r\n<br/><br/>\r\n&laquo;la satisfaction pour tous&raquo;.\r\n<br/><br/>\r\nMon souhait vise aussi &agrave; proposer de nouveaux services et &agrave; moderniser notre club en &eacute;troite collaboration avec le bureau.\r\n<br/>\r\nJeunes ou Adultes, loisir ou comp&eacute;tition, chacun doit pouvoir trouver le service qui lui permettra de s&rsquo;&eacute;panouir dans sa pratique sportive.\r\n<br/><br/>\r\n&laquo;Une offre de cours et d&rsquo;entra&icirc;nements la plus large possible&raquo;\r\n<br/><br/>\r\n&Eacute;cole de tennis ou centre d&rsquo;entra&icirc;nement, notre enseignement repose d&rsquo;abord sur le plaisir du jeu et les progr&egrave;s !\r\n<br/>\r\nMon objectif est de maintenir une &eacute;cole de tennis de 3 ans &aacute; 18 ans, dynamique et conviviale dans laquelle les enfants auront plaisir &agrave; venir chaque semaine taper la balle entre copains et progresser par la m&ecirc;me occasion.\r\nAnimations et matchs amicaux font &eacute;galement partie int&eacute;grante de notre offre.\r\n<br/>\r\nLe centre d&rsquo;entra&icirc;nement a &eacute;t&eacute; organis&eacute; pour permettre &agrave; chaque comp&eacute;titeur d&rsquo;&ecirc;tre performant.\r\n<br/>\r\nLes adultes, quant &agrave; eux, peuvent b&eacute;n&eacute;ficier de cours collectifs toute l&rsquo;ann&eacute;e quel que soit leur niveau: du d&eacute;butant au joueur class&eacute; en 2nde s&eacute;rie.\r\nCes derni&egrave;res ann&eacute;es nous avons ouvert une section paratennis et tennis sant&eacute; pour r&eacute;pondre au mieux aux besoins des M&eacute;ens.\r\n<br/>\r\nNos enseignants qualifi&eacute;s auront le plaisir de vous accueillir pour vous faire transpirer et progresser quelques soit vos besoins.\r\n<br/><br/>\r\nJe vous souhaite &agrave; toutes et &agrave; tous une bonne saison tennistique\r\n<br/><br/>\r\n&Agrave; bient&ocirc;t sur nos courts !'),
(2, 'Poteau', 'Brandon', 'AMT', 'brandon-poteau.jpg', NULL),
(3, 'Macouin', 'Lucille', 'AMT', 'lucille-marcoin.jpg', NULL),
(4, 'Foras', 'Michel', 'AMT / handi-tennis', 'michel-foras.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

CREATE TABLE `joueurs` (
  `id_joueur` int(11) NOT NULL,
  `sexe` tinyint(1) NOT NULL DEFAULT '0',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tc_le_mee_date_naissance` date NOT NULL,
  `id_classement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `joueurs`
--

INSERT INTO `joueurs` (`id_joueur`, `sexe`, `nom`, `prenom`, `tc_le_mee_date_naissance`, `id_classement`) VALUES
(1, 0, 'Dupont', 'Robert', '2000-10-04', 2),
(2, 0, 'Da Silva', 'Fabien', '1982-04-14', 6),
(4, 1, 'Boich&eacute;', 'Alice', '2009-06-09', 13),
(5, 1, 'Touri', 'Elise', '2006-12-14', 11);

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id_partenaire` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `site_web` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id_partenaire`, `nom`, `logo`, `description`, `site_web`) VALUES
(2, 'Tennis Compagnie', 'tennis-compagnie.jpg', 'Phasellus vestibulum orci vel mauris. Fusce quam leo, adipiscing ac, pulvinar eget, molestie sit amet, erat. Sed diam. Suspendisse eros leo, tempus eget, dapibus sit amet, tempus eu, arcu. Vestibulum wisi metus, dapibus vel, luctus sit amet, condimentum quis, leo. Suspendisse molestie. Duis in ante. Ut sodales sem sit amet mauris. Suspendisse ornare pretium orci. Fusce tristique enim eget mi. Vestibulum eros elit, gravida ac, pharetra sed, lobortis in, massa. Proin at dolor. Duis accumsan accumsan pede. Nullam blandit elit in magna lacinia hendrerit. Ut nonummy luctus eros. Fusce eget tortor.', 'https://tennis-compagnie.fr/'),
(4, 'Ville du M&eacute;e sur Seine', 'logo-le-mee-sur-seine.jpg', 'Vestibulum wisi metus, dapibus vel, luctus sit amet, condimentum quis, leo. Suspendisse molestie. Duis in ante. Ut sodales sem sit amet mauris. Suspendisse ornare pretium orci. Fusce tristique enim eget mi. Vestibulum eros elit, gravida ac, pharetra sed, lobortis in, massa. Proin at dolor. Duis accumsan accumsan pede. Nullam blandit elit in magna lacinia hendrerit. Ut nonummy luctus eros. Fusce eget tortor.', 'https://le-mee-sur-seine.fr/'),
(5, 'Agence nationale du sport', 'agence-nationale-du-sport.png', 'a', 'https://www.agencedusport.fr/'),
(6, 'ligue de tennis IDF', 'tennis-FFT-LIGUE-ILE-DE-FRANCE.jpg', 'Pr&eacute;senter le partenaire', 'https://tennis-idf.fr/'),
(7, 'conseil g&eacute;n&eacute;ral 77', 'conseil-general-77.jpg', 'Pr&eacute;senter le partenaire', 'https://seine-et-marne.fr/fr'),
(8, 'babolat', 'babolat-logo.png', 'Pr&eacute;senter le partenaire', 'https://www.babolat.com/fr'),
(9, 'f&ecirc;te le mur', 'fete-le-mur-yannick-noah.jpg', 'Pr&eacute;senter le partenaire', 'https://fetelemur.com/'),
(10, 'comit&eacute; de tennis 77', 'logo-tennis-COMITE-77.jpg', 'Pr&eacute;senter le partenaire', 'https://tennis-idf.fr/seine-et-marne/');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actus`
--
ALTER TABLE `actus`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `classements`
--
ALTER TABLE `classements`
  ADD PRIMARY KEY (`id_classement`);

--
-- Index pour la table `enseignants`
--
ALTER TABLE `enseignants`
  ADD PRIMARY KEY (`id_ens`);

--
-- Index pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD PRIMARY KEY (`id_joueur`),
  ADD KEY `id_classement` (`id_classement`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id_partenaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actus`
--
ALTER TABLE `actus`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `bureau`
--
ALTER TABLE `bureau`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `classements`
--
ALTER TABLE `classements`
  MODIFY `id_classement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `enseignants`
--
ALTER TABLE `enseignants`
  MODIFY `id_ens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `joueurs`
--
ALTER TABLE `joueurs`
  MODIFY `id_joueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id_partenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actus`
--
ALTER TABLE `actus`
  ADD CONSTRAINT `actus_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

--
-- Contraintes pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD CONSTRAINT `FK` FOREIGN KEY (`id_classement`) REFERENCES `classements` (`id_classement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
