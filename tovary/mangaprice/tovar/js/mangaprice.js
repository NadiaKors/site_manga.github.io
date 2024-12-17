// var sliderIndex = 1;

// showSlides(sliderIndex);


// function plusSlides(n){
//     showSlides(sliderIndex += n);
// }
// function currentSlide(n){
//     showSlides(sliderIndex = n);
// }


// function showSlides(n){
//     var i;
//     var slides = document.getElementsByClassName('mySleder');
//     var dots = document.getElementsByClassName('dot');

//     if(n > slides.length){
//         sliderIndex = 1;
//     }
//     if(n < 1){
//         sliderIndex = slides.length;
//     }
//     for(i=0;i < slides.length; i++){
//         slides[i].style.display = "none";
//     }
//     for(i=0; i <dots.length; i++){
//         dots[i].className = dots[i].className.replace("active","");
//     }
//     slides[sliderIndex-1].style.display = "block";
//     dots[sliderIndex-1].className+= " active";
// }




let sliders = document.querySelectorAll('.manga');
// sliders - список всех элементов с классом class="manga"
// sliders[0] — первый элемент, sliders[1] — второй, sliders[i] — i-тый.

for (let i = 0; i < sliders.length; i++) {
  // Перебирает все, вызывает функцию для каждого.
  init_slider(sliders[i]);
}

function init_slider(manga) {
  // Значение manga: Очередной sliders[i], переданный при вызове функции.
  
  let imgSlider = manga.querySelectorAll('.imgSlider');
  // Вместо document.query... Получается список всех class="imgSlider"
  // которые находятся где-то внутри текущего элемента manga.
  
  let next = manga.querySelector('.next');
  // Кнопка next внутри этого manga.

  let prev = manga.querySelector('.prev');
  // Кнопка prev внутри этого manga.
  
  let i = 0;
  // Номер текущего "открытого" слайда.
  
  next.addEventListener('click', 
    function() {
      imgSlider[i].classList.remove('blockSlider');
      // imgSlider[i] - открытый слайд. Скрываем.
    
      i = (i + 1) % imgSlider.length; // (*1)
    
      imgSlider[i].classList.add('blockSlider');
    // imgSlider[i] - следующий слайд. Показываем.
  });  

  prev.addEventListener('click', 
    function() {
      imgSlider[i].classList.remove('blockSlider');
      // imgSlider[i] - открытый слайд. Скрываем.
    
      i = (imgSlider.length - 1) % imgSlider.length; // (*1)
    
      imgSlider[i].classList.add('blockSlider');
    // imgSlider[i] - следующий слайд. Показываем.
  });
}
let dotss = document.querySelectorAll('.dotBlock');