function getSMMO_stats() {
    $.ajax({
        url: "/API_Data/SMMO_stats.php",
        method: "GET",
        })
        .done(function(data) {
        SimpleData = JSON.parse(data);

        document.getElementById('username').innerHTML = 'Username: ' + SimpleData.name;

        // STATS
        //SET STR DATA
        var card_item_lvl = document.getElementById('card-item-lvl');
        var lvl_text = document.createElement('p');
        lvl_text.innerHTML = 'Level: ';
        var lvl_data = document.createElement('p');
        lvl_data.id = 'lvl-data';
        lvl_data.innerHTML = SimpleData.level;

        //SET DEF DATA
        var card_item_def = document.getElementById('card-item-def');
        var def_text = document.createElement('p');
        def_text.innerHTML = 'Defence: ';
        var def_data = document.createElement('p');
        def_data.id = 'def-data';
        def_data.innerHTML =  '(' + SimpleData.bonus_def + ' +) '+ SimpleData.def;
        //SET DEF DATA

        //SET DEX DATA
        var card_item_dex = document.getElementById('card-item-dex');
        var dex_text = document.createElement('p');
        dex_text.innerHTML = 'Dexterity: ';
        var dex_data = document.createElement('p');
        dex_data.id = 'dex-data';
        dex_data.innerHTML = '(' + SimpleData.bonus_dex + ' +) '+ SimpleData.dex;
        //SET DEX DATA

        //SET STR DATA
        var card_item_str = document.getElementById('card-item-str');
        var str_text = document.createElement('p');
        str_text.innerHTML = 'Strength: ';
        var str_data = document.createElement('p');
        str_data.id = 'str-data';
        str_data.innerHTML = '(' + SimpleData.bonus_str + ' +) '+ SimpleData.str;

        if(document.getElementById('def-data') != null){
          document.getElementById('lvl-data').innerHTML = SimpleData.level;
          document.getElementById('def-data').innerHTML = '(' + SimpleData.bonus_def + ' +)' + SimpleData.def;
          document.getElementById('dex-data').innerHTML = '(' + SimpleData.bonus_dex + ' +) '+ SimpleData.dex;
          document.getElementById('str-data').innerHTML = '(' + SimpleData.bonus_str + ' +) '+ SimpleData.str;
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
    });
  }

  function getSMMO_skills() {
    $.ajax({
        url: "/API_Data/SMMO_skills.php",
        method: "GET",
        })
        .done(function(data) {
        SimpleData = JSON.parse(data);

        var Parent = document.getElementById('skills-content');
        SimpleData.forEach(data => {
          var card_item = document.createElement('div');
          if(data.skill == 'crafting'){
            card_item.className = 'last-card-item';
          }
          else{
            card_item.className = 'card-item';
          }

          var card_text = document.createElement('p');
          card_text.innerHTML = data.skill;

          var card_value = document.createElement('p');
          card_value.innerHTML = data.level;
          card_value.id = data.skill;

          if(document.getElementById(data.skill) != null){
            document.getElementById(data.skill).innerHTML = data.level;
          }
          else{
            Parent.appendChild(card_item);
            card_item.appendChild(card_text);
            card_item.appendChild(card_value);
          }
        });
    });
  }

  function getSMMO_bosses() {
    $.ajax({
        url: "/API_Data/SMMO_bosses.php",
        method: "GET",
    })
      .done(function(data) {
      SimpleData = JSON.parse(data);
      var Parent = document.getElementById('bosses-content');
      for(let i = 1; i < SimpleData.length; i++){
        var card_item = document.createElement('div');
        if(i == SimpleData.length - 1){
          card_item.className = 'last-card-item';
        }
        else{
          card_item.className = 'card-item';
        }
        var boss_name = document.createElement('p');
        boss_name.innerHTML = SimpleData[i].name;
        boss_name.id = SimpleData[i].id;

        var boss_level = document.createElement('p');
        boss_level.innerHTML = SimpleData[i].level;

        if(document.getElementById(SimpleData[i].id) == null){
          Parent.appendChild(card_item);
          card_item.appendChild(boss_name);
          card_item.appendChild(boss_level);
        }
        else{

        }

      }

    });
  }



// TIMER

  time=setInterval(function(){
    getSMMO_stats();
    getSMMO_skills();
    getSMMO_bosses();
  },5000);
