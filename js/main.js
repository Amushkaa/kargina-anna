const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  autoplay: {
    delay: 2700,
  },
});

const menuButton = document.querySelector(".header-menu-mobile")
menuButton.addEventListener('click', function() {
  document.querySelector ('.header-right').classList.toggle("header-right--visible");
  document.querySelector ('.header-menu-mobile__close').classList.toggle("header-menu-mobile__close--visible");
  document.querySelector ('.header-menu-mobile__button').classList.toggle("header-menu-mobile__button--hidden");
  document.querySelector ('.header').classList.toggle("header--fixed");
});

"use strict"

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById("form");
    form.addEventListener("submit", formSend);


    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);
        let data = new FormData(form)

        if (error === 0) {
          let response = await fetch('send.php', {
            method: 'POST',
            Body: data,
          });
          if (response.ok){
              form.reset();
              formSuccess()
          } else {
              alert('Ошибка, попробуйте позднее')
          }
        } else {
          alert('Пожалуйста, заполните обязательные поля')
        }
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll("._req")

        for (let index = 0; index < formReq.length; index++){
            const input = formReq[index];
            formRemoveError(input);

            if(input.classList.contains("_email")){
                if(emailTest(input)){
                    formAddError(input);
                    error++;
                }
            }else if(input.getAttribute("type") === "checkbox" && input.checked === false){
                formAddError(input);
                error++;
            }else{
                if (input.value === ""){
                    formAddError(input);
                    error++;
                }
            }
        }
        return error
    }
    function formAddError(input) {
        input.classList.add("form__input__error");
    }
    function formRemoveError(input) {
        input.classList.remove("form__input__error");
    }
    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }
    function formSuccess() {
        document.querySelector(".modal").classList.add("modal--visible");
    }
})