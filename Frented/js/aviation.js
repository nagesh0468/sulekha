const arr = [
     'B. Sc. Aviation', 'BBA Airline and Airport Management',  'BBA Aviation Management', 'B.Sc. Aviation (Lateral entry)', 'MBA Airline and Airport Management', 'Diploma in Airline &amp; Airport Management',  'Diploma in Cabin Crew &amp; Ground Operations', 'Certificate in Airport Ground Operations','Certificate in Travel &amp; Tourism', 'Student Pilot Training', 'Private Pilot Training', 'Commercial Pilot Training', 'Type rating'
];

const container = document.getElementById('radio_row');

 function aviationForm (question){
const radioBox = document.createElement('div');
const inputBox = document.createElement('div');
const questionBox = document.createElement('div');
const input = document.createElement('input');
const p = document.createElement('p');

radioBox.classList.add('select_radio', 'box');
inputBox.classList.add('f_check', 'box');
input.classList.add('c_box');
input.name = 'check_list[]';
input.value = question;
input.type = 'checkbox';
questionBox.classList.add('ans');

p.innerHTML = question;
inputBox.appendChild(input);
questionBox.appendChild(p);
radioBox.appendChild(inputBox);
radioBox.appendChild(questionBox);
container.appendChild(radioBox);

console.log(container);

}

console.log(container);

arr.forEach(item => {
    aviationForm(item)
})
