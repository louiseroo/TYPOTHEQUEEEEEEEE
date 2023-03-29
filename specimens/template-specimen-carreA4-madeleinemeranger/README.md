# ---- TEMPLATE SPECIMEN CARRé ----
## --- ORGANISATION DU DOSSIER ---

Le dossier __"template-specimen-carre.zip"__ contient une page __"index.html"__ ainsi que deux dossier. Dans le dossier __"assets"__ vous trouverez le dossier __"fonts"__ et le dossier __"styles"__. Dans ce dossier __"styles"__, vous trouverez les fichiers __"style.css"__ et __"reglages.css"__.


## ---- INTÉGRATION DE TYPOGRAPHIE ----

Avant de réaliser votre specimen avec votre caractère, il faut tout d'abord ajouter votre typographie en __.otf__ dans le sous-dossier __"fonts"__ et de le nommer comme indiqué, c'est-à-dire __Nom-Graisse.otf__

Il faut ensuite proceder au __*@fontface*__ dans le fichier __"reglages.css"__. Dans le bloc __IMPORTATION TYPOGRAPHIES__, il faut remplacer le chemin d'acces de typo1 par le chemin d'accès de votre typographie, comme suit. Tous les textes devraient se mettre à jour.

```

 @font-face {
	font-family: 'typo1';
	src: url("../fonts/Nom-Graisse.otf");
}

```

Il ne faut pas toucher à l'ASCII, sinon les illustrations risquent d'être buggées.


## --- COULEUR DE FOND ---

Toujours dans le fichier __"reglages.css"__, il est possible de modifier la couleur de fond, pour passer d'un noir pur à un gris plus en phase avec l'identité visuelle du site. Il faut choisir une des deux balises __background-color__.

```

@page {
  size: 21cm 21cm;
  margin: 0px;
  background-color: black;
  background-color: rgb(216, 216, 216);
}

```

## --- CALAGE TYPO ---

Dans le fichier __"index.html"__ vous trouverez tous les éléments de la page. Il peut être difficile de s'y retrouver. Ne vous occupez que des balises __<p>__, c'est tout ce que vous aurez à changer si Votre typo rencontre des problèmes d'espacement (si, par exemple, sur le gros bloc de texte, un long mot créé un trou dans la page de mots, n'hésitez pas à le couper en deux avec un espace.)

SI VOTRE TYPO EST EN MINUSCULE !!
Allez dans le fichier __"style.css"__ et trouvez le bloc __p__ (3e en partant du haut). Il faut lui ajouter la ligne __text-transform: lowercase;__ sinon votre texte ne pourra pas apparaître.

  ```

  p{
  font-family: 'typo1', serif;
  color: #FF5400;
  position: absolute;
  text-transform: lowercase;
}

  ```


## ---- IMPRESSION ----

Pour imprimer ce nouveau specimen, il suffit de sortir du mode inspecter de Pagedjs et de faire *Cmd P* sur __Mac__ ou *Ctrl P* sur __Windows__ et de l'enregistrer en pdf dans un dossier.
Il est possible que sur Chrome, l'export génère un bug entre deux pages. Il est conseillé, dans la mesure du possible, d'exporter sous firefox en format A4 et de couper après impression.


## ---- LIENS DOCUMENTATION ----

Plus d'informations sur [pagedjs](https://pagedjs.org/)
