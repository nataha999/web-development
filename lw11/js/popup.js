const popupBg = document.querySelector('.popup__main');
const popup = document.querySelector('.popup__content');
const openPopupBtn = document.querySelectorAll('.button');
const bodyLock = document.querySelector('.body');
const closePopup1 = document.querySelector('.btn_close-popup-1');
const closePopup2 = document.querySelector('.btn_close-popup-2');
const error = document.querySelector('.popup__error');
const form = document.querySelector('.forma');


openPopupBtn.forEach((button) => {
   button.addEventListener("click", () => {
      form.classList.remove('hide');
      error.classList.remove('show');
      popupBg.classList.add('active')
      popup.classList.add('active')
      bodyLock.classList.add('active')
   })
})



closePopup1.addEventListener('click', () => {
   popupBg.classList.remove('active')
   popup.classList.remove('active')
   bodyLock.classList.remove('active')
})

closePopup2.addEventListener('click', () => {
   popupBg.classList.remove('active')
   popup.classList.remove('active')
   bodyLock.classList.remove('active')
})

document.addEventListener('click', (e) => {
   if (e.target === popupBg) {
      popupBg.classList.remove('active')
      popup.classList.remove('active')
      bodyLock.classList.remove('active')
   }
})

document.addEventListener('keydown', (e) => {
   if (e.key === "Escape") {
      popupBg.classList.remove('active')
      popup.classList.remove('active')
      bodyLock.classList.remove('active')
   }
})