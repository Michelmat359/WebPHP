<!--COLUMNA DE ANUNCIOS-->
    <aside class="anuncios">
        <!--Tooltip-->
        <section class="card">
            <a href="#" class="canvas" data-toggle="tooltip" title="Logo en Canvas"><canvas id="canvas" height="270" width="270"></canvas></a>
        </section>

        <section class="card">
            <h3>¡Novedades y popovers!</h3>
            <!--Popovers-->
            <img src="images/0_cabecera/flecha6.png" class="fluid-img" data-toggle="popover" title="Flechas montadas" data-content="Flechas premontadas. Tamaños no adaptables">
            <img src="images/0_cabecera/flecha3.2.png" class="fluid-img" data-toggle="popover" title="Flecha de sala" data-content="Flecha de aluminio para sala">
            <img src="images/0_cabecera/flecha4.2.png" class="fluid-img" data-toggle="popover" title="Aluminio" data-content="Flecha ideal para empezar a competir">
            <img src="images/0_cabecera/flecha2.png" class="fluid-img" data-toggle="popover" title="Easton CarbonOne" data-content="Flecha ideal para empezar a competir">
            <img src="images/0_cabecera/flecha1.png" class="fluid-img" data-toggle="popover" title="Apollo" data-content="Flecha ideal para empezar a competir">
            <img src="images/0_cabecera/flecha5.2.png" class="fluid-img" data-toggle="popover" title="ACC" data-content="Flechas a medida">
        </section>

        <!-- Twitter -->
        <section class="card">
            <a class="twitter-timeline" data-lang="es" data-width="541" data-height="625" data-theme="light" href="https://twitter.com/RFETA?ref_src=twsrc%5Etfw"></a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </section>
        <!--Fin Twitter-->
    </aside>
      <script>
         const canvas = document.getElementById("canvas")
                    const context = canvas.getContext("2d")
                    context.translate(canvas.width/2,canvas.height/2)
                    const text = canvas.getContext("2d")

                    const colors = {
                        black: "#000",
                        blue : "#0BAAEB",
                        gold : "#FCEE4D",
                        red : "#EA3B4A"
                    }
                    function drawCircle(x,y,r,c) {
                        context.strokeStyle = c
                        context.beginPath()
                        context.arc(x,y,r,0,360)
                        context.stroke()
                    }
                    function fillCircle(x,y,r,c) {
                        context.fillStyle = c
                        context.beginPath()
                        context.arc(x,y,r,0,360)
                        context.fill()
                    }

                    fillCircle(0,0,130,colors.blue)
                    fillCircle(0,0,90,colors.red)
                    fillCircle(0,0,50,colors.gold)

                    drawCircle(0,0,10,colors.black)

                    context.fillStyle = colors.black
                    context.textAlign = "center"

                    for (let i = 30, j = 9; i < 131; i += 20, j--) {
                        if (j > 4) context.fillText(j,0,-(i+8));
                        drawCircle(0,0,i,colors.black)
                    }

                </script>