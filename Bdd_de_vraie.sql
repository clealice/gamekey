insert into Compte(1,'admin', 'admin');
insert into Compte(2,'sam', 'sam');
insert into Compte(3,'luis', 'goncalves');
insert into Compte(4,'gilliane', 'thison');
insert into Compte(5,'Sebastian', 'Sebastian');


insert into Client(1, 'Thomas', 'Samael', '116 Bis Cours Jean Jaures, 38100, Grenoble', '0711223344', 'sam@IUT2.com', );
insert into Client(2, 'goncalves', 'Luis', '2 Rue du coin, 38100, Grenoble', '0988558833', 'luis@IUT2.com', );

insert into Commande(123, '01/05/2018', 55, 2, 1);
insert into Commande(125, '04/05/2018', 22, 1, 2);

-- insert into Jeu( reference_jeu integer, nom_produit VARCHAR,	descriptif_court_jeu VARCHAR,
                    --descriptif_long_jeu VARCHAR, date_sortie DATE, prix REAL,	note REAL, url_site_officiel ,url_image VARCHAR,	editeur VARCHAR);

insert into Jeu(1,'GTA V', 'Jeu video de GTA 5 est le nouvel épisode de la célèbre série de Rockstar Games. L histoire du jeu se déroulera à Los Santos, une ville inspirée de Los Angeles et l on pourra visiblement incarner plusieurs personnages. La particularité de GTA V, c est de proposer 3 personnages avec lesquels il sera possible de jouer. Michael, Franklin et Trevor sont donc les héros du jeu et le joueur pourra switcher d un personne à un autre sans le moindre souci.',
                  'Los Santos : une métropole tentaculaire avec ses gourous, ses starlettes et ses gloires du passé fanées qui faisaient jadis rêver le monde entier et qui, aujourd hui, luttent pour ne pas sombrer dans l oubli alors que le pays est rongé par la crise et la télé-réalité bas de gamme Au milieu de ce chaos ensoleillé, trois criminels très différents jouent gros pour leur avenir : Franklin, un jeune arnaqueur qui veut passer à la vitesse supérieure ; Michael, le professionnel, un ex-détenu dont la retraite est beaucoup moins tranquille que prévue ; et enfin Trevor, le psychopathe du groupe, camé et mégalo. Le dos au mur, les trois hommes risquent le tout pour le tout dans une série de braquages aussi spectaculaires que dangereux. Avec le monde ouvert le plus vivant, le plus dynamique et le plus vaste à ce jour, Grand Theft Auto V mélange narration et gameplay de façon totalement inédite en vous permettant de prendre le contrôle des trois personnages principaux, quand vous le souhaitez, pour ne manquer aucun détail de leur histoire. Retrouvez tous les éléments qui ont fait le succès de la série, de la formidable attention apportée aux détails à l'approche satirique de la culture moderne, sans oublier une vision novatrice et ambitieuse du jeu en multijoueur dans un monde ouvert.',
                  '08/11/2017', 25, 5, 'https://www.rockstargames.com/V/restricted-content/agegate/form?redirect=https%3A%2F%2Fwww.rockstargames.com%2FV%2Ffr&options=MmQ5MzFlMWM3MWJhNjc0ZjRmZmU1OTRmZTdjMDM2YTgxNTk2NmQ1YmM4NmNmODY4MTQxMzI2MDNiZjJlNmM2Mvig6dXlnxYywhchkb78E0xNRFoAFnht+Y7ZDLsA+f4N&locale=fr_fr',
                  'https://gameratedgames.com/wp-content/uploads/2015/05/gtav-cover.jpg',
                  'Rockstar Games');

insert into Jeu(2, 'The Sims 4', 'Les Sims 4 est une simulation de vie qui permet au joueur de créer ses personnages et de les faire évoluer dans un univers que il customise lui-même.',
                  'Ce nouvel épisode fait apparaître les émotions qui sont déterminantes dans le ressenti et le évolution des sims. Celles-ci dépendent de leur environnement. Les sims peuvent désormais effectuer plusieurs tâches en même temps, contrairement aux autres épisodes.'
                    '04/09/2014', 6, 'https://www.ea.com/games/the-sims/the-sims-4/pc/store/mac-pc-download-base-game-standard-edition','https://originassets.akamaized.net/origin-com-store-final-assets-prod/55482/231.0x326.0/1011164_LB_231x326_fr_FR_%5E_2017-05-01-16-52-46_ac9b08159305019d7c9eb409afc306c0e05608ce.jpg', 'Electronic Arts');

insert into Jeu(3, 'Gran Turismo 5', 'Gran Turismo 5 est un jeu de courses sur PS3. Proposant une jouabilité orientée simulation, il permet de conduire avec 4 vues différentes dont une vue du cockpit.', );

  insert into Categorie('Action Adventure');
  insert into Categorie('Course');
  insert into Categorie('Simulation');
  insert into Categorie('Sport');
  insert into Categorie('Strategie');
  insert into Categorie('Petit Jeu');

  insert into Plateforme('PS3');
  insert into Plateforme('PS4');
  insert into Plateforme('PC');
  insert into Plateforme('XBOX');
  insert into Plateforme('WII');
  insert into Plateforme('PSVITA');
  insert into Plateforme('NINTENDO');

  insert into News(1, 'Chernobylite', 'Après avoir sorti Get Even en juin 2017, les polonais de The Farm 51 annoncent que ils sont déjà de retour aux affaires sur un nouveau projet de survival-horror : Chernobylite.

                      En juin dernier, The Farm 51 nous proposait Get Even, un jeu à mi-chemin entre enquête, aventure horrifique et action en vue FPS. Le titre mettait notamment en avant ses graphismes "photoréalistes" et son ambiance harmonisant parfaitement le gameplay à la bande-son. Avec Chernobylite, les développeurs polonais prennent une orientation plus marquée vers le survival-horror, en se attaquant à la thématique du drame de Tchernobyl, ayant eu lieu en 1986.

                      Chernobylite, un nouveau survival-horror dévoilé par The Farm 51 (Get Even)
                      Le titre proposera un mélange de conspiration, d’horreur, de survie, d’amour et d’obsession, le équipe de développement ayant passé du temps dans la zone de exclusion de Tchernobyl pour se imprégner au mieux de le ambiance qui règne sur ces lieux et récolter tout un tas de données afin de recréer au mieux le endroit. La centrale et ses environs seront ainsi modelisés avec le Unreal Engine 4 grâce à des scans 3D effectués sur place. Pour le moment, nous ne savons pas plus sur le contenu concret du projet, mais The Farm 51 nous promet du neuf dans les prochains mois, en nous livrant notamment les coulisses de leurs visites à Tchernobyl. Une page Facebook permet par ailleurs de suivre le actualité du jeu.

                      Pour le moment, Chernobylite ne dispose ni de une date de sortie ni même de plateforme de accueil, notre fiche du jeu indiquant PC par défaut.');

  insert into News(2, 'Suicide Guy', 'Suicide Guy est un jeu de action et un puzzle game prenant place au coeur de un rêve. Dans la peau de un personnage bonhomme, les joueurs devront traverser vingt-cinq niveaux, dont les puzzles se basent sur la physique du titre, le tout afin de le tirer de son sommeil.')
  insert into News(3, 'Far Cry 5', 'Avec son scénario extrêmement original, Far Cry 5 se présentait comme le épisode capable de renouveler la série entièrement. Si en termes de gameplay, cest une réussite, Ubisoft nous avait annoncé peu après le lancement que les affaires marchaient bien elles aussi.',
                  'Jeu trés interessante');


  insert into Administrateur(1, '192.168.1.125');
