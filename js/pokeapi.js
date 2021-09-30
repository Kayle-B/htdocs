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
        
        // var Parent = document.getElementById('pokemonData');

        // var ul = document.createElement('ul');
        // ul.id = 'dataUl';
        // Parent.appendChild(ul);

        // var image = document.createElement('img');
        // image.id = "img";
        // image.src = result.sprites.front_default;


        // var name = document.createElement('li');
        // name.id = 'name';
        // name.innerHTML = 'Name: ' + result.name;

        // var weight = document.createElement('li');
        // weight.id = 'weight';
        // weight.innerHTML = 'Weight: ' + result.weight;
        
        // var height = document.createElement('li');
        // height.id = 'height';
        // height.innerHTML = 'Height: ' + result.height;

        //     console.log('IN');       
        //     console.log(Parent.childeren);       
        // Parent.appendChild(image);
        // ul.appendChild(name);
        // ul.appendChild(weight);
        // ul.appendChild(height);


    }
  })
}  





// $(document).ready(function(){
//     let url = 'https://pokeapi.co/api/v2/pokemon/ditto';

// })
// document.getElementById








// const pokemon = 'ditto';
// const api_url = 'https://pokeapi.co/api/v2/pokemon/';
// async function getPokemon(){
//     const response = await fetch(api_url + pokemon)
//     const data = await response.json();
//     console.log(data.height);
//     document.getElementById('height').textContent = 'Height: ' + data.height;
// }
// getPokemon();
// fetch('https://pokeapi.co/api/v2/pokemon/ditto')
//     .then(res => {
//         if(res.ok){
//             console.log('success')
//             res.json()
//                 .then(data => console.log(data))
//                 .catch(error => console.log('ERROR'))
//         }else{
//             console.log('Failed to get data')
//         }
//     })