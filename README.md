Web Phishing
============
Système de Phishing en ligne (Web Phishing)

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
Un système de Phishing, application Web en PHP pour permettre aux spécialistes Sécurité dans les entreprises de tester les utilisateurs et de les sensibiliser ensuite sur ce type de cyberattaque.

Avertissement
=============
L'utilisation de Web Phishing pour attaquer des cibles sans consentement mutuel préalable est illégale. Le développeur n'est pas responsable de tout dommage causé par Web Phishing.

Technologies
============

* PHP
* JavaScript

...

Installation
============

```
Déployer le dossier web-phishing dans un hébergement standards :

* Windows ou linux 
* Apache
* PHP

```

Usage
=====
Web Phishing propose une interface Web avec un formulaire à remplir par la l'utilisateur/victime. Web Phishing envoie la saisie de la victile par l'email (email de l'attaquant). 

```
http://ADRESSE-SERVEUR/web-phishing/index.php?email=ADRESSE-VICTIME@DOMAIN.EXT

```

Exemple
=======

Embarquer dans un "mail piégé" un lien sous forme de lien hypertexte. Le mail incite l'utilisateur/victime à suivre ce lien vers Web Phishing afin de vérifier son compte : le but étant de récupérer les informations confidentielles de l'utilisateur/victime. Exemple de lien à cacher derrière le lien :
```
http://github.com/web-phishing/index.php?email=commercial@senegalais.sn

```