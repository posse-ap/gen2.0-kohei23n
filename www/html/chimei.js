
    //ボタンの作成
    let ul = document.createElement('ul');
    ul.innerHTML = `<li class="q" id="c${i}.0" onclick="clickfunction(${i},0)">${choices[i][0]}</li>`
                   + `<li class="q" id="c${i}.1" onclick="clickfunction(${i},1)">${choices[i][1]}</li>`
                   + `<li class="q" id="c${i}.2" onclick="clickfunction(${i},2)">${choices[i][2]}</li>`;
    



//ボタンをクリックした時の処理
let clickfunction = function (questionnumber, chosennumber) {
    //正解のindexを取得
        //（例）Q1の場合 answers[questionnumber] は 'たかなわ' に置き換えられる。
            // つまり、choices[0] (['たかなわ', 'たかわ', 'こうわ'])の中から、'たかなわ'の index を取得
    let answernumber = choices[questionnumber].indexOf(answers[questionnumber]);
    let answer = document.getElementById(`c${questionnumber}.${answernumber}`);
    //選んだ選択肢のindexを取得
    let chosen = document.getElementById(`c${questionnumber}.${chosennumber}`);

    if (chosennumber === answernumber) {
        answer.classList.add('correct');
    } else {
        //不正解の時は正解の選択肢も表示
        chosen.classList.add('wrong');  
        answer.classList.add('correct'); 
    }

    //一回クリックしたら再度クリックできなくする
    for (let i = 0; i < 3; i++) {
        document.getElementById(`c${questionnumber}.${i}`).classList.add('oneclick')
    };
}


