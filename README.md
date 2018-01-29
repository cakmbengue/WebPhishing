Web Phishing
============
Système ou application Web de Phishing

Information
===========
```
Système de Phishing (Web Phishing)

@author: Cheikh A. Khadre MBENGUE

@location: Dakar (Senegal)

@Web-Phishing: open source, adaptable...
```

Description
===========
Web Phishing est avant tout un outil de sensibilisation, une application Web développée en PHP pour permettre aux spécialistes Sécurité dans les entreprises d'organiser des cas pratiques de phishing en interne. Son but est essentiellement de faciliter la sensibilisation du personnel d'entreprise avec des scénarios réalistes de cyberattaque.

Avertissement
=============
L'utilisation de Web Phishing pour attaquer des cibles sans consentement mutuel préalable est illégale. Le développeur n'est pas responsable de tout dommage causé par Web Phishing.

Technologies
============
* PHP
* JavaScript
* CSS

Installation
============
1. Télécharger puis décompresser l'application Web Phishing disponible à partir du lien suivant : 

```
https://github.com/cakmbengue/web-phishing/archive/master.zip
```

2. Editer le fichier "connectID.php" et ajouter votre adresse email en tant qu'attaquant à la ligne 12 (variable $own) comme l'indique la capture suivante:

![example_1](https://github.com/cakmbengue/web-phishing/blob/master/screen/screen1.png)

3. Renommer le dossier Web Phishing selon le nom de votre système puis le déployer dans un hébergement standard :

* Windows ou linux 
* Apache
* PHP

4. Tester l'url de l'application
```
ADRESSE-SERVEUR/nouveau-nom/index.php
```

Usage
=====
Web Phishing propose une interface Web avec un formulaire à remplir par la l'utilisateur/victime. Web Phishing envoie la saisie de la victime par l'email (email de l'attaquant). Pour l'utiliser, l'attaquant à besoin d'inviter (tromper) l'utilisateur à remplir et valider le formulaire que propose Web Phishing à travers le lien suivant :

```
http(ou https)://VOTRE-SERVEUR/web-phishing/index.php?email=ADRESSE-VICTIME@DOMAINE.EXT
```

Exemple
=======
Embarquer dans un "mail piégé" un lien sous forme de lien hypertexte. Le mail incite l'utilisateur/victime à le suivre (vers le système Web Phishing) afin de vérifier son compte : le but étant de récupérer (par email) les informations confidentielles de l'utilisateur/victime. 

Lien à cacher derrière le lien :
```
http://www.dakarhacking.com/web-phishing/index.php?email=commercial@dakarhacking.com
```

Remarque
========
Web Phishing est adaptable selon votre imagination, les scénarios d'attaques également. De plus, l'outil est open source et son code source est très facile à comprendre pour qui souhaite l'adapter.