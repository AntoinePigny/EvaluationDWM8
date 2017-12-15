# Evaluation DWM8 Readme

Voici un peu de lecture pour Mr Morgan Corroyer, formateur émérite à la chevelure teintée d'argent.

### Etapes complétées
- Installation d'une Vagrant et de VirtualBox
- Installation d'un Laravel et des plugins nécessaires sur la vagrant (PHP, MySQL Server, Apache2)
- Mise en place d'une BDD (la version initiale est faite via DataGrip, sans migrations)
- Mise en place de relations One2Many et Many2Many via les méthodes d'Eloquent
- Recupération des données de la bdd et affichage dans un tableau (pour le stock de disques)
- Insertion de nouvelles données via une vue.
- Mise à jour données possible via une vue.
- Habillage et utilisation de petits scripts JS pour le site.



### Etapes restantes
- Recherches de disques via artiste ou via label par exemple.
- Récupération de données complémentaires via l'app (liste labels et genres par exemple qui ne sont actuellement insérable que lors de l'insertion d'un disque)

### Technos utilisées

- Migrations et creation DB 'a la main'
- Seeding et Factories (Faker)
- Jquery Select2 pour des selects multiples
- Animations CSS


### Points of interest
- Pour afficher mon menu sur toutes les vues sauf une j'ai créé un flag que je renvoie dans la vue, (j'ai voulu le faire avec blade, donc solution fonctionnelle mais peut etre pas tres élégante)


### Difficultés rencontrées
- la methode paginate fonctionne et je recevais bien l'array de données dans la vue mais la pethode links etait indiquée non existante tout comme render => Pagination non faite.
- Globalement beaucoup de temps perdu sur le style. Pour un resultat décevant. Ce qui m'a laissé trop peu de temps pour ajouter des fonctionnalités supplémentaires. De loin le pire problème, j'aurais du mettre bootstrap.

### Points de contentement
-L'élaboration de la db ainsi que le peuplement, l'edition et l'affichage de celle ci ont été assez simples,
- Une petite animation css sur mes tableaux.
