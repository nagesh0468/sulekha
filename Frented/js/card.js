

 export function cardList(imageSrc, cardTitle, cardCount, box) {
   let cardDiv = document.createElement('div');
   let imgDiv = document.createElement('div');
   let contentDiv = document.createElement('div');
   let titleDiv = document.createElement('div');
   let btnDiv = document.createElement('div');

    cardDiv.classList.add('card');
    imgDiv.classList.add('c_img_');
    contentDiv.classList.add('c_content');
    titleDiv.classList.add('c_title');
    btnDiv.classList.add('c_btn', 'box');
    
    let str = cardTitle;
    let firstWord = str.split(' ')[0].toLowerCase(); 
    
  
    let imgElement = document.createElement('img');
    let h3Element = document.createElement('h3');
    let pElement = document.createElement('p');
    let buttonElement = document.createElement('button');
    let form = document.createElement('form');
        form.action = `/Frented/cards/${firstWord}.php`;
        buttonElement.classList.add('btn_');
        buttonElement.type = 'submit';
        form.appendChild(buttonElement);
        
    imgElement.src = `/Frented/images/${imageSrc}`;
    imgElement.alt = `${imageSrc}`;
    imgElement.style.width = "100%";
    h3Element.innerText = cardTitle;
    pElement.innerText = cardCount;
    buttonElement.innerText = "GET QUOTES";

    imgDiv.appendChild(imgElement);
    contentDiv.appendChild(titleDiv);
    contentDiv.appendChild(btnDiv);
    titleDiv.appendChild(h3Element);
    btnDiv.appendChild(pElement);
    btnDiv.appendChild(form);

    cardDiv.appendChild(imgDiv);
    cardDiv.appendChild(contentDiv);
    box.appendChild(cardDiv);

   
}

export function study_card(img, title, box){
  let card = document.createElement('div');
  let card_img = document.createElement('div');
  let card_title = document.createElement('div');
  let card_round = document.createElement('div');
  let imgE = document.createElement('img');
  let p = document.createElement('p');

  card.classList.add('s_card');
  card_img.classList.add('s_img', 'box');
  card_title.classList.add('s_name', 'box');
  card_round.classList.add('s_round');
  imgE.src = `/Frented/images/${img}`;
  imgE.classList.add('m_round')
  p.innerText = title;

  card.appendChild(card_img);
  card.appendChild(card_title);
  card_img.appendChild(card_round);
  card_round.appendChild(imgE);
  card_title.appendChild(p);

  box.append(card);

}
