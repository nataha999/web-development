let expName = new RegExp('^[а-яА-Яa-zA-Z]+$');
let expEmail =  new RegExp('^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$');
const nameU = document.getElementsByClassName('popup__inp')[0];
const email = document.getElementsByClassName('popup__inp')[1];
const job = document.getElementById('job');
const agree = document.getElementById('agree');

function checkForm(event) 
{
  event.preventDefault();
  nameU.classList.remove('error2');
  let validName = expName.test(nameU.value);
  if (!validName) 
  {
    nameU.classList.add('error2');
  }
  let validEmail = expEmail.test(email.value);
  email.classList.remove('error2');
  if (!validEmail) 
  {
    email.classList.add('error2');
  }
  if (validName && validEmail)
  {
    sendForm();
  }
}

function sendForm()
{
  const name = document.getElementsByClassName('popup__inp')[0];
  const popupBg = document.querySelector('.popup__main');
  const popup = document.querySelector('.popup__content');
  const bodyLock = document.querySelector('.body');
  const error = document.querySelector('.popup__error');
  const form = document.querySelector('.forma');
  const user = {
    email: email.value,
    name: name.value,
    job: job.value,
    agree: agree.value,
  }
  fetch('form_ajax.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8',
    },
    body: JSON.stringify(user),
  })
  .then(response => response.json())
  .then(json =>{
    console.log(json);
    popupBg.classList.remove('active');
    popup.classList.remove('active');
    bodyLock.classList.remove('active');
  })
  .catch((response) => {
    console.log(response);
    form.classList.add('hide');
    error.classList.add('show');
  })
}


const submitButton = document.querySelector('.form__button');
submitButton.addEventListener('click', (event) => checkForm(event));