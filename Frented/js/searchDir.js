import {service_arr} from './services.js';
import {PopularCities} from './popularCities.js';

const citySearch = document.getElementById('citySearch');
const service = document.getElementById('service');  
const btn = document.getElementById('btn');


btn.onclick  = function(){
    let resultCity = citySearch.value;
    let resultService = service.value;
    if(service_arr.includes(resultService) && PopularCities.includes(resultCity)){
        if(resultService == 'education'){
            window.location.href = '/Frented/cards/aviation.php';
        }else if(resultService == 'home'){
            window.location.href = '/Frented/cards/domestic.php';
        }else if(resultService == 'rent'){
            window.location.href = '/Frented/cards/properties.php';
        }else if(resultService == 'business'){
            window.location.href = '/Frented/cards/web.php';
        }else if(resultService == 'trainng'){
            window.location.href = '/Frented/cards/data.php';
        }else if(resultService == 'health'){
            window.location.href = '/Frented/cards/beauty.php';
        }
    }else{
        alert(`${resultService} service is not available in ${resultCity}`);
    }
}
