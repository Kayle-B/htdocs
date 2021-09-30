<?php
  include(dirname(__DIR__).'/includes/header.php');
?>

<div id="main">
  <div class="content">
  <h1 class="title">Search a Pokemon! (WIP)</h1>
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
        <img id="pokemonImage_Front">
        <label id="imageFront"></label>
      </div>

        <div class="pokemonImage">
          <img id="pokemonImage_Back">
          <label id="imageBack"></label>
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