-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 22 Février 2017 à 11:46
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'modo'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `role`) VALUES
(1, 'Administrateur', 'admin@localhost', '70ccd9007338d6d81dd3b6271621b9cf9a97ea00', 'FantZ2s6G4UXRRX9rvOl', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `post_id`, `date`, `seen`) VALUES
(1, 'Waziri', 'waziri.diego@gmail.com', 'test', 22, '2017-02-01 10:37:24', 1),
(2, 'Waziri', 'waziri_d15@myges.fr', 'Je teste', 21, '2017-02-01 10:45:47', 1),
(3, 'DiegoWaziri', 'waziri.diego@gmail.com', 'tersdfd fd', 21, '2017-02-01 11:10:00', 1),
(4, 'Waziri', 'waziri.diego@gmail.com', 'Test', 23, '2017-02-19 19:53:23', 1),
(5, 'Diego', 'waziri.diego@gmail.com', 'Mdrrr', 25, '2017-02-22 10:30:41', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `writer` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'post.png',
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL,
  `frontpage` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `writer`, `image`, `date`, `posted`, `status`, `frontpage`) VALUES
(3, 'Le framework MaterializeCSS', 'Créé et conçu par Google, le Material Design est un langage de conception qui combine les principes classiques d''un design réussi ainsi que l''innovation et la technologie. \n\nLe but de Google et de développer une technique de conception pour une expérience utilisateur unifiée au travers de leurs produits sur n''importe quelle plateforme.\n\nMaterial est la métaphore\nLa métaphore du Material Design définie la relation entre l''espace et le mouvement. L''idée est que la technologie est inspirée du papier et de l''encre et est utilisée afin de faciliter la création et l''innovation. Surfaces et bords fournissent des repères visuels familiers qui permettent aux utilisateurs de comprendre rapidement la technologie au-delà du monde physique.\n\nFranc, animé, voulu\nLes éléments et les composants tels que grilles, typographie, couleurs et médias ne sont pas seulement plaisants à voir, il créent aussi un sens de la hiérarchie, du sens et de l''attention.\n\nLe mouvement donne du sens\nLe mouvement permet à l''utilisateur de faire la parallèle entre ce qu''il voit à l''écran et la vie réelle. En fournissant à la fois un retour et de la familiarité, ceci permet à l''utilisateur de s’immerger aisément dans une technologie nouvelle. Le mouvement est cohérent et continu en plus de donner à l''utilisateur des informations supplémentaires sur les élements et trasnformations.', 'Administrateur', '3.jpg', '2016-01-08 20:55:14', 1, 0, 0),
(20, 'Article avec image d''un bureau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet magna eget iaculis sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mi nisi, aliquet non viverra eget, hendrerit eleifend enim. Praesent finibus tortor at scelerisque varius. Etiam malesuada eros lobortis neque ullamcorper, quis aliquet arcu ornare. Nam vulputate quam turpis, eget varius massa lacinia ut. Phasellus laoreet maximus consectetur. Nam pulvinar arcu massa, in aliquam diam tempus at. Ut ac quam cursus elit porttitor aliquam pharetra sed ligula. Nam eleifend eleifend erat, a congue nisi. Duis dapibus facilisis nulla, a gravida velit posuere vel. Suspendisse ac iaculis lacus. Integer ornare velit sapien, ac vulputate arcu ultricies nec. Suspendisse id felis sagittis, eleifend neque tempor, egestas ligula. Cras quis diam consectetur, pharetra justo facilisis, dictum ipsum. Suspendisse nec mauris a nibh iaculis convallis in sit amet justo.\n\nPhasellus purus nunc, pharetra at neque nec, semper placerat eros. Maecenas vel commodo nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ultrices mauris vel dapibus dignissim. Duis porttitor a augue at blandit. Nulla facilisi. Quisque iaculis, eros vitae egestas pulvinar, dolor sapien ultricies massa, eget imperdiet erat mi id dui. Pellentesque et pretium purus. Aenean lacinia turpis quis orci fringilla pellentesque. Praesent at dapibus justo, eget interdum nulla.\n\nPhasellus in sapien laoreet, ullamcorper orci vitae, congue erat. Donec nec pharetra mi, eu accumsan risus. Mauris vestibulum justo ultrices venenatis semper. Donec rhoncus, justo a ullamcorper tempus, leo felis varius ex, quis hendrerit velit purus et dui. Suspendisse sed nibh risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus eros elit, tempus id lacus sit amet, vulputate porta enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum commodo felis lacus, vel aliquet ligula ultricies sed.\n\nEtiam condimentum felis eu nisl vestibulum suscipit. In mollis sodales leo, vitae pretium odio faucibus vel. Nulla porttitor accumsan nunc, vitae ornare tortor dignissim ac. Etiam pretium, ipsum non ultrices pharetra, tellus arcu porta nulla, ut scelerisque nunc tortor vel ligula. Quisque mi diam, fringilla nec sapien gravida, viverra cursus libero. Proin tristique lobortis enim, vel blandit sem. Donec posuere est vitae nibh suscipit, ut porttitor sem malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris at mauris at turpis egestas egestas. Aenean congue ullamcorper dolor sed varius. Integer nec malesuada est. Integer viverra mattis orci, at aliquet enim dictum nec.', 'Administrateur', '20.jpg', '2016-01-08 20:54:46', 1, 0, 0),
(21, 'Le Choc des Olypmpiques', 'L''OM a éliminé l''OL en seizièmes de finale de la Coupe de France (2-1 a.p) grâce à des buts de ses défenseurs Fanni et Doria.\n\nLe match : 2-1 (aprés prolongations)\n\nOn les avait quittés il y a dix jours au terme d''une victoire nette et sans bavure de l''OL (3-1). Mais depuis, l''OM a fait le plein de confiance face à Montpellier en L1 tandis que Lyon a perdu gros face à Lille. Ce différentiel de confiance entre les deux équipes s''est vu dès les premiers instants, l''OM mettant une énorme pression sur le but de Lopes. Après trois tentatives de Sanson (8e), Cabella (16e) puis Rolando (17e), qui a trouvé la barre, c''est finalement Rod Fanni qui a ouvert le score d''une tête décroisée, à la réception d''un coup franc tiré par l''excellent Maxime Lopez (24e).\n\nApproximatif dans tous les secteurs du jeu, Lyon a essayé de réagir par à-coups, à l''image de Rachid Ghezzal, auteur d''une belle frappe de peu à côté (29e). Mais à la mi-temps, les hommes de Bruno Genesio pouvaient s''estimer heureux de n''être menés que d''un but, Lopez et Thauvin ayant été tout proches du 2-0 (44e). Lyon a laissé passer l''orage, avant de se métamorphoser à l''heure de jeu sous l''impulsion de Nabil Fekir et Memphis Depay, entrés en jeu à la place de Mathieu Valbuena et Rachid Ghezzal, trop imprécis. C''est sur un centre de Fekir, après une accélération qui a laissé toute la défense marseillaise sur place, que Corentin Tolisso a égalisé (64e).\n\nAnthony Lopes a préservé ce nul en sortant deux parades exceptionnelles sur des tirs lointains de Maxime Lopez (65e) et Andre Anguissa (77e), amenant les deux équipes vers une prolongation. Trente minutes durant lesquelles les occasions ont été rares, jusqu''à ce que Rémy Cabella parvienne à centrer au second poteau pour Doria (109e). Le défenseur, entré à la place de Patrice Evra blessé, a marqué un vrai but d''avant-centre, comme il y a dix jours, mais bien plus important cette fois puisqu''il est synonyme de qualification pour les huitièmes de finale de la Coupe de France.\n\nLe joueur : Rémy Cabella était en forme\n\nPeut-être avait-il à coeur de prouver qu''il peut être davantage qu''une doublure de Dimitri Payet. Contrairement à l''international français, entré en prolongation et qui n''a pas pu montrer grand-chose, Rémy Cabella a été excellent. Outre sa passe décisive pour Doria qui a montré qu''il était un des rares joueurs titulaires à avoir encore du carburant à ce moment du match, l''ex-Montpelliérain a tenté des frappes dangereuses (16e, 103e) et a gêné les Lyonnais par son activité sur le flanc gauche. Si son entente dans les petits espaces avec Maxime Lopez et Florian Thauvin est précieuse, il faudra attendre pour voir si une complicité peut naître avec Patrice Evra dans le couloir. ', 'Administrateur', 'post.png', '2017-01-31 12:55:06', 1, 0, 0),
(22, 'Mondial Auto 2017 : Renault Trezor', 'Entrez dans un futur passionnant !Renault TREZOR Concept inaugure sa nouvelle concept-car. \n\n\nTREZOR va plus loin en exprimant la maturité des sentiments et l’engagement.\n\nTREZOR représente ainsi la maturité du design Renault qui est devenu depuis 2014, en Europe, la première raison d’achat d’un véhicule de la marque.\nRenault dispose désormais d’une gamme complètement renouvelée et enrichie qui offre des véhicules complémentaires ayant chacun une forte identité. Avec TREZOR, nous maintenons le cap de ce renouveau tout en débutant une nouvelle histoire du cycle de la vie.\n\nCe concept-car offre une liberté d’expression et ouvre la voie des tendances de nos prochains véhicules. On pourrait résumer ces tendances ainsi : French Design and Easy Life.', 'Administrateur', '22.jpg', '2017-02-01 10:03:21', 1, 0, 0),
(23, 'McDonald''s lance le distributeur automatique', 'Une première historique. McDo installe ce mardi le premier distributeur automatique de Big Mac.\r\n\r\nCela se passe à Boston, precisément au 540 Commonwealth Avenue, à Kenmore Square. La file d''attente pour l''utiliser devrait être conséquente. Il faut dire que la machine n''est installée que pour la journée, et seulement quelques heures, de 11h à 14h. Surtout, elle délivre le burger star de McDo gratuitement. Il suffit de laisser à la machine les commandes de votre compte Twitter, sur lequel elle publiera en votre nom un unique message: &quot;check out the New Big Mac&quot; (regarde le nouveau Big Mac en VF).\r\n\r\nJustement -et c''est là que l''opération commerciale prend tout son sens- le distributeur prépare aussi deux toutes nouvelles déclinaisons de l''emblématique burger: le Mac Jr et le Grand Mac. Un moyen pour la chaîne de convertir les adeptes du Big Mac, vendu à 500.000 unités chaque jour outre-Atlantique, à ses versions modernes.\r\n\r\nAu-delà de cet objectif, ce robot représente-t-il l''avenir du géant du fast-food? La technologie de confection automatique des burgers pourrait en effet permettre à McDo de réduire sa masse salariale. Notamment dans des États comme la Californie, qui viennent de voter une augmentation du salaire minimum. La chaîne de fast-food pourrait aussi servir plus rapidement ses clients. Et la démarche serait cohérente pour la firme qui installe déjà des bornes tactiles de commandes dans ses magasins.\r\n\r\nL''automatisation, pas toujours plus rentable\r\n\r\nEncore faudrait-il que la technologie développée par l''ATM Big Mac (le nom donné au distributeur de Boston) soit plus performante que celle d''AMF. L''entreprise avait conçu Orbis, un ensemble de machines à assembler des burgers dans les années 60, comme le rapporte Quartz. Mais le dispositif était extrêmement encombrant: six machines connectées les unes aux autres pour griller, découper, mélanger, assembler et emballer les burgers. Et l''ensemble coûtait très cher: 1.500 dollars. Surtout, le système nécessitait l''intervention d''une opératrice pour prendre la commande puis actionner ensuite les robots. Finalement, les restaurants ont jugé plus rentable de faire travailler les humains, et AMF s''est reconvertie dans l''automatisation des pistes de bowling.\r\nEt même si l''ATM de McDo est plus efficace que les humains, il ne sait fabriquer que le Big Mac et ses déclinaisons, pas toute la gamme de ses restaurants. Peu probable, donc, qu''il puisse les remplacer pour le moment. Un scénario plus plausible serait que la firme installe ces distributeurs à des endroits stratégiques, pour compléter son offre. Un peu sur le modèle des Originals M, ces petits comptoirs qui ont fleuri en France ces derniers mois, et ne proposent qu''une sélection réduite des produits phares de McDo.', 'Administrateur', '23.jpg', '2017-02-22 00:51:57', 1, 0, 0),
(24, 'test', 'test', 'Administrateur', 'post.png', '2017-02-22 10:12:07', 0, 0, 0),
(25, 'Matuidi, sa femme et Google', 'Mieux vaut tard que jamais, a dû se dire Matuidi. Après la victoire écrasante des Parisiens ce mardi face au FC Barcelone (4-0), le milieu de terrain français a voulu souhaiter une joyeuse fête des amoureux à sa femme.\r\n\r\nEt si lorsqu''il s''agit de se farcir du Catalan dans l''entrejeu en Ligue des champions, Blaise est à l''aise, au moment de déclarer sa flamme, le community manager de l''international français fait preuve d''un peu moins de maestria. Pour aller plus vite, celui-ci a simplement recherché « Matuidi femme » sur Google, et n''a même pas pris la peine de le masquer. Une petite capture d''écran et hop, c''est tweeté.', 'Administrateur', '25.png', '2017-02-22 10:07:56', 1, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;