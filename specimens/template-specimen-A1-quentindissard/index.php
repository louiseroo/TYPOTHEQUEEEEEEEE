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
        <?php include("layers-specimen/2020/ascii-2020.php"); ?>
        <div id="fonts1">
          <?php include("layers-specimen/2020/typos-2020.php"); ?>
          <?php include("layers-specimen/2020/texte-2020.php"); ?>
          <?php include("layers-specimen/2020/colophon-2020.php"); ?>
        </div>
      </section>

      <section>
        <?php include("layers-specimen/2022/ascii-2022.php"); ?>
        <div id="fonts2">
          <?php include("layers-specimen/2022/typos-2022.php"); ?>
          <?php include("layers-specimen/2022/texte-2022.php"); ?>
        </div>
          <?php include("layers-specimen/2022/colophon-2022.php"); ?>
      </section>

      <section>
        <?php include("layers-specimen/2023/ascii-2023.php"); ?>
        <div id="fonts3">
          <?php include("layers-specimen/2023/typos-2023.php"); ?>
          <?php include("layers-specimen/2023/texte-2023.php"); ?>
          <?php include("layers-specimen/2023/colophon-2023.php"); ?>
        </div>
      </section>

</template>
</body>
</html>
