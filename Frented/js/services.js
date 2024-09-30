import {searchFilter} from './search.js';

let citySearch = document.getElementById('service');
let city_list = document.querySelector('.service_result');
export let service_arr = ['education', 'home', 'rent', 'trainng', 'health', 'business'];

searchFilter(citySearch, service_arr, city_list);
