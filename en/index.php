<?php
/* 2018-06-09T11:16:50+00:00
 * https://www.unixtimestamp.com/ */

/* validated with php -l index.php
 * no syntax errors detected */

/* validated generated HTML with Nu Html Checker version 18.6.7
 * no errors or warnings to show
 * http://validator.w3.org/nu/ */

require_once 'lib.php';

$panel1 = panel('1', 'introduction', panel1content());
$panel2 = panel('2', 'wwr3 templates', panel2content());

echo $top.$navbar.$imagetop.$texttop.$panel1.$panel2.footer('accesses').bottom();

function panel1content() {
  return '
      <p>
        The Centro Camuno di Studi Preistorici (CCSP) published the
        first edition of “Who’s Who in Rock Art” in 1985 followed by
        another in 1996. A third edition now underway, dedicated to
        Ariela Fradkin Anati, who edited the previous two, celebrates
        the founding of CCSP in 1964.
      </p>
      <p>
        CCSP will present the third edition of “Who’s who in rock-art”
        (wwr3) at the 2018 IFRAO congress, “On the Shoulders of Giants”
        (31 August to 2 September, Boario Terme, Valcamonica, Italy),
        which commemorates fifty years since the first Valcamonica
        Symposium and thirty years of the Cooperativa Archeologica
        «Le Orme dell’Uomo» and the International Federation of Rock
        Art Organizations (IFRAO).
      </p>
      <p>
        There were 285 researchers in the 1995 edition and 305 in that
        of 1996. Since then, some colleagues are no longer with us.
        Even so, our number grew and today there are over a thousand
        people finding, working on and publishing rock-art. As in
        previous issues, the idea is to foster cooperation between
        rock-art colleagues around the world.
      </p>
      <p>
        Entries will note research areas and interests, chronology, and
        bibliography. There will be a web app, which can be downloaded
        and accessed offline. The same information will appear in print,
        but the bibliography limited to five publications per person.
      </p>
      <p>
        Any rock art researcher may submit an entry, irrespective
        academic affiliation—aficionados and amateurs welcome!
        There are no fees for publishing entries.
      </p>
      <p>
        Feel free to contact the editors by email and Skype, or on
        Facebook, Twitter, and LinkedIn, or see our pages at GitHub
        and WordPress.<br>
          <a href="mailto:whoswho.rockart"
        class="text-muted">whoswho.rockart (at) gmail.com</a><br>
          <a href="https://go.skype.com/sfw"
        class="text-muted">whoswho.rockart (Skype)</a><br>
          <a href="https://www.facebook.com/whos.who.rock.art/"
        class="text-muted">
        www.facebook.com/whos.who.rock.art</a><br>
          <a href="https://twitter.com/whoswho_rockart/"
        class="text-muted">
        twitter.com/whoswho_rockart</a><br>
          <a href="https://www.linkedin.com/in/whoswho-rockart-b497ba155/"
        class="text-muted">
        www.linkedin.com/in/whoswho-rockart-b497ba155</a><br>
          <a href="https://github.com/WhosWho-Rockart/wwr3"
        class="text-muted">
        github.com/whoswho-rockart/wwr3</a><br>
          <a href="https://whoswho-rockart.github.io"
        class="text-muted">
        whoswho-rockart.github.io</a><br>
          <a href="https://whoswhorockart.wordpress.com/about/"
        class="text-muted">
        whoswhorockart.wordpress.com</a>
      </p>
      <p>
        The printed version will be available through CCSP and Amazon
        for €10 (plus shipping) or €7 at the congress. People with
        entries can get it from CCSP for €7 (plus shipping) or €5 at
        the congress.
      </p>
      <p>
        The third edition will be a joint venture of IFRAO, CCSP,
        Le Orme dell’Uomo and Carabà editions Milano.
      </p>
      <p>
        Please share this information.
      </p>
      <p>
        A review can only take place after collecting information.
        In 1984, António Guerreiro adopted dBase, a relational database
        management system. Now, wwr3 uses YAML (<a href="http://yaml.org/"
        class="text-muted">yaml.org</a>) to collect and shape information.
        YAML is a treelike data serialisation language discernible to both
        humans and computers. It is convertible to formats like JSON
        (<a href="http://json.org/" class="text-muted">JavaScript Object
        Notation</a>) and XML (<a href="https://en.wikipedia.org/wiki/XML"
        class="text-muted">Extensible Markup Language</a>). SQL
        (<a href="https://en.wikipedia.org/wiki/SQL"
        class="text-muted">Structured Query Language</a>) database engines
        like SQLite (<a href="https://www.sqlite.org/index.html"
        class="text-muted">sqlite.org</a>) and PostgreSQL
        (<a href="https://www.postgresql.org/"
        class="text-muted">postgresql.org</a>) can store and query JSON.
      </p>
      <p>
        Please copy and complete wwr3 questionnaire and bibliography
        templates and send them to <a href="mailto:whoswho.rockart"
        class="text-muted">whoswho.rockart (at) gmail.com</a> or
        use the “send” button below each form.
      </p>
    ';
}

function panel2content() {
  return '
      <p>
        <a href="main.php" class="text-muted">main questionaire</a><br>
        <a href="book.php" class="text-muted">book</a><br>
        <a href="book-section.php" class="text-muted">book section</a><br>
        <a href="journal-article.php" class="text-muted">journal article</a><br>
        <a href="conference-paper.php" class="text-muted">conference paper</a>
      </p>
    ';
}
?>
