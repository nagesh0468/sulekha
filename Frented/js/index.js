import {
  education,
  home_services,
  b_services_arr,
  properties_arr,
  training_arr,
  health_arr,
  study_arr,
} from "./array.js";
import { cardList, study_card } from "./card.js";

let container = document.getElementById("container");
let h_services = document.getElementById("h_services");
let b_services = document.getElementById("b_services");
let properties = document.getElementById("properties");
let training = document.getElementById("training");
let health = document.getElementById("health");
let cards = document.getElementById("cards");
let toggle = document.querySelector(".toggle");
let drop = document.querySelector(".drop");
let settings = document.querySelector(".settings");

if (container) {
  education.forEach((e) => {
    cardList(e.img, e.title, e.count, container);
  });
} else {
  console.error("you must have container");
}

if (h_services) {
  home_services.forEach((e) => {
    cardList(e.img, e.title, e.count, h_services);
  });
} else {
  console.error("You must have h_services");
}

if (b_services) {
  b_services_arr.forEach((e) => {
    cardList(e.img, e.title, e.count, b_services);
  });
} else {
  console.error("You must have b_services");
}

if (properties) {
  properties_arr.forEach((e) => {
    cardList(e.img, e.title, e.count, properties);
  });
} else {
  console.error("You must have properties");
}

if (training) {
  training_arr.forEach((e) => {
    cardList(e.img, e.title, e.count, training);
  });
} else {
  console.error("You must have training");
}

if (health) {
  health_arr.forEach((e) => {
    cardList(e.img, e.title, e.count, health);
  });
} else {
  console.error("You must have health");
}

if (cards) {
  study_arr.forEach((e) => {
    study_card(e.img, e.title, cards);
  });
} else {
  console.error("You must have cards");
}

if (drop) {
  drop.addEventListener("click", () => {
    settings.classList.toggle("toggle");
  });
}


let nums = document.querySelectorAll(".num");
        let interval = 2000;
        
        nums.forEach(num =>{
            let startValue = 0;
            let endValue = parseInt(num.getAttribute("data-value"));
            let duration = Math.floor(interval / endValue);

            let counter = setInterval(() => {
                startValue += 5;
                num.innerText = startValue;
    
                if(startValue  == endValue){
                    clearInterval(counter);
                }
            }, duration)
        })