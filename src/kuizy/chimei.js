let choices = [
    ['たかなわ', 'たかわ', 'こうわ'],
    ['かめいど', 'かめど', 'かめと'],
    ['こうじまち', 'おかとまち', 'かゆまち'],
    ['おなりもん', 'おかどもん', 'ごせいもん'],
    ['とどろき', 'たたら', 'たたりき'],
    ['しゃくじい', 'いじい', 'せきこうい'],
    ['ぞうしき', 'ざっしき', 'ざっしょく'],
    ['おかちまち', 'みとちょう', 'ごしろちょう'],
    ['ししぼね', 'しこね', 'ろっこつ'],
    ['こぐれ', 'こばく', 'こしゃく'],
];

let choiceLength = 3;

let answers = ['たかなわ', 'かめいど', 'こうじまち', 'おなりもん', 'とどろき', 'しゃくじい', 'ぞうしき', 'おかちまち', 'ししぼね', 'こぐれ', ]

for (let i = 0; i < 10; i++) {

    //問題ごとにdivを作成
    let qDiv = document.createElement('div');
    qDiv.classList.add('qDiv');
        //全体のdivに入れる
    let container = document.getElementById('quizContainer');
    container.appendChild(qDiv);
            
    //問題文
    let title = document.createElement('h1');
    title.innerText = `${i + 1}.この地名はなんて読む？`;
    title.classList.add('nameunderline');
    qDiv.appendChild(title);

    //画像
    let img = document.createElement('img');
    img.src = `./img/img${i + 1}.png`
    qDiv.appendChild(img);

    //ボタンシャッフル機能
    function shuffle(arr) {
        for (let i = arr.length - 1; i > 0; i--) { // i = ランダムに選ぶ終点のインデックス
          let j = Math.floor(Math.random() * (i + 1));  // j = 範囲内から選ぶランダム変数
          [arr[j], arr[i]] = [arr[i], arr[j]]; // 分割代入 i と j を入れ替える
        }
        return arr;
    };
    let shuffledChoices = shuffle(choices[i]);

    //ボタンの作成
    let ul = document.createElement('ul');
    ul.innerHTML = `<li class="q" id="c${i}.0" onclick="clickfunction(${i},0)">${choices[i][0]}</li>`
                   + `<li class="q" id="c${i}.1" onclick="clickfunction(${i},1)">${choices[i][1]}</li>`
                   + `<li class="q" id="c${i}.2" onclick="clickfunction(${i},2)">${choices[i][2]}</li>`;
    ul.classList.add('ul');
    qDiv.appendChild(ul);

    //回答エリア（正解・不正解表示）作成
    let ansarea = document.createElement('div');
    ansarea.id = `ansarea${i}`;
    qDiv.appendChild(ansarea);

}

//ボタンをクリックした時の処理
let clickfunction = function (questionnumber, chosennumber) {
    //正解のindexを取得
        //（例）Q1の場合 answers[questionnumber] は 'たかなわ' に置き換えられる。
            // つまり、choices[0] (['たかなわ', 'たかわ', 'こうわ'])の中から、'たかなわ'の index を取得
    let answernumber = choices[questionnumber].indexOf(answers[questionnumber]);
    let answer = document.getElementById(`c${questionnumber}.${answernumber}`);
    //選んだ選択肢のindexを取得
    let chosen = document.getElementById(`c${questionnumber}.${chosennumber}`);
    //回答エリア（正解・不正解表示）のタイトル作成
    let ansarea = document.getElementById(`ansarea${questionnumber}`);
    let resultTitle = document.createElement('p');
    ansarea.appendChild(resultTitle);

    //回答エリア（正解・不正解表示）の説明文作成
    let resultBody = document.createElement('p');
    //10個できた ansarea を配列として扱う
    let ansareaChoice = [ansarea];
    ansareaChoice.forEach(ansarea => {
        ansarea.classList.add('ansarea');
        //回答の説明
        resultBody.classList.add('ansexp');
        resultBody.innerHTML = `正解は「${answers[questionnumber]}」です！`;
        ansarea.appendChild(resultBody);
    });        

    if (chosennumber === answernumber) {
        answer.classList.add('correct');
        resultTitle.innerHTML = `<p class="c_ansmsg">正解です！</p>`;
    } else {
        //不正解の時は正解の選択肢も表示
        chosen.classList.add('wrong');  
        answer.classList.add('correct'); 
        resultTitle.innerHTML = `<p class="w_ansmsg">不正解です！</p>`;
    }

    //一回クリックしたら再度クリックできなくする
    for (let i = 0; i < 3; i++) {
        document.getElementById(`c${questionnumber}.${i}`).classList.add('oneclick')
    };
}
