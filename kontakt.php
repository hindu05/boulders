<!--
  Definere indhold til title-tagget
  Include navigation
-->
<?php
  $title = "Kontakt | Aarhus Boulders";
  $description = "Kontakt Aarhus boulders på 40 95 52 54 eller send en besked til rune@aarhusboulders.dk.";
  include"includes/navigation.php";
?>
<main>
  <section class="top kontakt-top">
    <img src="img/desktop/kontakt.jpg" alt="Kontakt Aarhus Boulders">
    <article class="introtekst left">
      <h1>kontakt</h1>
      <p>Hvis du har spørgsmål, er du mere end velkommen til at kontakte os enten på mail eller telefon. Vi står altid klar til at hjælpe dig.</p>
    </article>
  </section>
  <section class="aabningstider">
    <h3>KOM OG BESØG OS ALLE DAGE MELLEM <span class="bold">10-22 </span> <br>- OGSÅ HELLIGDAGE</h3>
  </section>
  <article id="kontaktformular">
    <!-- One.com FormMail -->
    <form method="post" action="http://www.soerenheltborg.dk/cgi-bin/FormMail.pl"
    accept-charset="ISO-8859-1"
    onsubmit="var originalCharset = document.charset; document.charset = 'ISO-8859-1'; window.onbeforeunload = function () {document.charset=originalCharset;};">
    <input name="realname" id="realname" placeholder="Navn" required />
    <input name="email" type="email" placeholder="Email" required />
    <textarea cols="40" rows="10" name="message" placeholder="Besked" required></textarea>
    <button type="submit" value="Send" />Send</button>
    <input type="hidden" name="recipient" value="boulders@soerenheltborg.dk" />
    <input type="hidden" name="subject" value="Subject" />
    <input type="hidden" name="redirect" value="http://soerenheltborg.dk/boulders/tak.php" />
    <input type="hidden" name="missing_fields_redirect" value="http://soerenheltborg.dk/boulders/fejl.php" />
    </form>
  </article>



  <article id="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2219.219495574582!2d10.179500315981931!3d56.20516596447902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c158a3a4c238f%3A0x8b2eb18a435d74cf!2sAarhus+Boulders!5e0!3m2!1sda!2sdk!4v1494429440410"></iframe>
    <ul>
      <li>aarhus boulders</li>
      <li>graham bells vej 18a</li>
      <li>8200 aarhus n</li>
      <li>tlf: 40 95 52 54</li>
      <li>cvr-nr: 32777651</li>
    </ul>
  </article>
  <article class="lokaleudlejning">
    <h3>Lokaleudlejning</h3>
    <p>
      Aarhus Boulders udlejer store lyse lokaler til yogahold, kampsport, dans, kurser, behandlinger, læsesal osv. Vi udlejer også to ideelle behandlerrum til fysioterapi og andre behandlingsformer. Mulighederne er mange og priserne på lokalerne er billige.
      Vores lokaler er inklusiv gratis WIFI, toilet, egen indgang, strøm, omklædning med bad og en veludstyret økologisk café med fokus på høj kvalitet og fantastisk kaffe. Kontakt os for mere information.
    </p>
  </article>
</main>
<!-- Include footer -->
<?php
  include"includes/footer.php";
?>
