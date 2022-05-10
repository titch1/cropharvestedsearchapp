<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>

<section class="index-intro">
  <h1>This Is An Introduction</h1>
  <p>Here is how one type of crops growth not suitable for one climate condition, but suitable for different climatic conditions!</p>
</section>

<section class="index-categories">
  <h2>Crop Categories</h2>
  <div class="index-categories-list">
    <div>
      <h3>Genetic modified crops</h3>
    </div>
    <div>
      <h3>Winter crops</h3>
    </div>
    <div>
      <h3>Amazon crops</h3>
    </div>
    <div>
      <h3>Summer crops</h3>
    </div>
  </div>
</section>

<section class="index-search">
 

          <!-- searchable table start -->
          <h2>Crop Harvested</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">

    <th style="width:60%;"> County</th>

    <th style="width:40%;">Crops names Abbriv.</th>

    <th style="width:40%;">Types of Crops</th>

    <th style="width:40%;"> Harvested crops Weight %</th>

  </tr>

  <tr>
    <td>Cambridgeshire</td>
    <td>W;C;O</td>
    <td>Wheat;Carrot;Oats</td>
    <td>57</td>
  </tr>

  <tr>
    <td>Suffolk</td>
    <td>B;BE;W</td>
    <td>Barley;Beetroot;Wheat</td>
    <td>8</td>
  </tr>

  <tr>
    <td>Kent</td>
    <td>M;PO;C</td>
    <td>Maize;Potatoes;Carrot</td>
    <td>4.6</td>
  </tr>

  <tr>
    <td>Norfolk</td>
    <td>BE;B;M</td>
    <td>Beetroot;Barley;Maize</td>
    <td>5</td>
  </tr>

  <tr>
    <td>Oxfordshire</td>
    <td>C;PA;PO</td>
    <td>Carrot;Parnips;Potatoes</td>
    <td>3.4</td>
    
  </tr>

  <tr>
    <td>Dorset</td>
    <td>O;BE;W;PO</td>
    <td>Oats;Beetroot;Wheat;Potatoes</td>
    <td>7</td>
  </tr>

  <tr>
    <td>Devon</td>
    <td>PO;PA</td>
    <td>Potatoes;Parnips</td>
    <td>6</td>
  </tr>

  

</table> 



</section>

<?php
  include_once 'footer.php';
?>
