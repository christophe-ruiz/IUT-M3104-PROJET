# Projet PHP M3104

Noms : Steffen Alvarez Thomas Rippol Christophe Ruiz Alexis Vatin

URL du site : http://iut.cruiz.fr/

* Présentation du projet :     
  
  *   Notre site est un réseau social novateur. Les discussions peuvent au maximum contenir 10 réponses chacun (soit 11 messages en comptant le message original) composés de 1 ou 2 mots. Chaque utilisateur peut choisir de participer à un topic ouvert par un autre utilisateur ou par lui-même. Chaque visiteur ou utilisateur peut consulter un topic ayant été ouvert récemment. Il existe un système de "Like" pour indiquer qu'un topic est apprécié par la communauté.     

  * Rôles :  
     * Super Admin : Peut lire créer modifier ou supprimer un/des message(s) ou une/des discussion(s) ouverte(s) par les membres. Un super admin dispose d'un panneau d'outils accessible par le lien 'admin' en rouge, écrit en haut à gauche de la page. Il peut répondre autant de fois qu'il le veut aux discussions.
       
    * Membres : Il peut créer et lire des topics. Il peut modifier une seule fois chacun de ses messages et les supprimer de deux manières: remplacer le contenu par "Message supprimé" ou les détruire définitivement.  Il ne peut répondre qu'une seule fois à une discussion. S'il est le créateur d'une discussion, il a quand même le droit à une réponse.
    
    * Visiteurs : Il peut seulement lire les discussions ouvertes précédemment par les utilisateurs.  
    
* Les choix techniques :
    * HTML, CSS, PHP : Imposé.
    * AJAX : Plus de flexibilité pour les liens entre la base de donnée et le côté client en utilisant des fonctions PHP.
    * INI files : fichier plus faciles à manier que JSON, PHP met à disposition une fonction pour parser ces fichiers.

* Configuration logicielle conseillée : Mozilla Firefox.

* L'ensemble des identifiants de connexion :

    * Compte test :   
        * Identidiant : guest  
        * Mot de passe : guest        
        
    * Compte Admin :   
        * Identifiant : admin    
        * Mot de passe : root       
        
    * Base de données   
        * Host : https://mysql11.lwspanel.com/phpmyadmin/
        * Identifiant : cruiz1237388    
        * Mot de passe : bdni8pqery         
        
Un fichier (bd.sql) contient la base de données initiale.

Compte du système de version : https://github.com/christophe-ruiz/IUT-M3104-PROJET   

NB : Les commits réalisés par l'utilisateur Alexis sont biaisés. En effet nous avons réaliser la plus grande du CSS avec le compte utilisateur Alexis mais pas sur le GITHUB du projet pour éviter les erreurs lors de la modification. Une fois tout fini, nous avons fusionner les 2 projets cependant le nombre de commit n'a pas suivi. Voici le lien pour vérifier : https://github.com/AlexisVatin/travailcss/graphs/contributors


