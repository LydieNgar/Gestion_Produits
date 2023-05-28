-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 07 août 2022 à 01:55
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `application_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `quantite`, `photo`, `date`, `description`) VALUES
(4, 'Change - Chanel - 60ml', 56000, 27, 'images/change_coco.jpg', '2022-08-04', 'Pour Chanel, la vraie chance est celle que l’on provoque, un état d’esprit, une façon d’être. Avec ses notes fleuries relevées par la baie rose, CHANCE entraîne dans un tourbillon de fantaisie.'),
(5, 'Invictus - Paco Rabanne - 30ml', 57000, 60, 'images/invictus_paco.jpg', '2022-08-02', 'Admirez l\'homme dans toute sa puissance : le héros absolu. INVICTUS. Défié et béni par les dieux.\r\n'),
(6, 'J\'adore - Dior - 60ml', 52000, 55, 'images/jadore_dior.jpg', '2022-08-02', 'Dans J\'adore eau de parfum infinissime, les fleurs de J’adore se libèrent et se déploient pour composer cette fragrance sensuelle, puissante et enveloppante.\r\n'),
(7, 'Mademoiselle - Chanel - 60ml', 38000, 24, 'images/mademoiselle_coco.png', '2022-08-02', 'L’essence d’une femme libre et audacieuse. Un oriental féminin au caractère affirmé et pourtant d\'une étonnante fraîcheur.\r\n'),
(8, 'Miss Dior - Dior - 60ml', 32500, 19, 'images/miss_dior.jpg', '2022-08-02', 'Fleuries et fraîches, les notes olfactives de Miss Dior sont composées comme un bouquet de mille fleurs aux mille couleurs chatoyantes : une rose iridescente illuminée par une myriade de touches fraîches et florales.\r\n\r\n\r\n'),
(9, 'Olympea - Paco Rabanne - 45ml', 25000, 39, 'images/olympea_paco.jpg', '2022-08-02', 'L\'eau de parfum OLYMPEA de Paco Rabanne donne le pouvoir aux femmes. Des notes de vanille salée, de mandarine verte, de jasmin d\'eau et de fleur de gingembre se combinent pour créer un parfum envoûtant et charnel.\r\n'),
(10, 'Our Moment - One Direction - 60ml', 14000, 41, 'images/our_moment.jpg', '2022-08-04', 'Le parfum Our Moment est un parfum floral et fruité qui mêle des notes de pamplemousse, de groseille, de baies sauvages à des notes de freesia, de jasmin et de frangipanier.'),
(11, 'Red Temptation - Zara - 80ml', 48000, 7, 'images/red_temptation_zara.jpg', '2022-08-02', 'Eau de parfum avec les facettes chaudes et texturées des épices précieuses du safran et de la coriandre, l\'orange amère ajoute une touche fruitée et bariolée au bouquet floral ensoleillé.\r\n'),
(12, 'Red Vanilla - Zara - 200ml', 77000, 46, 'images/red_vanilla_zara.jpg', '2022-08-02', 'Eau de toilette orientale. Sa pyramide olfactive contient des notes de cassis, d\'iris et de vanille. C\'est une fragrance chaleureuse, élégante et nocturne.'),
(13, 'Sauvage - Dior - 60ml', 32000, 15, 'images/sauvage_dior.jpg', '2022-08-02', 'L’eau de parfum Sauvage de Dior est une fragrance masculine inspirée du désert à l\'heure du soleil couchant.\r\n'),
(14, 'Libre - Yves St Laurent - 45ml', 33000, 20, 'images/libre_ysl.jpg', '2022-08-02', 'Une intensité florale ardente pour une femme à la liberté rugissante qui vie selon ses instincts.\r\n'),
(16, 'My Kiwi Kiss - Yves Rocher - 80ml', 33000, 12, 'images/my_kiwikiss_yr.jpg', '2022-08-03', 'Couleurs pop, senteurs juteuses et acidulées, exprimez votre fantaisie et pétillez de joie.\r\nC’est l’association du kiwi et du gingembre qui donne cette senteur complètement addictive et énergisante. '),
(17, 'Ari Eau de parfum - Ariana Grande - 60ml', 51000, 50, 'images/ari_eau_de_parfum.jpg', '2022-08-03', 'Le parfum s\'ouvre avec la fraîcheur de poire, pamplemousse rose et le pétillant jus de framboise.\r\nL\'ultra féminin cœur floral avec un bouquet de muguet et rose molle en peluche dans un velouté d\'orchidée vanille crémeuse.'),
(19, 'Black Opium - Yves St Laurent - 60ml', 65000, 24, 'images/black_opium_ysl.jpg', '2022-08-04', 'Black Opium Eau de Parfum, une dose d\'adrénaline, pour une héroïne rock et chic en quête d\'extase'),
(20, 'Brume Parfumee - Yves Rocher - 30ml', 28000, 14, 'images/brume_parfumee_yr.jpg', '2022-08-03', 'Version aérienne et voluptueuse du parfum, la brume corporelle parfumée est plus qu’une nouvelle tendance. Créé et adulé, ce “sweet body mist\" comme ils l’appellent est le nouveau geste beauté.'),
(21, 'Phantom - Paco Rabanne - 60ml', 55000, 18, 'images/phantom_paco.jpg', '2022-08-03', 'Un sillage addictif : la fraîcheur verticale du citron et du vétiver, comme un shot d\'énergie, rencontre la sensualité d\'une lavande ultra-crémeuse et d\'une vanille boisée. Phantom est formulé à partir de l\'absolu de lavande bio, le vétiver d\'Haiti ou le Citron d\'Italie.'),
(22, 'Addict - Dior - 30ml', 23000, 50, 'images/addict_dior.jpg', '2022-08-04', 'L\'eau de parfum Dior Addict est une fragrance aux notes fleuries et fruitées où l\'essence de mandarine se mêle à la fleur d’oranger.\r\n\r\nIntense et vibrante, l\'eau de parfum dévoile l\'absolu jasmin sambac qui s\'estompe avec volupté, révélant une douceur féminine. '),
(23, 'Blue Seduction - Antonio Banderas - 45ml', 50000, 60, 'images/blue_seduction_antonio.jpg', '2022-08-04', 'Yes'),
(24, 'Icone - Penola Lawson - 60ml', 33000, 14, 'images/icone_penola_lawson.jpg', '2022-08-04', 'Charismatique et charnelle, Icône est une fragrance rayonnante où des notes florales solaires et vanillées s’allient aux senteurs acidulées de la mangue et de l’ananas.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `login` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`login`, `password`, `photo`) VALUES
('astrid', 'astrid', 'images/photo_astrid.jpg'),
('lydie', 'lydie', 'images/photo_lydie.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
