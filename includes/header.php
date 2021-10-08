<?php
  include(dirname(__DIR__).'/includes/head.php');
?>
<header id="header">
<a class="logo" href="/index.php"><img class="logo" src="/img/Logo.png" alt=""></a>

  <div class="navbar">
    <a href="/index.php">Home</a>
    <a href="/Personal_projects/construction.php">About</a>
    <div class="dropdown">
      <button class="dropbtn">Pers. Projects
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href= "/Personal_projects/construction.php">Environment</a>
        <a href="/Personal_projects/This_Site.php">This site</a>
        <a href="/Personal_projects/PokeAPI.php">Search a Pokemon (API)</a>
        <a href="/Personal_projects/SimpleMMO.php">SimpleMMO(API Key)</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">School Projects
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/school_projects/webserver_api.php">Webserver (API)</a>
      </div>
    </div>
  </div> 
  <img class="pepe" src="/img/Pepe.png" alt="">

</header>