-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 23 nov. 2020 à 09:56
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
-- Structure de la table `adhesions`
--

CREATE TABLE `adhesions` (
  `id_adhesion` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `programme` text NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adhesions`
--

INSERT INTO `adhesions` (`id_adhesion`, `nom`, `programme`, `prix`) VALUES
(1, 'Mini tennis</br>(5 &agrave; 6 ans)', 'L\\\'objectif est de leur faire d&eacute;couvrir le tennis &agrave; travers des situations ludiques.\r\n</br> \r\nD&eacute;velopper des qualit&eacute;s de coordination et des aptitudes sp&eacute;cifiques au tennis.\r\n</br></br>\r\nLes cours sont dispens&eacute;s par un enseignant sp&eacute;cialis&eacute; petite enfance\r\n</br></br>\r\n \r\n1h par semaine\r\n</br></br>\r\nProgramme :\r\n</br>\r\n<ul>\r\n<li>Animations club</li>\r\n<li>3 rassemblements Jeux et Matchs</li>\r\n<li>F&ecirc;te de fin d\\\'ann&eacute;e</li>\r\n<li>Stages aux vacances scolaires(payants)</li>\r\n<ul/>', 165),
(2, 'Ecole de tennis</br>initiation (7 &agrave; 9 ans)', 'L&rsquo;objectif est de d&eacute;couvrir le tennis ou s\\\'y perfectionner pour des enfants qui n\\\'ont pas ou peu l\\\'occasion de jouer en dehors des entra&icirc;nements.\r\n</br>\r\nUne partie de la s&eacute;ance est consacr&eacute;e &agrave; l\\\'apprentissage technique et une autre partie est consacr&eacute;e &agrave; des formes jou&eacute;es (apprentissage des r&egrave;gles ou perfectionnement, mise en places des acquisitions techniques dans des situations vari&eacute;es)\r\n</br></br>\r\n1h par semaine\r\n</br></br>\r\nProgramme :\r\n<ul>\r\n<li>Animation club</li>\r\n<li>3 rassemblements Jeux et Matchs</li>\r\n<li>F&ecirc;te de fin d\\\'ann&eacute;e</li>\r\n<li>Stages aux vacances scolaires (payants)</li>\r\n</ul>', 195),
(4, 'Ecole de tennis</br>(8 &agrave; 12 ans)', 'C\\\'est la p&eacute;riode pendant laquelle ils vont acqu&eacute;rir:\r\n</br>\r\n- Une technique o&ugrave; les fondamentaux seront renforc&eacute;s pour terminer en fin de cycle sur une technique avanc&eacute;e\r\n</br>\r\n- Une tactique qui &eacute;voluera du simple &eacute;change avec un partenaire &agrave; partir d\\\'un service pour en finir sur les indispensables aspects tactiques d\\\'un match\r\n</br></br>\r\n1h15 tennis et jeux sportifs par semaine\r\n</br></br>\r\n\r\nProgramme :\r\n</br>\r\n<ul>\r\n<li>Animations club</li>\r\n<li>3 rassemblements Jeux et Matchs</li>\r\n<li>F&ecirc;te de fin d\\\'ann&eacute;e</li>\r\n<li>Stages aux vacances scolaires (payants)</li>\r\n</ul>', 260),
(5, 'Ecole de tennis<br/>ados (12 &agrave; 18 ans)', 'C\\\'est la p&eacute;riode pendant laquelle ils vont acqu&eacute;rir un niveau technique et tactique avanc&eacute; afin de jouer avec ses amis ou de pratiquer la comp&eacute;tition.\r\n<br/><br/>\r\n1h30 par semaine\r\n<br/><br/>\r\nGroupe de 6 maximum\r\n<br/><br/>\r\nProgramme :\r\n<br/>\r\n<ul>\r\n<li>Animations ados</li>\r\n<li>3 rassemblements Jeux et Matchs</li>\r\n<li>F&ecirc;te de fin d\\\'ann&eacute;e</li>\r\n<li>Stages aux vacances scolaires (payants)</li>\r\n</ul>', 310),
(6, 'Club comp&eacute;tition <br/>(8 &agrave; 18 ans)', 'Enfants disposants des qualit&eacute;s n&eacute;cessaires pour int&eacute;grer le club comp&eacute;tition.\r\n <br/>\r\nEnfants s&eacute;lectionn&eacute;s par l&rsquo;&eacute;quipe p&eacute;dagogique.\r\n<br/> <br/>\r\nL&rsquo;objectif pour les enfants est de mettre en place les acquisitions TE/TA dans des situations vari&eacute;es, se confronter &agrave; diff&eacute;rents adversaires  et cr&eacute;er une dynamique et une &eacute;mulation autours du tennis de comp&eacute;tition.\r\n <br/> <br/>\r\n\r\n2 fois 1h30 par semaine', 450),
(7, 'Cours adultes<br/>loisirs &agrave; comp&eacute;tition', 'Que ce soit pour d&eacute;buter, se perfectionner ou s&rsquo;entrainer en vue de comp&eacute;tition chaque adulte trouvera une formule adapt&eacute;e &agrave; ses besoins. \r\n <br/> <br/>\r\nEN SOIR&Eacute;E : lundi / mardi / mercredi de 19h &agrave; 20h30, de 20h30 &agrave; 22h\r\n <br/>\r\nEN JOURN&Eacute;E : en fonction des disponibilit&eacute;s de chacun\r\n <br/> <br/>\r\nNOMBRE DE PLACES LIMIT&Eacute;\r\n <br/> <br/>\r\n1h30 par semaine', 395),
(8, 'Adh&eacute;sions simples', 'Acc&egrave;s illimit&eacute;s aux courts int&eacute;rieurs et ext&eacute;rieurs en pratique libre.\r\n <br/> <br/>\r\nTarifs :\r\n <br/>\r\n+ 25 ANS : 180&euro; <br/>\r\n18/25 ANS : 110&euro; <br/>\r\n18 ET - : 90&euro; <br/>\r\nCOUPLE : 300&euro; <br/>\r\nCARTE PARENT (JOUER AVEC SON ENFANT) : 40&euro;', 180),
(9, 'Tennis fauteuil et sant&eacute;', 'Apprentissages des bases technico-tactiques.\r\n <br/> <br/>\r\nEnseignement adapt&eacute;s &agrave; tous.\r\n <br/> <br/>\r\n1h30 par semaine', 70);

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
(1, 'Bertand', 'Micka&euml;l', 'Pr&eacute;sident', 'president.jpg', 'Chers membres du tennis club du M&eacute;e sur Seine,\r\n</br></br>\r\nIl y a maintenant deux ans, l&rsquo;assembl&eacute;e g&eacute;n&eacute;rale de notre club m&rsquo;a &eacute;lu pr&eacute;sident. C&rsquo;est avec beaucoup de fiert&eacute; et d&rsquo;enthousiasme que j&rsquo;ai endoss&eacute; cette responsabilit&eacute;.\r\n</br></br>\r\nLe Tennis Club du M&eacute;e sur Seine a une place particuli&egrave;re dans mon c&oelig;ur. Cela fait maintenant huit ans que je suis adh&eacute;rent de ce club dans lequel j&rsquo;ai pass&eacute; de grands moments en tant que joueur, dirigeant et maintenant pr&eacute;sident.\r\nA 33 ans, il est pour moi le moment de redonner en tant que b&eacute;n&eacute;vole &agrave; ce sport qui m&rsquo;a tellement apport&eacute;. L&rsquo;engagement dans une association sportive est pour moi le moyen de contribuer &agrave; promouvoir et d&eacute;velopper les valeurs de respect, partage, solidarit&eacute; et convivialit&eacute; qui me sont ch&egrave;res. L&rsquo;action et les d&eacute;cisions de notre comit&eacute; directeur auront invariablement ces valeurs comme socle.\r\n</br></br>\r\nL&rsquo;objectif du nouveau comit&eacute; directeur est tr&egrave;s simple : continuer &agrave;  d&eacute;velopper le club et offrir &agrave; nos membres, de tous &acirc;ges et tous niveaux, les meilleures conditions de jeu possibles dans un cadre convivial o&ugrave; nous sommes tous fiers de porter les couleurs du TC le M&eacute;e.\r\nPour cela, &agrave; un horizon de 5 ans, nous voulons :\r\nAvoir r&eacute;alis&eacute; un grand plan de modernisation de nos infrastructures pour replacer le TC Le M&eacute;e &agrave; la pointe des clubs r&eacute;gionaux. Ceci comprend :\r\nLa mise en place du paiement en ligne (d&eacute;but 2021)\r\nLa r&eacute;fection totale des terres battues ext&eacute;rieures (Printemps 2021) \r\nLa mise en place d&rsquo;une nouvelle bulle avec l&rsquo;aide de la mairie (2021/2022)\r\nLa modernisation de la salle de fitness et des vestiaires \r\nAm&eacute;liorer notre partenariat avec F&ecirc;te le Mur en signant une nouvelle convention\r\nMultiplier nos actions dans les &eacute;coles\r\nD&eacute;velopper notre structure paratennis et tennis sant&eacute;\r\n</br></br>\r\nA l&rsquo;heure actuelle 368 adh&eacute;rents dont 304 jeunes ont la chance d&rsquo;&ecirc;tre adh&eacute;rent au club, notre objectif est de continuer d&rsquo;augmenter nos effectifs en maintenant la m&ecirc;me qualit&eacute; d&rsquo;accueil.\r\nNous aurons besoin du support de tous nos partenaires pour mettre en place ce projet. Pour cela, nous pouvons compter sur le soutien de notre mairie ainsi que de la f&eacute;d&eacute;ration.\r\nNous souhaitons aussi rechercher de nombreux partenaires &agrave; l&rsquo;avenir.\r\n</br></br>\r\nCe projet est celui de tout un club et nous accueillons toute aide &agrave; bras ouverts.\r\nLe comit&eacute; est extr&ecirc;mement motiv&eacute; pour faire aboutir le plan. Pour amener le club ou nous voulons, c&rsquo;est-&agrave;-dire cr&eacute;er un lieu de vie et de pratique pour tous, nous aurons besoin de toute l&rsquo;aide possible des membres. Ce projet est celui de tout un club, n&rsquo;h&eacute;sitez pas &agrave; nous contacter pour apporter votre pierre &agrave; l&rsquo;&eacute;difice, quel que soit votre investissement.\r\n</br></br>\r\nPour finir, nous avons la chance de pouvoir nous appuyer sur une &eacute;quipe p&eacute;dagogique de grande qualit&eacute; et tr&egrave;s motiv&eacute;e avec &agrave; sa t&ecirc;te Da silva Fabien. Je leur en suis reconnaissant et les encourage avec toute mon &eacute;nergie.\r\n</br></br>\r\nVeuillez croire en ma plus haute motivation pour servir notre club en tant que pr&eacute;sident.\r\n</br></br>\r\nTous ensemble pour le TC Le M&eacute;e, et vive le tennis !'),
(5, 'Marteau', 'Laurence', 'tr&eacute;sori&egrave;re', 'tresoriere.jpg', NULL),
(8, 'Marcoin', 'Lucille', 'secr&eacute;taire g&eacute;n&eacute;rale', 'secretaire-generale.jpg', NULL),
(9, 'Sirai', 'Tarik', 'commission jeunes', 'tarik.jpg', NULL),
(10, 'Montagnac', 'A&iuml;da', 'commission jeunes', 'aida.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `carrousel`
--

CREATE TABLE `carrousel` (
  `id_carrousel` int(11) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `visuel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carrousel`
--

INSERT INTO `carrousel` (`id_carrousel`, `titre`, `visuel`) VALUES
(1, 'Promis, d&egrave;s le confinement fini ...', 'raclette.jpeg'),
(2, 'Ev&egrave;nement tennis du moment ...', 'evenement-ten.jpg'),
(3, 'L\\\'&eacute;cole de tennis au M&eacute;e sur Seine', 'ecole.jpg'),
(4, 'Pratique, je r&eacute;serve mon terrain !', 'reserver.jpg'),
(5, 'Toutes les actus du moment', 'actus-club.jpg');

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
(2, 'Poteau', 'Brandon', 'DE', 'brandon-poteau.jpg', NULL),
(3, 'Macouin', 'Lucille', 'AMT', 'lucille-marcoin.jpg', NULL),
(4, 'Foras', 'Michel', 'AMT / handi-tennis', 'michel-foras.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id_equipe` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `sexe` tinyint(1) NOT NULL DEFAULT '0',
  `categorie` varchar(15) NOT NULL,
  `id_joueur1` int(11) NOT NULL,
  `id_joueur2` int(11) NOT NULL,
  `id_joueur3` int(11) NOT NULL,
  `id_joueur4` int(11) NOT NULL,
  `id_joueur5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nom`, `sexe`, `categorie`, `id_joueur1`, `id_joueur2`, `id_joueur3`, `id_joueur4`, `id_joueur5`) VALUES
(1, 'Equipe 1', 0, 'senior', 2, 1, 0, 0, 0),
(4, 'Equipe 2', 0, 'senior', 2, 1, 0, 0, 0),
(5, 'Equipe 3', 1, '15/16', 4, 5, 0, 0, 0);

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
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL,
  `date_reception` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id_message`, `date_reception`, `nom`, `prenom`, `tel`, `email`, `message`) VALUES
(4, '2020-11-10 18:13:52', 'Marteau', 'Lucille', '0644444444', 'l@gmail.com', 'ipsum'),
(5, '2020-11-10 18:50:56', 'Dupont', 'Mickael', '0610101010', 'm@gmail.com', 'lorem'),
(6, '2020-11-20 09:24:26', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'blabla'),
(7, '2020-11-20 09:27:04', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'bla'),
(8, '2020-11-20 09:27:15', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'bla'),
(10, '2020-11-20 09:28:13', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'bla'),
(12, '2020-11-20 09:36:26', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'oh yeah'),
(13, '2020-11-20 09:38:39', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'ca y&eacute;'),
(14, '2020-11-20 09:53:27', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'test'),
(15, '2020-11-20 10:04:20', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'test'),
(16, '2020-11-20 10:04:40', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '???'),
(17, '2020-11-20 10:05:20', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '!!!'),
(18, '2020-11-20 10:08:47', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'gr'),
(19, '2020-11-20 10:13:23', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(20, '2020-11-20 10:15:45', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(21, '2020-11-20 10:16:18', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(22, '2020-11-20 10:18:58', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(23, '2020-11-20 10:20:38', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(24, '2020-11-20 10:23:14', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(25, '2020-11-20 10:25:55', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(26, '2020-11-20 10:26:22', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(27, '2020-11-20 10:27:06', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', '23'),
(28, '2020-11-20 10:31:57', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'lorem'),
(29, '2020-11-20 10:32:29', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'loremipsum'),
(30, '2020-11-20 10:33:20', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'enfin'),
(31, '2020-11-20 11:45:08', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'enfin'),
(32, '2020-11-20 11:45:17', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'enfin'),
(33, '2020-11-20 11:46:00', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'enfin'),
(34, '2020-11-20 11:46:19', 'Auf&egrave;vre', 'Maud', '0677232348', 'maud.aufevre@gmail.com', 'oh yeah');

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
(2, 'Tennis Compagnie', 'tennis-compagnie.jpg', 'Phasellus vestibulum orci vel mauris. Fusce quam leo, adipiscing ac, pulvinar eget, molestie sit amet, erat. Sed diam. Suspendisse eros leo, tempus eget, dapibus sit amet, tempus eu, arcu. Vestibulum wisi metus, dapibus vel, luctus sit amet, condimentum quis, leo. Suspendisse molestie. Duis in ante. Ut sodales sem sit amet mauris. Suspendisse ornare pretium orci. Fusce tristique enim eget mi. Vestibulum eros elit, gravida ac, pharetra sed, lobortis in, massa. Proin at dolor. Duis accumsan accumsan pede. Nullam blandit elit in magna lacinia hendrerit. Ut nonummy luctus eros. Fusce eget tortor.', 'www.fft.fr'),
(4, 'Ville du M&eacute;e sur Seine', 'logo-le-mee-sur-seine.jpg', 'Vestibulum wisi metus, dapibus vel, luctus sit amet, condimentum quis, leo. Suspendisse molestie. Duis in ante. Ut sodales sem sit amet mauris. Suspendisse ornare pretium orci. Fusce tristique enim eget mi. Vestibulum eros elit, gravida ac, pharetra sed, lobortis in, massa. Proin at dolor. Duis accumsan accumsan pede. Nullam blandit elit in magna lacinia hendrerit. Ut nonummy luctus eros. Fusce eget tortor.', 'www.google.fr');

-- --------------------------------------------------------

--
-- Structure de la table `programme_saison_club`
--

CREATE TABLE `programme_saison_club` (
  `id_evenement` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `visuel` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `contenu` text NOT NULL,
  `contact` text NOT NULL,
  `debut_affichage` date NOT NULL,
  `fin_affichage` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `programme_saison_club`
--

INSERT INTO `programme_saison_club` (`id_evenement`, `nom`, `visuel`, `date_debut`, `date_fin`, `contenu`, `contact`, `debut_affichage`, `fin_affichage`) VALUES
(2, 'Soir&eacute;e raclette', 'evenement-club.jpg', '2021-01-14', '2020-11-14', 'Descriptif de l\\\'&eacute;v&egrave;nement', 'El&eacute;ments de contact pour infos et inscriptions', '2020-11-08', '2020-11-19'),
(5, 'Week-end Marathon', 'tennis-2.jpg', '2020-12-19', '2020-12-20', 'Descriptif de l\\\'&eacute;v&egrave;nement', 'El&eacute;ments de contact pour infos et inscriptions', '2020-12-01', '2020-12-20');

-- --------------------------------------------------------

--
-- Structure de la table `programme_saison_tennis`
--

CREATE TABLE `programme_saison_tennis` (
  `id_evenement` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `visuel` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `contenu` text NOT NULL,
  `contact` text NOT NULL,
  `debut_affichage` date NOT NULL,
  `fin_affichage` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `programme_saison_tennis`
--

INSERT INTO `programme_saison_tennis` (`id_evenement`, `nom`, `visuel`, `date_debut`, `date_fin`, `contenu`, `contact`, `debut_affichage`, `fin_affichage`) VALUES
(1, 'Matchs par &eacute;quipes adultes', 'tennis-1.jpg', '2021-04-16', '2021-05-21', 'Descriptif de l\\\'&eacute;v&egrave;nement', 'El&eacute;ments de contact pour infos et inscriptions', '2020-11-08', '2021-05-22');

-- --------------------------------------------------------

--
-- Structure de la table `tournois`
--

CREATE TABLE `tournois` (
  `id_tournoi` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `disciplines` text NOT NULL,
  `classements` text NOT NULL,
  `tarif_adultes` int(2) DEFAULT NULL,
  `tarif_jeunes` int(2) DEFAULT NULL,
  `juge_arbitre` varchar(30) NOT NULL,
  `prix_vainqueurs` varchar(30) NOT NULL,
  `prix_finalistes` varchar(30) NOT NULL,
  `prix_demi_fin` varchar(30) NOT NULL,
  `num_homologation` varchar(50) NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tournois`
--

INSERT INTO `tournois` (`id_tournoi`, `nom`, `date_debut`, `date_fin`, `disciplines`, `classements`, `tarif_adultes`, `tarif_jeunes`, `juge_arbitre`, `prix_vainqueurs`, `prix_finalistes`, `prix_demi_fin`, `num_homologation`, `contact`) VALUES
(1, 'Tournoi d\\\'hiver 2021', '2021-01-17', '2021-02-17', 'simple dames / simple messieurs', 'open', 17, 13, 'Fabien Da Silva', '300', '150', '0', 't5477851545 50 74 00', 'Fabien Da Silva au 06 80 46 20 22 ou par mail: fabien.dasilva@fft.fr'),
(2, 'Tournoi d\\\'&eacute;t&eacute; 2021', '2021-06-16', '2021-07-16', 'simple dames / simple messieurs', 'open', 20, 15, 'Fabien Da Silva', '150&euro;', '75&euro;', '0', 'hryjutiofyuywtrsey', 'Fabien Da Silva\r\n0680462022\r\nfabien.dasilva@fft.fr'),
(5, 'Tournoi de No&euml;l', '2020-12-19', '2021-01-03', 'simple dames / simple messieurs', 'NC &agrave; 15/1', 20, 17, 'Fabien Da Silva', '150&euro;', '75&euro;', '0', 'hryjutiofyuywtrsey', 'blabla');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `pass`) VALUES
(1, 'fabien.dasilva@fft.fr', '7fb6f45c86edae1ee5570c794054474c');

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
-- Index pour la table `adhesions`
--
ALTER TABLE `adhesions`
  ADD PRIMARY KEY (`id_adhesion`);

--
-- Index pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `carrousel`
--
ALTER TABLE `carrousel`
  ADD PRIMARY KEY (`id_carrousel`);

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
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_equipe`),
  ADD KEY `id_joueur1` (`id_joueur1`) USING BTREE,
  ADD KEY `id_joueur2` (`id_joueur2`),
  ADD KEY `id_joueur4` (`id_joueur4`),
  ADD KEY `id_joueur5` (`id_joueur5`),
  ADD KEY `id_joueur3` (`id_joueur3`) USING BTREE;

--
-- Index pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD PRIMARY KEY (`id_joueur`),
  ADD KEY `id_classement` (`id_classement`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id_partenaire`);

--
-- Index pour la table `programme_saison_club`
--
ALTER TABLE `programme_saison_club`
  ADD PRIMARY KEY (`id_evenement`);

--
-- Index pour la table `programme_saison_tennis`
--
ALTER TABLE `programme_saison_tennis`
  ADD PRIMARY KEY (`id_evenement`);

--
-- Index pour la table `tournois`
--
ALTER TABLE `tournois`
  ADD PRIMARY KEY (`id_tournoi`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actus`
--
ALTER TABLE `actus`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `adhesions`
--
ALTER TABLE `adhesions`
  MODIFY `id_adhesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `bureau`
--
ALTER TABLE `bureau`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `carrousel`
--
ALTER TABLE `carrousel`
  MODIFY `id_carrousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `joueurs`
--
ALTER TABLE `joueurs`
  MODIFY `id_joueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id_partenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `programme_saison_club`
--
ALTER TABLE `programme_saison_club`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `programme_saison_tennis`
--
ALTER TABLE `programme_saison_tennis`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tournois`
--
ALTER TABLE `tournois`
  MODIFY `id_tournoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actus`
--
ALTER TABLE `actus`
  ADD CONSTRAINT `actus_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`id_joueur1`) REFERENCES `joueurs` (`id_joueur`),
  ADD CONSTRAINT `equipe_ibfk_2` FOREIGN KEY (`id_joueur2`) REFERENCES `joueurs` (`id_joueur`);

--
-- Contraintes pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD CONSTRAINT `FK` FOREIGN KEY (`id_classement`) REFERENCES `classements` (`id_classement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
