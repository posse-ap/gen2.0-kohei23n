

// ボタンをクリックした時の処理
let clickfunction = function (questionnumber, chosennumber) {

  // 選択肢
  let answer = document.getElementById(`question${questionnumber}_choice1`);
  let chosen = document.getElementById(`question${questionnumber}_choice${chosennumber}`);
  // 回答エリア
  let answer_box = document.getElementById(`answer_box${questionnumber}`);
  // 回答メッセージ
  let answer_message = document.getElementById(`answer_message${questionnumber}`);
  // 回答説明
  let answer_explain = document.getElementById(`answer_explain${questionnumber}`);
  // ワンクリック
  let clicked = document.getElementById(`question${questionnumber}_choices`);

  if (answer === chosen) {
      answer.classList.add('correct');

      answer_box.classList.add('show_ansarea');
      answer_message.innerText = '正解！';
      answer_message.classList.add('c_ansmsg');
      answer_explain.innerText = `正解は「${answer.innerText}」です。`;

      clicked.classList.add('oneclick');
  } else {
      //不正解の時は正解の選択肢も表示
      chosen.classList.add('wrong');  
      answer.classList.add('correct'); 

      answer_box.classList.add('show_ansarea');
      answer_message.innerText = '不正解！';
      answer_message.classList.add('w_ansmsg');
      answer_explain.innerText = `正解は「${answer.innerText}」です。`;
      
      clicked.classList.add('oneclick');
  }
}
