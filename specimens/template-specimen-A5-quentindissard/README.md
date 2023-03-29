# ---- TEMPLATE SPECIMEN TYPOGRAPHIQUE ----
## --- FORMAT A5 ---

Le dossier __"template-specimen-A5.zip"__ contient un sous-dossier __"layers-specimen"__ dans lesquels sont rangés par année les couches intégrées dans le design final du specimen.


## ---- INTÉGRATION DE TYPOGRAPHIE ----

Avant de réaliser votre specimen avec votre caractère, il faut tout d'abord ajouter votre typographie en __*.otf*__ dans le sous-dossier __"*fonts*"__ situer dans le dossier __"assets"__ et de le nommer comme indiqué, c'est-à-dire __*Nom-Graisse.otf*__

Il faut ensuite proceder au __*@fontface*__ dans le fichier __"reglages.css"__ placé dans le dossier __"styles"__. À la fin de celui-ci, il faut intégrer la balise suivante comme suit en veillant à respecter la nomenclature des fichiers, à savoir __*Nom*__ (de la typographie) et sa __*Graisse*__ (Thin, Light, Regular, Bold)

```

 @font-face {
	font-family: 'Nom';
	src: url("../fonts/Nom-Graisse.otf");
	font-weight: normal;
	font-style: normal;
}

```

Il faut maintenant se rendre dans le fichier __"style.css"__ présent dans le dossier __"assets"__ puis __"styles"__ et ajouter une nouvelle balise __*section*__ à la fin du doc pour votre nouvelle typographie en respectant l'exemple ci-dessous.

```

section#nom{
  	font-family: 'Nom';
}

```




## ---- template-bdc-specimen ----

Le fichier __*template-bdc-specimen.php*__ contient tout le template de base utilisé pour une typographie __*bas de casse*__ ascii afficher en __*arrière-plan*__ sur le specimen, pour modifier son contenu, il suffit de l'ouvrir et de modifier son contenu puis d'enregistrer et mettre à jour son Paged.js pour voir les modifications apparaitre.

__STYLE__

Pour modifier le style du specimen, il suffit d'ouvrir le __"style.css"__ présent dans le dossier __"assets"__ puis __"styles"__ et se référer aux balises utilisées dans chaque layer du specimen.


## ---- template-cap-specimen ----

Le fichier __*template-cap-specimen.php*__ contient toutes les informations présentes __*en bas du specimen*__, pour modifier son contenu, il suffit de l'ouvrir et de modifier son contenu puis d'enregistrer et mettre à jour son __Paged.js__ pour voir les modifications apparaitre.

__STYLE__

Pour modifier le style du specimen, il suffit d'ouvrir le __"style.css"__ présent dans le dossier __"assets"__ puis __"styles"__ et se référer aux balises utilisées dans chaque layer du specimen




## ---- PROTOCOLE DE CRÉATION ----

Tout d'abord, il faut ouvrir l'index.php et dupliquer la dernière section de typographie intégrée pour y ajouter une nouvelle typographie. Il faut ensuite remplacer l'id par le *nom* de la typographie à intégrer __(il faut respecter la casse déjà existante)__. 

La première balise __*include*__ fait le lien vers le type de template typographique. Si la typographie dessinée est une __bas de casse__, il faut ajouter le lien __*template-bdc-specimen.php*__ en revanche si la typographie est en __CAPITALE__, il faut mettre le lien __*template-cap-specimen.php*__ dans la balise __*include*__ comme ci-dessous.

À la suite de cette manipulation dans la balise include, il suffit de rentrer les informations de *colophon* présente dans la balise *footer* ci-contre __(Prenom + Nom)__, __(date de conception)__, et __(nombre de glyphs dessinées)__.




## ---- EXEMPLE CODE CI-CONTRE ----

```

    <section id="way">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Candice Terle<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>
	<section id="matypographie">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Prenom Nom<br>en 0000</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">00 glyphs</p>
      </footer>
    </section>

```




## ---- IMPRESSION ----

Pour imprimer ce nouveau specimen, il suffit de sortir du mode inspecter de Pagedjs et de faire *Cmd P* sur __Mac__ ou *Ctrl P* sur __Windows__ et de l'enregistrer en pdf dans un dossier.


## ---- LIENS DOCUMENTATION ----

Plus d'informations sur [pagedjs](https://pagedjs.org/)
