# Evaluation DWM8 Readme

Voici un peu de lecture pour Mr Morgan Corroyer, formateur émérite à la chevelure teintée d'argent.

### Etapes complétées
- Installation d'une Vagrant et de VirtualBox
- Installation d'un Laravel et des plugins nécessaires sur la vagrant (PHP, MySQL Server, Apache2)
- Mise en place d'une BDD (la version initiale est faite via DataGrip, mais quelques tables complementaires sont générées via des migrations)
- Mise en place de relations One2Many et Many2Many via les méthodes d'Eloquent
- Recupération des données de la bdd et affichage dans un tableau sur la homepage (pour le stock de disques)
- Stylisation minimum de la page, juste pour pouvoir travailler.
- Insertion de nouvelles données via l'app
- Mise à jour données via l'app



### Etapes restantes
- Recherches de disques via artiste ou via label par exemple.
- Récupération de données complémentaires via l'app
- Habillage et utilisation de scripts JS pour celui ci.

### Technos utilisées

- Migrations et creation DB 'a la main'
- Seeding via Faker
-
-

### Points of interest
- Pour afficher mon menu sur toutes les vues sauf une j'ai créé un flag que je renvoie dans la vue, (j'ai voulu le faire avec blade, donc solution fonctionnelle mais peut etre pas tres élégante)
