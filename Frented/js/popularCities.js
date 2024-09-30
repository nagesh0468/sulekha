import {searchFilter} from './search.js';

export let PopularCities = [
    'Bangalore', 'Chennai', 'Noida', 'Gurgaon', 'Ghaziabad', 'Faridabad', 'Coimbatore', 'Cochin', 'Chandigarh', 'Calicut', 'Bhubaneswar', 'Bhopal', 'Aurangabad', 'Amritsar', 'Allahabad', 'Agra', 'Pune', 'Kolkata', 'Ahmedabad', 'Mumbai', 'Hyderabad', 'Delhi'
];

let citySearch = document.getElementById('citySearch');
let city_list = document.querySelector('.result');

searchFilter(citySearch, PopularCities, city_list)

// if(city_list){
// citySearch.onkeyup = function(){
//     let result = [];
//     let input = citySearch.value;

//     if(input.length){
//         result = PopularCities.filter((keyword) => {
//             return keyword.toLowerCase().includes(input.toLowerCase());
//         })
//     }
    
//     if(!input.length){
//         city_list.innerHTML = "";
//     }
//     display(result);
// }
// }
// function display(result){
//     const content = result.map((list) => {
//         return "<li onclick=selectInput(this)>" + list + "</li>";
//     })

//     city_list.innerHTML = "<ul class='city_list box' >" + content.join('') + "</ul>";
// }

// function selectInput(list){
//     citySearch.value = list.innerHTML;
//     city_list.innerHTML = '';
// }
   