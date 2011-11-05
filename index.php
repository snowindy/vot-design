<?php ?>
<?
#шапка 
include("header.php");
?>
<!-- основной блок -->

<div id="content">
    <div class="content-cell">
        <a class="invis-anch" id="home" name="home"></a>

        <h2>Дизайн-студия</h2>

        <img src="img/img_10.jpg" width="400" height="215" alt="вот так"/>
        <h3>Веб-дизайн</h3>
        <p> Собрались неслучайные люди, желающие заниматься дизайном. </p>
        <p>
        <p class="meta">&lt;!-- Если не нравится, то вам не к нам. --&gt;</p>
        <p>&nbsp;</p>
    </div>
    <div class="content-cell">
        <a class="invis-anch" id="service" name="service"></a>

        <h2>Услуги</h2>

        <img src="img/img_13.jpg" width="400" height="215" alt="вот так"/>


        <frameset cols="80,20">
            <frame src="blog.php" name="leftFrame" scrolling="yes" noresize>
        </frameset> 

        <ul>
            <li>Фирменный стиль</li>
            <li>Полиграфия</li>
            <li>Дизайн сайтов</li>
            <li>Оформление свадеб и праздников</li>
            <li>Фото- и видео- съемка</li>
        </ul>



        <!-- 
        <h3>Полиграфия:</h3>
        <li>Видео</li>
         <li>Фотография</li>
        </ul>
        
         <h3>События:</h3>
   <ul>
        <li>Оформление свадеб и праздников</li>
        <li>Фаер-шоу</li>
        <li>Флорист</li>
         <li>Фото- и видео- съемка</li>
        </ul>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>-->

    </div>
    <div class="content-cell has-text">
        <a class="invis-anch" id="contacts" name="contacts"></a>

        <h2>Контакты</h2>

        <img src="img/img_11.jpg" width="400" height="31" alt="вот так"/>

        <p><strong>e-mail:</strong> info@vot-design.com</p>
        <p><strong>tel.:</strong> 8 (903) 216-38-45</p>
    </div>
    <div class="content-cell has-text">
        <a class="invis-anch" id="portfolio" name="portfolio"></a>

        <h2><a href="portfolio.php" title="Portfolio">Портфолио</a></h2>

        <a name="portfolio"><img src="img/img_11.jpg" width="400" height="31" alt="вот так"/></a>

    </div>

</div>
<!-- конец основного блока -->

<?
#подвал
include("footer.php");
?>

