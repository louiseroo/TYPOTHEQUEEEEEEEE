# ---- TEMPLATE SPECIMEN TYPOGRAPHIQUE ----
## --- FORMAT A1 ---

Le dossier __"template-specimen-A1.zip"__ contient un sous-dossier __"layers-specimen"__ dans lequels sont rangés par année les couches intégrer dans le design final du specimen


## ---- STYLE ----

Pour modifier le style du specimen il suffit d'ouvrir le __"style.css"__ présent dans le dossier __"assets"__ puis __"styles"__ et de se référé aux balises utilisés dans chaque layer du specimen.



## ---- STRUCTURE PAR ANNÉE ----


## ---- 2020 ----

---- ascii-2020.php ----  
---- colophon-2020.php ----  
---- texte-2020.php ----  
---- typos-2020.php ----


## ---- 2022 ----

---- ascii-2022.php ----  
---- colophon-2022.php ----  
---- texte-2022.php ----  
---- typos-2022.php ----


## ---- 2023 ----

---- ascii-2023.php ----  
---- colophon-2023.php ----  
---- texte-2023.php ----  
---- typos-2023.php ----




## ---- ASCII ----

Le fichier __"ascii-2020.php"__ contient tous les éléments ascii afficher en *arrière plan* sur le specimen, pour modifier son contenu il suffit de l'ouvrir et de modifier son contenu puis d'enregistrer et mettre à jour son Paged.js pour voir les modifications apparaitre.


## ---- COLOPHON ----

Le fichier __"colophon-2020.php"__ contient tous les informations présentes *en bas du specimen*, pour modifier son contenu il suffit de l'ouvrir et de modifier son contenu puis d'enregistrer et mettre à jour son Paged.js pour voir les modifications apparaitre.


## ---- TEXTE ----

Le fichier __"texte-2020.php"__ contient tous les informations centrées présentes *derrière les typographies en orange*, pour modifier son contenu il suffit de l'ouvrir et de modifier son contenu puis d'enregistrer et mettre à jour son Paged.js pour voir les modifications apparaitre.


## ---- TYPOS ----

Le fichier __"typos-2020.php"__ contient tous les informations présentes au premier plan à savoir *les typographies __(nom)__* *leurs corps __(165 pt)__* et leurs *nombre de glyphs __(26)__*, pour modifier son contenu il suffit de l'ouvrir et de modifier son contenu puis d'enregistrer et mettre à jour son Paged.js pour voir les modifications apparaitre.




## ---- INDEX.PHP ----

Le fichier index.php rassemble tous ces fichiers séparés grace à une *balise include* comme suit. Il suffit de dupliquer le dernier dossier dans __"layers-specimen"__ à savoir __*2023*__ et de le renommer avec l'année du workshop c'est à dire __*2024*__ à l'intérieur de celui-ci veillez à remplacer __*2023*__ par __*2024*__.

Dans l'index.php il suffit maintenant de dupliquer la section __*2023*__ et de remplacer l'année par celle du nouveau workshop. Pagedjs va maintenant créer une nouvelle page pour ce specimen __*2024*__.




## ---- EXEMPLE CODE CI-CONTRE ----

```

  <section>
      *<?php include("layers-specimen/2020/ascii-2023.php"); ?>*
        <div id="fonts1">
          <?php include("layers-specimen/2020/typos-2023.php"); ?>
          <?php include("layers-specimen/2020/texte-2023.php"); ?>
          <?php include("layers-specimen/2020/colophon-2023.php"); ?>
        </div>
    </section>
  <section>
      <?php include("layers-specimen/2020/ascii-2024.php"); ?>
        <div id="fonts1">
          <?php include("layers-specimen/2020/typos-2024.php"); ?>
          <?php include("layers-specimen/2020/texte-2024.php"); ?>
          <?php include("layers-specimen/2020/colophon-2024.php"); ?>
        </div>
    </section>

```




## ---- IMPRESSION ----

Pour imprimer ce nouveau specimen il suffit de sortir du mode inspecter de Pagedjs et de faire *Cmd P sur Mac* ou *Ctrl P sur Windows* et de l'enregistrer en pdf dans un dossier.


## ---- LIENS DOCUMENTATION ----

Plus d'informations sur [pagedjs](https://pagedjs.org/)
