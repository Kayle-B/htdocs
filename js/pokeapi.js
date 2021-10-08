const base_url = 'https://pokeapi.co/api/v2/pokemon/';
function getPokemon(str){
    let pokemon = document.getElementById('input').value.toLowerCase();
    let full_url = base_url + pokemon;
  $.ajax({
    url: full_url,
    contentType: "application/json",
    dataType: 'json',
    success: function(result){
        
        document.getElementById('name').innerHTML = 'Name: ' + result.name;
        document.getElementById('weight').innerHTML = 'Weight: ' +result.weight;
        document.getElementById('height').innerHTML = 'Height: ' +result.height;
        document.getElementById('pokemonImage_Front').src = result.sprites.front_default;
        document.getElementById('pokemonImage_Back').src = result.sprites.back_default;

        document.getElementById('imageFront').innerHTML = 'Front';
        document.getElementById('imageBack').innerHTML = 'Behind';
    }
  })
}  
