# Les commandes les plus utiles pour BASH, GIT et DOCKER


## BASH
* **pwd -help** => afficher les options disponibles.
* **pwd** => connaître l'emplacement du menu racine (chemin absolu).  

* **ls** => savoir ce que contient le répertoire courant.  
* **ls -a** => savoir ce que contient les autres répertoires.  
* **ls -help** => afficher les options disponibles.
* **cd Documents** => entrer dans le dossier.
* **ls Documents** => entrer dans le dossier et voir son contenu.
* **cd ..** => retour en arrière.
* **cd ../DevWeb/** => retourner directement dans un dossier précis.

* **cat texte.txt** => afficher le contenu d'un fichier.
* **mkdir Dossier** => créer un dossier.
* **touch fichier** => créer un fichier.
* **mv Cours Documents/** => déplacer un dossier/fichier.
* **mv Portfolio Mon_Portfolio.txt** => renommer un dossier/fichier.
* **rm -rf** => supprimer un dossier/fichier.

* **echo "Mon premier portfolio" >> Portfolio.txt** => permet d'écrire directement dans un fichier.
* **vim Portfolio.txt** => permet d'écrire dans un fichier en ligne de commande.
* **vim fichier01** => permet de créer un fichier01 et d'y écrire.
* **:i** => insérer du texte dans VIM.
* **:w** => sauvegarder.
* **:x** => sauvegarder et quitter.
* **:q** => quitter.

## GIT
* **git config --global user.name "Melany Lascoux"** => configurer les paramètres utilisateur.
* **git config --global user.email mlascoux@fabdunum.fr** => configurer l'adresse email.
* **git config --global core.editor "code --wait"** => lier GIT à VS Code.

* **git init** => créer un dépôt GIT.
* **git commit -m "Préciser la modification apportée"** => permet de valider les modifications apportées.
* **git log** => permet de voir le statut actuel du répertoire GIT HUB.
* **git checkout numéroducommit** => permet d'annuler les modification du commit.
* **git status** => permet de connaître la version actuelle des fichiers sur GIT HUB.

* **git remote add origin https://github.com/Melany-Lascoux/Portfolio_fabdunum** => permet de créer le lien entre GIT BASH et le répertoire GIT HUB.
* **git branch -M main** => permet de choisir la branche.

* **git add Readme.md** => enregistrer les modifications effectuées sur GIT HUB.
* **git push -u origin main** => permet d'envoyer du contenu sur le répertoire GIT HUB.
* **git push** => permet d'envoyer la modification sur le répertoire.

* **git clone https://github.com/Melany-Lascoux/Portfolio_fabdunum** => permet de copier le répertoire de GIT HUB.
