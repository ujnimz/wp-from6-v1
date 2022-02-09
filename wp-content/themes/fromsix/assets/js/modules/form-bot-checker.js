const feedback_form = document.querySelector(".feedback-form");
if (feedback_form) {
  let counter = 0;
  const textarea = feedback_form.querySelector(".feedback-form__message");
  const inputCounter = document.createElement("input");
  let isCounterInserted = false;
  inputCounter.type = "hidden";
  inputCounter.name = "contact[counter]";
  textarea.addEventListener("keyup", (evt) => {
    inputCounter.value = ++counter;

    if (!isCounterInserted) {
      feedback_form.appendChild(inputCounter);
      isCounterInserted = true;
    }
  });
}
