<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Paged.js</title>
    <script>this.ready=new Promise(function($){document.addEventListener('DOMContentLoaded',$,{once:true})})</script>
    <script src="dist/paged.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/styles/reglages.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/preview.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>
<body>
  <script>
    ready.then(async function () {
      let flowText = document.querySelector("#flow");

      let t0 = performance.now();

      let paged = new Paged.Previewer()

      paged.preview(flowText.content).then((flow) => {
        let t1 = performance.now();

        console.log("Rendering " + flow.total + " pages took " + (t1 - t0) + " milliseconds.");

        let editable = document.querySelectorAll(".pagedjs_page .pagedjs_area > div");
        for (var i = 0; i < editable.length; i++) {
          editable[i].setAttribute("contenteditable", true);
        }
      });

      let resizer = () => {
        let pages = document.querySelector(".pagedjs_pages");

        if (pages) {
          let scale = ((window.innerWidth * .9 ) / pages.offsetWidth);
          if (scale < 1) {
            pages.style.transform = `scale(${scale}) translate(${(window.innerWidth / 2) - ((pages.offsetWidth * scale / 2) ) }px, 0)`;
          } else {
            pages.style.transform = "none";
          }
        }
      };
      resizer();

      window.addEventListener("resize", resizer, false);

      paged.on("rendering", () => {
        resizer();
      });

    });
  </script>
  <template id="flow">

    <section>
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Nom Prénom<br>en 0000</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">00 glyphs</p>
      </footer>
    </section>

    <section id="water">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Sarah Mazouré<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">30 glyphs</p>
      </footer>
    </section>

    <section id="poison">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Enora Pichavant<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">54 glyphs</p>
      </footer>
    </section>

    <section id="rock">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Laura François<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="psychic">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Martin Gouriou<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">44 glyphs</p>
      </footer>
    </section>

    <section id="ice">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Léo Gobin<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">36 glyphs</p>
      </footer>
    </section>

    <section id="bug">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Elodie Perez<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">62 glyphs</p>
      </footer>
    </section>

    <section id="dragon">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Jessy Moreira<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="electric">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Emma Grosu<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">33 glyphs</p>
      </footer>
    </section>

    <section id="fighting">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Julia Rodriguez<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">36 glyphs</p>
      </footer>
    </section>

    <section id="fire">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Tonya Palcy<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="flying">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Erwan Batnini<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">36 glyphs</p>
      </footer>
    </section>

    <section id="ghost">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Julia Koussa<br>en 2020</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">36 glyphs</p>
      </footer>
    </section>




    <section id="brutal">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Laure Azizi<br>en 2022</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">7 glyphs</p>
      </footer>
    </section>

    <section id="eartheater">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Léa Toluzzo<br>en 2022</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="frankgrayishiding">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Louanne Fournier<br>en 2022</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="tricurve">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Pierre Roussel<br>en 2022</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="fuite">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Le&iuml;la Courset<br>en 2022</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="lablab">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Josselin Romé<br>en 2022</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>




    <section id="aube">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Sophie Aube<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="bazar">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Amandine Courbot<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="boniot">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Aurélien Maufroid<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="ducere">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Ivo Querniard<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="frimousse">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Sarah Garraud<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">30 glyphs</p>
      </footer>     
    </section>

    <section id="glouglou">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Clara Saffre<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">30 glyphs</p>
      </footer>
    </section>

    <section id="kiffance">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Maïlys Larmitou<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="leana">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Marion Vilette<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="lutine">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Zoé Leroux<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="maingauche">
      <?php include("layers-specimen/template-cap-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Antoine Liberman<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="mina">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Yassmine Tissaoui<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="vitejuin">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Marine Drouin<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>

    <section id="way">
      <?php include("layers-specimen/template-bdc-specimen.php"); ?>
      <footer>
          <p id="infos">Typographie conçue<br>par Candice Terle<br>en 2023</p>
          <p id="pagejs">mis en page<br> sur Paged.js</p>
          <p id="glyph">26 glyphs</p>
      </footer>
    </section>




</template>
</body>
</html>
