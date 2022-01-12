
    // //ボタンの作成
    // ul.innerHTML = `<li class="q" id="c${i}.0" onclick="clickfunction(${i},0)">${choices[i][0]}</li>`
    //                + `<li class="q" id="c${i}.1" onclick="clickfunction(${i},1)">${choices[i][1]}</li>`
    //                + `<li class="q" id="c${i}.2" onclick="clickfunction(${i},2)">${choices[i][2]}</li>`;
    



//ボタンをクリックした時の処理
let clickfunction = function (questionnumber, chosennumber, answernumber) {
    let answer = document.getElementById(`question${questionnumber}_choice${answernumber}`);
    // console.log(answer);
    let chosen = document.getElementById(`question${questionnumber}_choice${chosennumber}`);
    let correctbox = document.getElementById(`correct_box${questionnumber}`);
    let wrongbox = document.getElementById(`wrong_box${questionnumber}`);
    let clicked = document.getElementById(`question${questionnumber}_choices`);


    if (chosennumber === answernumber) {
        answer.classList.add('correct');
        correctbox.classList.add('correct_ansarea');
        clicked.classList.add('oneclick');
    } else {
        //不正解の時は正解の選択肢も表示
        chosen.classList.add('wrong');  
        answer.classList.add('correct'); 
        wrongbox.classList.add('wrong_ansarea');
        clicked.classList.add('oneclick');
    }

    // 一回クリックしたら再度クリックできなくする
    // for (let i = 1; i <= 6; i++) {
    //     document.getElementById(`question${questionnumber}_choice${i}`).classList.add('oneclick');
    // };


}


