<?php
  include(dirname(__DIR__).'/includes/header.php');
?>

<div id="main">
  <h1 class="title">My SimpleMMO data</h1>
  <h2 class="title" id="username"></h2>
  <div class="content">
    <div class="card">
      <div class="card-head" id="card-head">header text</div>
      <div class="card-content" id="card-content">
        <div class="card-item" id="card-item-lvl"></div> 
        <div class="card-item" id="card-item-def"></div>
        <div class="card-item" id="card-item-dex"></div>
        <div class="last-card-item" id="card-item-str"></div>
      </div>
    </div>
  </div>
  </div>
</div>


<!-- Footer -->

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

<script>
  getMMOData();

  function getMMOData() {
    $.ajax({
        url: "/API_Data/SimpleMMO.php",
        method: "GET",
        })
        .done(function(data) {
        SimpleData = JSON.parse(data);
        console.log(SimpleData);


        //SET STR DATA
        var card_item_lvl = document.getElementById('card-item-lvl');
        var lvl_text = document.createElement('p');
        lvl_text.innerHTML = 'Level: ';
        var lvl_data = document.createElement('p');
        lvl_data.id = 'lvl-data';
        lvl_data.innerHTML = SimpleData.level;   

        //SET DEFENCE DATA
        var card_item_def = document.getElementById('card-item-def');
        var def_text = document.createElement('p');
        def_text.innerHTML = 'Defence: ';
        var def_data = document.createElement('p');
        def_data.id = 'def-data';
        def_data.innerHTML = SimpleData.def;

        //SET DEFENCE DATA

        //SET DEX DATA
        var card_item_dex = document.getElementById('card-item-dex');
        var dex_text = document.createElement('p');
        dex_text.innerHTML = 'Dexterity: ';
        var dex_data = document.createElement('p');
        dex_data.id = 'dex-data';
        dex_data.innerHTML = SimpleData.dex;

        //SET DEX DATA

        //SET STR DATA
        var card_item_str = document.getElementById('card-item-str');
        var str_text = document.createElement('p');
        str_text.innerHTML = 'Strength: ';
        var str_data = document.createElement('p');
        str_data.id = 'str-data';
        str_data.innerHTML = SimpleData.str;

        if(document.getElementById('def-data') != null){
          document.getElementById('lvl-data').innerHTML = SimpleData.level;
          document.getElementById('def-data').innerHTML = SimpleData.def;
          document.getElementById('dex-data').innerHTML = SimpleData.dex;
          document.getElementById('str-data').innerHTML = SimpleData.str;
        }
        else{
          card_item_lvl.appendChild(lvl_text);
          card_item_lvl.appendChild(lvl_data);
          card_item_def.appendChild(def_text);
          card_item_def.appendChild(def_data);
          card_item_dex.appendChild(dex_text);
          card_item_dex.appendChild(dex_data);
          card_item_str.appendChild(str_text);
          card_item_str.appendChild(str_data);
        }

        //SET STR DATA


        document.getElementById('username').innerHTML = 'Username: ' + SimpleData.name;
        document.getElementById('level').innerHTML = SimpleData.level;

        // var def = document.createElement('li');
        // def.id = "def";
        // def.innerHTML = 'Def: ' + SimpleData.def;
        // def.className = "list-group-item"

        // var dex = document.createElement('li');
        // dex.id = "dex";
        // dex.innerHTML = 'Dex: ' + SimpleData.dex;
        // dex.className = "list-group-item"

        // var str = document.createElement('li');
        // str.id = "str";
        // str.innerHTML = 'Str: ' + SimpleData.str;
        // str.className = "list-group-item"


        // if(document.getElementById('def') != null){
        //   document.getElementById('def').innerHTML = 'Def: ' + SimpleData.def;
        //   document.getElementById('dex').innerHTML = 'Dex: ' + SimpleData.dex;
        //   document.getElementById('str').innerHTML = 'Str: ' + SimpleData.str;

        // }
        // else{
        //   Parent.appendChild(def);
        //   Parent.appendChild(dex);
        //   Parent.appendChild(str);

        // }
    });
  }

  time=setInterval(function(){
    getMMOData();
  },5000);

</script>
