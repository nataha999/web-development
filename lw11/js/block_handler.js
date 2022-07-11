const usersList = document.getElementsByClassName('form__users-block')[0];
const emptyMessage = document.getElementsByClassName('form__empty-message')[0];
const button = document.getElementsByClassName('form__button')[0];

function formUser({name, email, job, agreement}) {
    const avatarUrl = './images/avatar.svg';
      user = document.createElement('li'),
      elementAvatar = document.createElement('img'),
      elementName = document.createElement('h3'),
      elementEmail = document.createElement('p'),
      elementJob = document.createElement('p'),
      elementAgreement = document.createElement('p');
  
    elementAvatar.src = avatarUrl;
    elementAvatar.alt = 'аватар';
    elementName.textContent = name;
    elementEmail.textContent = email;
    elementJob.textContent = job === '' ? 'Не выбрано' : job;
    elementAgreement.textContent = agreement;
  
    user.classList.add('mainusers-item');
    elementAvatar.classList.add('mainusers-item-avatar');
    elementName.classList.add('mainusers-item-text');
    elementEmail.classList.add('mainusers-item-text');
    elementJob.classList.add('mainusers-item-text');
    elementAgreement.classList.add('mainusers-item-text');
  
    user.appendChild(elementAvatar);
    user.appendChild(elementName);
    user.appendChild(elementEmail);
    user.appendChild(elementJob);
    user.appendChild(elementAgreement);
    return user;
}
function uploadUsers(){
    fetch('load_users.php')
    .then(response => response.json())
    .then(data => {
        usersList.textContent = '';
        console.log(data)
        for (let i = 0; i < data.length; i++){
            usersList.appendChild(formUser(data[i]))
        }
    })
}
button.addEventListener('click', uploadUsers)