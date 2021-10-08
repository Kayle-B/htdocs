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

<footer id="footer">
    <div class="copyright">
        <h3>Info:</h3>
        <p>This site was developed by Kayle Boersen</p>
        <p>KayleBoersen.nl &copy; <?php echo date("d/m/Y");?></p>
    </div>

    <div class="socials">
        <h3>contact:</h3>
        <ul>
            <li><i class="far fa-envelope"></i> Email: Kayle.Contacteren@gmail.com</li>
            <li><i class="fab fa-linkedin"></i> LinkedIn: <a target="_blank" href="https://www.linkedin.com/in/kayleboersen/">Kayle Boersen</a></li>
        </ul>
    </div>



</footer>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/js/pokeapi.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/vendor/modernizr-3.11.2.min.js"></script>