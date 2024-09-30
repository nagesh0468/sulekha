export function searchFilter(search, arr, resultBox) {
    search.onkeyup = function () {
        let result = [];
        let input = search.value;

        
        if (input.length) {
            result = arr.filter((keyword) => {
                return keyword.toLowerCase().includes(input.toLowerCase());
            });
        } else {
            resultBox.innerHTML = "";
        }
        display(result);
    };

    
    function display(result) {
        resultBox.innerHTML = "";  

        const ul = document.createElement('ul');
        ul.classList.add('city_list', 'box');

        result.forEach((item) => {
            const li = document.createElement('li');
            li.textContent = item;

            
            li.addEventListener('click', function () {
                selectInput(item);  
            });

            ul.appendChild(li);
        });

        resultBox.appendChild(ul);
    }

    
    function selectInput(selectedItem) {
        search.value = selectedItem; 
        resultBox.innerHTML = '';     
    }
}