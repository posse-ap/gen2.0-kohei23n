function clickButton() {
  const btn = document.querySelectorAll(`.quiz1__btn`);
  const correct = document.getElementById(`js__quiz1__correct`);
  const wrong = document.getElementById(`js__quiz1__wrong`);
  const quizAnswer = quiz[i].answer;
  let btnClicked;

  btn.forEach((e) => {
    e.addEventListener('click', () => {
      const clickedAnswer = e.innerHTML;

      if(btnClicked !== true) {
        e.classList.add('js-selected');
        if(clickedAnswer === quizAnswer) {
          correct.classList.add('js-on');
        }
        else {
          wrong.classList.add('js-on');
        };
      };

      btnClicked = true;
    });
  });
};