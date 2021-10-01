<?php
  include(dirname(__DIR__).'/includes/header.php');
?>

<div id="main">
  <div class="content">
  <h1 class="title">Search a Pokemon!</h1>
  <div class="PokeAPI">
    <div class="input">
      <label for="">Pokemon: </label>
      <input type="text" id="input">
      <button onclick="getPokemon()">Search</button>
    </div>
    <div id="pokemonData" class="pokemonData">
      <ul id="pokemonList" class="pokemonList">
        <li id="name"></li>
        <li id="weight"></li>
        <li id="height"></li>
      </ul>
      <div class="pokemonImage">
        <label id="imageFront"></label>
        <img id="pokemonImage_Front">
      </div>

        <div class="pokemonImage">
          <label id="imageBack"></label>
          <img id="pokemonImage_Back">
        </div>
    </div>
  </div>
  </div>
</div>

<?php
  include(dirname(__DIR__).'/includes/footer.php');
?>

<script>

  
</script>