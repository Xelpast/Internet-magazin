const openPopUp = document.getElementById('open_pop_up');
const closePopUp = document.getElementById('pop_up_close');
const popUp = document.getElementById('pop_up');

openPopUp.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('active');
})

closePopUp.addEventListener('click', () => {
    popUp.classList.remove('active')
})

const doOpenPopUp = document.querySelector('#doOpenPopUp');
const doClosePopUp = document.getElementById('doPop_up_close');
const doPopUp = document.getElementById('doPop_up');
console.log(doPopUp);
doOpenPopUp.addEventListener('click', function(e){
    e.preventDefault();
    doPopUp.classList.add('active');
    popUp.classList.remove('active')

})

doClosePopUp.addEventListener('click', () => {
    doPopUp.classList.remove('active')
})