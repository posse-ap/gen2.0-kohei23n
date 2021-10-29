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
    langbox.classList.toggle('option_clicked');
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

// COLUMN CHART

google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawColumnChart);
      function drawColumnChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'Day of Month');
        data.addColumn('number', 'Hours Studied');

        data.addRows([
          [1, 3], 
          [2, 4],
          [3, 5],
          [4, 3],
          [5, 0],
          [6, 0],
          [7, 4],
          [8, 2],
          [9, 2],
          [10, 8],
          [11, 8],
          [12, 2],
          [13, 2],
          [14, 1],
          [15, 7],
          [16, 4],
          [17, 4],
          [18, 3],
          [19, 3],
          [20, 3],
          [21, 2],
          [22, 2],
          [23, 6],
          [24, 2],
          [25, 2],
          [26, 1],
          [27, 1],
          [28, 1],
          [29, 7],
          [30, 8]
        ]);

        // var data = new google.visualization.arrayToDataTable([
        //   ['Day', 'Hours'],
        //   ['1', 3], 
        //   ['2', 4],
        //   ['3', 5],
        //   ['4', 3],
        //   ['5', 0],
        //   ['6', 0],
        //   ['7', 4],
        //   ['8', 2],
        //   ['9', 2],
        //   ['10', 8],
        //   ['11', 8],
        //   ['12', 2],
        //   ['13', 2],
        //   ['14', 1],
        //   ['15', 7],
        //   ['16', 4],
        //   ['17', 4],
        //   ['18', 3],
        //   ['', 3],
        //   ['20', 3],
        //   ['', 2],
        //   ['22', 2],
        //   ['', 6],
        //   ['24', 2],
        //   ['', 2],
        //   ['26', 1],
        //   ['', 1],
        //   ['28', 1],
        //   ['', 7],
        //   ['30', 8],
        // ],
        // false);

      var options = {
        // width: '85%',
        // height: '90%',
        chartArea: { width: '85%', height: '85%'},
        legend: { position: 'none' },
        hAxis: { 
          ticks: [2,4,6,8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30],
          // ticks: {
          //   min: 1,
          //   max: 30,
          //   stepSize: 2,
          //   // maxTicksLimit: 16,
          // },
          gridlines: {color: 'transparent'},
          textStyle: {
            color: '#b8cddf'
          }
         },
        vAxis: {
          gridlines: {color: 'transparent'},
          baselineColor: 'transparent',
          format: '#h',
          textStyle: {
            color: '#b8cddf'
          }
        },
        colors:['#36c0f5'],
        maintainAspectRatio: false

      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('column'));

      chart.draw(data, options);
      }


// DONUT CHART 

// STUDY LANGUAGE
google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawDonut1);
      function drawDonut1() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours'],
          ['HTML',     30],
          ['CSS',      20],
          ['SQL',  20],
          ['SHELL',  20],
          ['Javascript',  10],
          ['その他',  10],
          ['PHP',  5],
          ['Laravel',  5],
        ]);

        var options = {
          chartArea: {  width: "90%", height: "100%" },
          pieHole: 0.4,
          slices: {
            0: { color: '#0445ec' },
            1: { color: '#0f70bd' },
            2: { color: '#20bdde' },
            3: { color: '#3ccefe' },
            4: { color: '#b29ef3' },
            5: { color: '#6c46eb' },
            6: { color: '#4a17ef' },
            7: { color: '#3005c0' },
          },
          legend: {
            position: 'none',
          },
          pieSliceBorderColor: 'none',


        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_lang'));
        chart.draw(data, options);
      }

// STUDY CONTENT
google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawDonut2);
      function drawDonut2() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours'],
          ['N予備校',     40],
          ['課題',  40],
          ['ドットインストール',      20]
        ]);

        var options = {
          chartArea: {  width: "100%", height: "100%" },
          pieHole: 0.4,
          slices: {
            0: { color: '#0445ec' },
            1: { color: '#0f70bd' },
            2: { color: '#20bdde' }
          },
          legend: {
            position: 'none',
          },
          pieSliceBorderColor: 'none',

        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_content'));
        chart.draw(data, options);
      }

      


