'use strict';

const choices = [
  ['たかなわ', 'こうわ', 'たかわ'],
  ['かめいど', 'かめど', 'かめと'],
  ['こうじまち', 'おかとまち', 'かゆまち'],
];

const answers = ['たかなわ', 'かめいど', 'こうじまち']


for (let i = 0; i < 3; i++) {
  
  let qDiv = document.createElement('div');
  qDiv.classList.add('qDiv');
  let container = document.getElementById('container');
  container.appendChild(qDiv);

  let h = document.createElement('h1');
  h.innerText = `${i + 1}. この地名はなんて読む？`
  h.classList.add('title');
  qDiv.appendChild(h);

  let img = document.createElement('img');
  img.src = `./img/${i + 1}.png`;
  img.classList.add('image')
  qDiv.appendChild(img);

  function shuffle(array) {
    for(let i = choices.length - 1; i > 0; i--) {
      let r = Math.floor(Math.random() * (i + 1));
      let temp = array[i];
      array[i] = array[r];
      array[r] = temp;
    }
    // for(let i = choices.length - 1; i > 0; i--) {
    //   let r = Math.floor(Math.random() * (i + 1));
    //   [ array[i], array[r] ] = [ array[r], array[i] ];
    //   return array;
    // }
  }       
  
  let shuffleChoices = shuffle(choices[i]);

  let ul = document.createElement('ul');
  ul.classList.add('ul');
  let li = document.createElement('li');
  li.innerHTML = `<li class="question" id="choice${i}-0" onclick="afterClick(${i}, 0)">${choices[i][0]}</li>`
                  + `<li class="question" id="choice${i}-1" onclick="afterClick(${i}, 1)">${choices[i][1]}</li>`
                  + `<li class="question" id="choice${i}-2" onclick="afterClick(${i}, 2)">${choices[i][2]}</li>`
  ul.appendChild(li);
  qDiv.appendChild(ul);

  let ansarea = document.createElement('div');
  ansarea.classList.add('ansarea');
  ansarea.id = `ansarea${i}`;
  qDiv.appendChild(ansarea);

}

function afterClick(questionnumber, chosennumber) {

  let answernumber = choices[questionnumber].indexOf(answers[questionnumber]); 

  let chosen = document.getElementById(`choice${questionnumber}-${chosennumber}`);
  let answer = document.getElementById(`choice${questionnumber}-${answernumber}`);

  let anstitle = document.createElement('p');
  let ansbody = document.createElement('p');

  ansbody.innerText = `正解は「${answers[questionnumber]}」です！`
  ansbody.classList.add('ansbody');
  let ansarea = document.getElementById(`ansarea${questionnumber}`);
  ansarea.appendChild(anstitle);
  ansarea.appendChild(ansbody);

  if ( answernumber == chosennumber ) {
    anstitle.innerText = "正解！"
    anstitle.classList.add('correct');
    chosen.classList.add('blue');
  } else {
    anstitle.innerText = "不正解！"
    anstitle.classList.add('incorrect');
    chosen.classList.add('red');
    answer.classList.add('blue');
  };

  let noclick = document.getElementsByClassName('question');
  for (let i = 0; i < 3; i++) {
    noclick[i].classList.add('noclick');
  }
 
} 