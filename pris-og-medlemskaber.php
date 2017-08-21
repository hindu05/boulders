<!--
  Definere indhold til title-tagget
  Include navigation
-->
<?php
  $title = "Pris og medlemskab | Aarhus Boulders";
  $description = "Se vores forskellige medlemskaber og tjek vores priser.";
  include"includes/navigation.php";
?>
<main>
  <section class="top priser-top cut">
    <img src="img/desktop/boulders-priser-desktop.jpg" alt="Boulders Priser">
    <article class="introtekst">
      <h1>Pris og Medlemskab</h1>
      <p>Kunne du tænke dig at blive en del af fællesskabet? Så tag et kig på vores forskellige priser og medlemskaber.</p>
    </article>
  </section>
  <section class="skoleje">
    <h3>Leje af sko koster <span class="bold">kun</span> 30,-</h3>
    <h3>Tilmelding sker hos Aarhus Boulders, Graham Bells Vej 18a 8200 Aarhus N</h3>
  </section>
  <article class="priser">
    <section class="pris-og-medlemskab">
      <div class="icons"><img src="img/gfx/doer.png" alt="Entré"></div>
      <h3>Entré</h3>
      <span class="margin"><p>Voksen</p></span>
      <ul>
        <li>Man-fre inden kl. 14: <span>80,-</span></li>
        <li>Man-fre efter kl. 14: <span>110,-</span></li>
        <li>Lør-søn: <span>110,-</span></li>
      </ul>
      <span class="margin"><p>Børn u. 16 år</p></span>
      <ul>
        <li>Man-fre inden kl. 14: <span>45,-</span></li>
        <li>Man-fre efter kl. 14: <span>60,-</span></li>
        <li>Lør-søn: <span>60,-</span></li>
      </ul>
    </section>
    <section class="pris-og-medlemskab">
      <div class="icons"><img src="img/gfx/medlem.png" alt="Medlemskaber"></div>
      <h3>Medlemskaber</h3>
      <span class="margin"><p>Månedsmedlem</p></span>
      <ul>
        <li>Månedlig betaling <span>275,-</span></li>
        <li>(+75,- i alm. gebyr)</li>
        <li>minimum 6 måneders binding</li>
      </ul>
      <span class="margin"><p>Halvårsmedlem</p></span>
      <ul>
        <li>Halvårlig forudbetaling <span>1500,-</span></li>
        <li>Månedlig betaling <span>250,-</span></li>
      </ul>
      <span class="margin"><p>Årsmedlem</p></span>
      <ul>
        <li>Årlig forudbetaling <span>2500,-</span></li>
        <li>Månedlig betaling <span>208,-</span></li>
      </ul>
    </section>
    <section class="pris-og-medlemskab">
      <div class="icons"><img id="barn" src="img/gfx/medlem_barn.png" alt="Medlemskab børn"></div>
      <h3>Børn</h3>
      <span class="margin"><p>Årsmedlem u. 16 år</p></span>
      <ul>
        <li>Årlig forudbetaling <span>1800,-</span></li>
        <li>Månedlig betaling <span>150,-</span></li>
      </ul>
      <span class="margin"><p>Årsmedlem u. 12 år</p></span>
      <ul>
        <li>Årlig forudbetaling <span>1200,-</span></li>
        <li>Månedlig betaling <span>100,-</span></li>
      </ul>
    </section>
    <section class="pris-og-medlemskab">
      <div class="icons"><img src="img/gfx/klippekort.png" alt="klippekort"></div>
      <h3>Klippekort</h3>
      <span class="margin"><p>Voksen</p></span>
      <ul>
        <li>10 klip <span>800,-</span></li>
      </ul>
      <span class="margin"><p>Børn u. 16 år</p></span>
      <ul>
        <li>10 klip <span>450,-</span></li>
      </ul>
    </section>
  </article>
  <article class="betingelser">
    <span class="bold"><p>Det med småt</p></span>
    <p>Klippekortet er ikke personligt og kan deles med din kammersjuk eller benyttes af grupper.</p>
    <p>U. 12 medlemsskabet indeholder en gratis ugentlig træningsdag. </p>
    <p>Vi tager ikke imod polterabend og lignende underholdning, da vi tilgodeser de faste medlemmer.</p>
    <p>Standby: Ønsker man en eller flere måneder at have sit månedsmedlemsskab stående i bero, skal der inden den 5. måneden før sendes en mail til rune@aarhusboulders.dk, hvor dette oplyses. Sker dette ikke, hæfter man for den efterfølgende måned.
      Når medlemskabet skal startes op igen, tillægges et gebyr på 50,- kr.​</p>
  </article>
</main>
<!-- Include footer -->
<?php
  include"includes/footer.php";
?>
