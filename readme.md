# Projet 6 : Personnalisez un thème WordPress pour une startup avec HTML, CSS et PHP



## Ressources
- Maquette + Prototype Figma
- Spécificités fonctionnelles
## Description
Dans le cadre de ce projet, ma mission consiste à développer un site de présentation pour l'entreprise Planty, une marque de boissons énergisantes à base de plantes. Le site sera créé en utilisant WordPress, avec l'utilisation de Gutenberg comme page builder. Le site sera composé de  quatre pages : la page d'accueil, la page "Nous rencontrer", la page "Précommande", et la page "mentions légales". Cependant, la page des mentions légales n'est pas à rédiger, en attente de contenu.



## Spécificités
- Le site doit être réalisé avec WordPress et être versionné avec Git et GitHub.
- Il doit être responsive, s’adapter et s’afficher correctement sur toutes les tailles d’écran (desktop, tablette et téléphone à partir de 320px sachant que les maquettes desktop doivent être totalement identiques et les adaptations pour tablettes et smartphones sont libres).
- Les lignes de code en HTML et CSS doivent passer au validateur du W3C.
- Le contenu des différentes pages (images et textes) doit être modifiable sans connaissance de code.
- Les formulaires doivent être fonctionnels : un mail doit être envoyé à planty.drinks@gmail.com, reprenant les informations renseignées dans les formulaires de contact et de précommande. 
- Le lien Admin du menu ne doit être affiché que lorsque l’internaute est connecté sur WordPress. J’ai donc utilisé un Hook comme demandé pour le développement de cette fonctionnalité.

## Choix de conception
- Thème de base : Blankslate,
- Création d'un thème enfant pour le personnaliser,
- Plugin Contact Form 7 : réaliser les formulaires demandés,
- PLugin All-in-One WP Migration : sauvegarde du site,
- Ajout du Hook ‘wp_nav_menu_items’ pour ajouter le lien « admin » dans le menu,
- Utilisation de la fonction « is_user_logged_in() » afin de savoir si l’utilisateur courant est connecté ou non pour affiché ou retiré le lien « Admin ».
