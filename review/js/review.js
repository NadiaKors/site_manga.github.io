let divSlider = document.querySelectorAll(".divSlider");
let controlls = document.querySelectorAll(".controlls");
let imgIndex = 0;
function show(index) {
  divSlider[imgIndex].classList.remove('active');
  divSlider[index].classList.add('active');
  imgIndex = index;
}
controlls.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev')){
      let index = imgIndex - 1;

      if (index < 0){
        index = divSlider.length - 1;
      }
      show(index);
    }else if(event.target.classList.contains('next')){
      let index = imgIndex + 1;
      if(index >= divSlider.length){
        index=0;
      }
      show(index);
    }
  })
})
show(imgIndex);