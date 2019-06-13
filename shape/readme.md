# Dojo POO

TL;DR: Créer les classes du  développez les classes suivantes (dossier `src`) : 

- Shape.php
- Circle.php
- Rectangle.php
- Square.php 

Les tests s'effectueront dans le fichier : `index.php` 

## Spécifications classe *Shape.php* : 
- définir sa couleur
- récupérer la couleur
- par défaut la couleur est noir


Les classes Rectangle,Square et Circle héritent de Shape.
Les classes doivent pouvoir surcharger la couleur, les méthodes de calcul de l'aire et du  périmètre.

## Spécifications classe *Circle.php* : 
- un rayon ou radius  en anglais (float)
- par défaut on a une constante de classe : `pi = 3.14`
- on peut calcul l'aire  (getArea) : `radius^2 * 3.14`
- on peut calculer le périmètre (getPerimeter): `2 * 3.14 * radius`
- définir et récupérer son radius
- par défaut a un radius de 1 
 

## Spécifications classe *Rectangle.php* : 
- définir sa Longueur type Entier (`width`) par défaut : 1.0
- définir sa Hauteur  type Entier (`height`) par défaut : 2.0
- récupérer sa hauteur 
- récupérer sa longueur 
- calcul son périmètre (getPerimeter) : `(Longueur + Hauteur ) * 2`
- calcul son aire (getArea) : `(Longueur * Hauteur )`

## Spécifications classe *Square.php* (carré) 
- hérite d'un Rectangle
- un carré a longueur = hauteur
- récupérer la valeur de son côté : `side`

## Installer le DOJO pour avoir l'autolaod

`composer install`