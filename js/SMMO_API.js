var myLevel;

function getSMMO_stats() {
    $.ajax({
        url: "/API_Data/SMMO_stats.php",
        method: "GET",
        })
        .done(function(data) {
        SimpleData = JSON.parse(data);
        if(SimpleData.error != null){
          var parent = document.getElementById('error-spot');
          var child = document.createElement('p');
          child.innerHTML = SimpleData.error;
          child.className = "error";
          child.id = "error"
          if(document.getElementById("error") != null){
            document.getElementById("error").innerHTML = SimpleData.error;
          }
          else{
            parent.appendChild(child);
          }
        }
        else{

        document.getElementById('username').innerHTML = 'Username: ' + SimpleData.name;
        // STATS
        //SET STR DATA
        var card_item_lvl = document.getElementById('card-item-lvl');
        var lvl_text = document.createElement('p');
        lvl_text.innerHTML = 'Level: ';
        var lvl_data = document.createElement('p');
        lvl_data.id = 'lvl-data';
        lvl_data.innerHTML = SimpleData.level;
        myLevel = SimpleData.level;

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
          document.getElementById('def-data').innerHTML = '(' + SimpleData.bonus_def + ' +) ' + SimpleData.def;
          document.getElementById('dex-data').innerHTML = '(' + SimpleData.bonus_dex + ' +) ' + SimpleData.dex;
          document.getElementById('str-data').innerHTML = '(' + SimpleData.bonus_str + ' +) ' + SimpleData.str;
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
      }
    });
  }

  function getSMMO_skills() {
    counting = 0;
    $.ajax({
        url: "/API_Data/SMMO_skills.php",
        method: "GET",
        })
        .done(function(data) {
        SimpleData = JSON.parse(data);
        if(SimpleData.error == null){

        var Parent = document.getElementById('skills-content');
        SimpleData.forEach(data => {
          counting++;
          var card_item = document.createElement('div');
          if(counting == SimpleData.length){
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
      }
    });
  }

  function getSMMO_bosses() {
    $.ajax({
        url: "/API_Data/SMMO_bosses.php",
        method: "GET",
    })
      .done(function(data) {
      SimpleData = JSON.parse(data);

      for(let i = 1; i < SimpleData.length; i++){

        var risk;
        if((100 / SimpleData[i].level * myLevel) > 140){
          risk = 'Low';
        }
        else if((100 / SimpleData[i].level * myLevel) > 110){ // CHANGE THIS LATER TO BE EXACT
          risk = 'Medium';
        }
        else if((100 / SimpleData[i].level * myLevel) > 80){
          risk = 'High';
        }

        var table_parent = document.getElementById('table-row');
        var table_row = document.createElement('tr');

        var boss_name = document.createElement('td');
        boss_name.innerHTML = SimpleData[i].name;
        boss_name.className = 'table-center';

        var boss_level = document.createElement('td');
        boss_level.innerHTML = SimpleData[i].level;
        boss_level.className = 'table-center';

        var boss_risk = document.createElement('td');
        boss_risk.innerHTML = risk;
        boss_risk.className = 'table-center '+ risk;
        boss_risk.id = 'customid' + i;

        var eTime = SimpleData[i].enable_time;
        var countDownDate = eTime * 1000;
        var now = new Date().getTime();
        var timeRemaining = countDownDate - now;
        var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000)
        var boss_time = document.createElement('td');
        boss_time.innerHTML = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds ";
        boss_time.id = SimpleData[i].id;

        if(document.getElementById(SimpleData[i].id) == null){
          table_parent.appendChild(table_row);
          table_row.appendChild(boss_name);
          table_row.appendChild(boss_time);
          table_row.appendChild(boss_risk);
          table_row.appendChild(boss_level);
        }
        else{
          document.getElementById(SimpleData[i].id).innerHTML = days + " days " + hours + " hours "
          + minutes + " minutes " + seconds + " seconds ";
          document.getElementById('customid'+i).innerHTML = risk;
          document.getElementById('customid'+i).className = risk;
        }
      }
    });
  }
// TIMER


time=setInterval(function(){
  getSMMO_stats();
  getSMMO_skills();
  getSMMO_bosses();
},10000);

var bar = document.getElementById('bar');
var width = 0;

function resetBar(width){
  width = 0;
  bar.style.width = width + "%";
}

function moveBar(){
  resetBar(width);
  id = setInterval(frame, 1000);
  function frame(){
    if(width >= 100){
      clearInterval(id);
    }
    else{
      width+= 10;
      bar.style.width = width + "%";
      bar.innerHTML = width + "%";
    }
  }
}

