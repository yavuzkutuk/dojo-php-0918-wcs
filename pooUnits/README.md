# POO - Warcrafts Units

## Objectifs : Utiliser l’héritage


1. Créer un programme dans un fichier index.php. L’unité de base (classe Unit) est l’équivalent d’un paysan.
2. Créer les classes représentées dans le schéma UML ci-contre dans le dossier src (les flèches représentent l’héritage).
2. Une fois ces classes créées :
    * Les unités basiques ont une vitesse de 1 (elles se déplacent de 1 en 1).
    * Les elfes ont une vitesse de 5.
    * Les soldats ont une vitesse de 2.
2. La position des unités est représentée par un tableau [x, y] initialisé à la position [0,0].
2. La méthode walk() prend un paramètre de type string qui indique la direction ('right', 'left', 'top', 'bottom'). Uniquement ces valeurs sont autorisées.
2. Lors d’un echo sur un objet, ce dernier doit afficher sa position (revoir le cours 1).
La méthode attack() affiche juste une phrase “à l’attaque”.
