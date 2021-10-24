'use strict';

// SHOW MODAL

$(function () {
  $('#modalbtn').click(function(){
    $('#modal').css('display', 'block')
    $('.modal_bg').css('display', 'block')

  });
  $('#close').click(function(){
    $('#modal').css('display', 'none')
    $('.modal_bg').css('display', 'none')
  });
});

// CHANGE COLOR OF CHECKBOXES


//動的なidをつける
let contentname = "content"
let firstcirclename = "firstcircle"
let option1 = document.getElementsByClassName("content_op");
let circle1 = document.getElementsByClassName("circle_content");


for (let i = 0; i <= 2; i++) {
    //id追加
    option1[i].setAttribute("id", contentname + i);
    circle1[i].setAttribute("id", firstcirclename + i);
}

for (let i = 0; i <= 2; i++) {
  let contentbox = document.getElementById(`content${i}`);
  let firstcircles = document.getElementById(`firstcircle${i}`);
  contentbox.addEventListener('click', function() {
    contentbox.classList.toggle('option_clicked')
    // contentbox.style.backgroundColor = '#e7f5ff';
    // firstcircles.style.backgroundColor = '#0f70bd';
    firstcircles.classList.toggle('circle_clicked');
  })
}

let langname = "lang"
let secondcirclename = "secondcircle";
let option2 = document.getElementsByClassName("lang_op");
let circle2 = document.getElementsByClassName("circle_lang");

for (let i = 0; i <= 7; i++) {
    //id追加
    option2[i].setAttribute("id", langname + i);
    circle2[i].setAttribute("id", secondcirclename + i);
}

for (let i = 0; i <= 7; i++) {
  let langbox = document.getElementById(`lang${i}`);
  let secondcircles = document.getElementById(`secondcircle${i}`);
  langbox.addEventListener('click', function() {
    langbox.classList.toggle('option_clicked')
    // langbox.style.backgroundColor = '#e7f5ff';
    // secondcircles.style.backgroundColor = '#0f70bd';
    secondcircles.classList.toggle('circle_clicked');
  })
}

// DATE 

$('#datepicker').datepicker();

// LOADING 

let bottom = document.getElementById('bottom_btn');

bottom.addEventListener('click', function() {
  let loader = document.getElementById('loader');
  let hideleft = document.getElementById('modal_left');
  let hideright = document.getElementById('modal_right');
  let hidebottom = document.getElementById('modal_bottom');
  loader.style.display = "block";
  hideleft.style.display = "none";
  hideright.style.display = "none";
  hidebottom.style.display = "none";
});




