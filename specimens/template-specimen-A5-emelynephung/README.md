# ---- TEMPLATE SPECIMEN TYPOGRAPHIQUE ----
## --- FORMAT A5 ---

Le dossier __"template-specimen-A5.zip"__ contient un sous-dossier __"layers-specimen"__ dans lesquels sont rangés par année les couches intégrées dans le design final du specimen.


## ---- INTÉGRATION DE TYPOGRAPHIE ----

Avant de réaliser votre specimen avec votre caractère, il faut tout d'abord ajouter votre typographie en __*.otf*__ dans le sous-dossier __"*fonts*"__ situer dans le dossier __"assets"__ et de le nommer comme indiqué, c'est-à-dire __*Nom-Graisse.otf*__

Il faut ensuite proceder au __*@fontface*__ dans le fichier __"reglages.css"__ placé dans le dossier __"styles"__. À la fin de celui-ci, il faut intégrer la balise suivante comme suit en veillant à respecter la nomenclature des fichiers, à savoir __*Nom*__ (de la typographie) et sa __*Graisse*__ (Thin, Light, Regular, Bold). 

```

 @font-face {
	font-family: 'Font';
	src: url("../fonts/Nom-Fichier.otf");
	font-weight: normal;
	font-style: normal;
}

```

Il faut ensuite se rendre dans le fichier __"style.css"__ présent dans le dossier __"assets"__ puis __"styles"__ et ajouter une nouvelle balise classe __*typo*__ à la fin du doc pour votre nouvelle typographie en respectant l'exemple ci-dessous.

```

.typo2{
  	font-family: 'NomTypo2';
}

```




## ---- template-specimen ----

__STYLE__

Pour modifier le style du specimen, il suffit d'ouvrir le __"style.css"__ présent dans le dossier __"assets"__ puis __"styles"__ et se référer aux balises utilisées dans chaque layer du specimen.


## ---- PROTOCOLE DE CRÉATION ----


À la suite de cette manipulation dans la balise include, il suffit de rentrer les informations de *colophon* présente dans la balise *footer* ci-contre __(Prenom + Nom)__, __(date de conception)__, et __(nombre de glyphs dessinées)__.

À la suite de cette manipulation dans la balise include, il y a 4 doubles pages à modifier. La première présentant le nom de la typographie, la seconde double ouvrant sur une lettre mise en avant et du texte courant, la troisième avec l'alphabet et enfin la quatrième présentant différents niveaux de corps de texte.


## ---- EXEMPLE CODE PAGE PRINCIPALE CI-CONTRE ----

```

    <section>

     <h3 class="nomtypo"> Fighting </h3>
     <h3 class="nomtypo"> Fighting </h3>
     <h3 class="nomtypo"> Fighting </h3>
     <h3 class="nomtypo"> Fighting </h3>
     
     <h4 id="auteur"> Nom de l'auteur </h4>

     <p class="plus typo1"> Fightingo </p>

    </section>

```

## ---- EXEMPLE CODE DEUXIÈME DOUBLE PAGE CI-CONTRE ----

```

    <div id="lettre">
    <h2 id="fighting">R</h2> 
    </div>
   
    <p class="backgroundtext">
        <br>
        <br>
        Le [type Combat]
        <br> est l'un des dix-huit types de la série principale, introduit dès la première génération. Jusqu'à la troisième génération incluse, ce type était classé physique.
        <br>
        Tous les doubles types contenant Combat sont représentés par au moins un Pokémon.
        <br>
        Dans le Jeu de Cartes à Collectionner, le type Combat inclut aussi les Pokémon Roche et Sol.

        <br><br>
        Le groupe Combat est celui des Pokémon spécialisés dans la force brute, favoris de Dresseurs eux-mêmes versés dans les arts martiaux, et dont la moyenne d'Attaque surpasse celle des autres types. Les quelques combattants frappant dans le Spécial doivent leur particularité à un second type, le plus souvent Feu ou Psy. 
        <br><br>Dans les autres statistiques, l'écart-type est élevé et l'on peut distinguer deux classes de Pokémon Combat : ceux qui misent sur la Vitesse, et ceux qui privilégient l'endurance.
    </p>

```

## ---- EXEMPLE CODE TROISIÈME DOUBLE PAGE CI-CONTRE ----

```

     <p class="abc typo1">
        a b c d e f g h i j k l m n o p q r s t u v w x y z
    </p>
     <p class="abc2 typo1">
        a b c d e f g h i j k l m n o p q r s t u v w x y z
    </p>

```

## ---- EXEMPLE CODE QUATRIÈME DOUBLE PAGE CI-CONTRE ----

```

    <div>
        
    <p class="corps1 typo1">
        Cela ne veut rien dire
    </p>
    <br>
    <p class="corps2 typo1"> 
        Cela ne veut rien dire
    </p>
    <br>
    <p class="corps3 typo1">
        Cela ne veut rien dire
    </p>
    <br>
    <p class="corps4 typo1">
        Cela ne veut rien dire
    </p>
    <br>
    <p class="corps5 typo1">
        Cela ne veut rien dire
    </p>

    </div>

```


## ---- IMPRESSION ----

Pour imprimer ce nouveau specimen, il suffit de sortir du mode inspecter de Pagedjs et de faire *Cmd P* sur __Mac__ ou *Ctrl P* sur __Windows__ et de l'enregistrer en pdf dans un dossier.


## ---- LIENS DOCUMENTATION ----

Plus d'informations sur [pagedjs](https://pagedjs.org/)
