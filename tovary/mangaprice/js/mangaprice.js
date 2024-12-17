
// let sliders = document.querySelectorAll(".manga");
// sliders - список всех элементов с классом class="manga"
// sliders[0] — первый элемент, sliders[1] — второй, sliders[i] — i-тый.

// for (let i = 0; i < sliders.length; i++) {
  // Перебирает все, вызывает функцию для каждого.
//   init_slider(sliders[i]);
// }

// function init_slider(manga) {
  // Значение manga: Очередной sliders[i], переданный при вызове функции.
  
  // let imgSlider = manga.querySelectorAll(".imgSlider");
  // Вместо document.query... Получается список всех class="imgSlider"
  // которые находятся где-то внутри текущего элемента manga.
  
  // let next = manga.querySelector(".next");
  // Кнопка next внутри этого manga.

  // let prev = manga.querySelector(".prev");
  // Кнопка prev внутри этого manga.
  
  // let i = 0;
  // Номер текущего "открытого" слайда.
  
  // next.addEventListener("click", 
  //   function() {
  //     imgSlider[i].classList.remove("blockSlider");
      // imgSlider[i] - открытый слайд. Скрываем.
    
      // i = (i + 1) % imgSlider.length;
    
      // imgSlider[i].classList.add("blockSlider");
    // imgSlider[i] - следующий слайд. Показываем.
//   });  
// }
//   prev.addEventListener("click", 
//     function() {
//       imgSlider[i].classList.remove("blockSlider");
//        imgSlider[i] - открытый слайд. Скрываем.
    
//       i = (i - 1) * imgSlider.length; // (*1)
    
//       imgSlider[i].classList.add("blockSlider");
//      imgSlider[i] - следующий слайд. Показываем.
//   });
// }

// let sliders = document.querySelectorAll(".manga");

// for (let j = 0; j < sliders.length; j++) {
//   init_slider(sliders[j]);
// }

// function init_slider(manga) {
//   let controlls = manga.querySelectorAll(".controlls");
//   let imgSlider = manga.querySelectorAll(".imgSlider");
//   let i = 0;
  
//   function show(index) {
//     imgSlider[i].classList.remove('blockSlider');
//     imgSlider[index].classList.add('blockSlider');

//     i = index;
//   }
//   controlls.forEach((e) => {
//     e.addEventListener('click', () => {
//       if (Event.target.classList.contains('prev')){
//         let index = i - 1;
  
//         if (index < 0){
//           index = imgSlider.length - 1;
//         }
//         show(index);
//       }else if(Event.target.classList.contains('next')){
//         let index = i + 1;
//         if(index >= imgSlider.length){
//           index=0;
//         }
//         show(index);
//       }
//     })
//   })
//   show(i);
// }
// }else if(event.target.matches('next1')){



// let sliders = document.querySelectorAll(".manga");
let imgSlider1 = document.querySelectorAll(".imgSlider1");
let controlls1 = document.querySelectorAll(".controlls1");
let imgIndex1 = 0;
function show1(index1) {
  imgSlider1[imgIndex1].classList.remove('active');
  imgSlider1[index1].classList.add('active');
  imgIndex1 = index1;
}
controlls1.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev1')){
      let index1 = imgIndex1 - 1;

      if (index1 < 0){
        index1 = imgSlider1.length - 1;
      }
      show1(index1);
    }else if(event.target.classList.contains('next1')){
      let index1 = imgIndex1 + 1;
      if(index1 >= imgSlider1.length){
        index1=0;
      }
      show1(index1);
    }
  })
})
show1(imgIndex1);



let imgSlider2 = document.querySelectorAll(".imgSlider2");
let controlls2 = document.querySelectorAll(".controlls2");
let imgIndex2 = 0;
function show2(index2) {
  imgSlider2[imgIndex2].classList.remove('active');
  imgSlider2[index2].classList.add('active');
  imgIndex2 = index2;
}
controlls2.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev2')){
      let index2 = imgIndex2 - 1;

      if (index2 < 0){
        index2 = imgSlider2.length - 1;
      }
      show2(index2);
    }else if(event.target.classList.contains('next2')){
      let index2 = imgIndex2 + 1;
      if(index2 >= imgSlider2.length){
        index2=0;
      }
      show2(index2);
    }
  })
})
show2(imgIndex2);



let imgSlider3 = document.querySelectorAll(".imgSlider3");
let controlls3 = document.querySelectorAll(".controlls3");
let imgIndex3 = 0;

function show3(index3) {
  imgSlider3[imgIndex3].classList.remove('active');
  imgSlider3[index3].classList.add('active');
  imgIndex3 = index3;
}
controlls3.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev3')){
      let index3 = imgIndex3 - 1;

      if (index3 < 0){
        index3 = imgSlider3.length - 1;
      }
      show3(index3);
    }else if(event.target.classList.contains('next3')){
      let index3 = imgIndex3 + 1;
      if(index3 >= imgSlider3.length){
        index3=0;
      }
      show3(index3);
    }
  })
})
show3(imgIndex3);



let imgSlider4 = document.querySelectorAll(".imgSlider4");
let controlls4 = document.querySelectorAll(".controlls4");
let imgIndex4 = 0;

function show4(index4) {
  imgSlider4[imgIndex4].classList.remove('active');
  imgSlider4[index4].classList.add('active');
  imgIndex4 = index4;
}
controlls4.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev4')){
      let index4 = imgIndex4 - 1;

      if (index < 0){
        index4 = imgSlider4.length - 1;
      }
      show4(index4);
    }else if(event.target.classList.contains('next4')){
      let index4 = imgIndex4 + 1;
      if(index4 >= imgSlider4.length){
        index4=0;
      }
      show4(index4);
    }
  })
})
show4(imgIndex4);



let imgSlider5 = document.querySelectorAll(".imgSlider5");
let controlls5 = document.querySelectorAll(".controlls5");
let imgIndex5 = 0;

function show5(index5) {
  imgSlider5[imgIndex5].classList.remove('active');
  imgSlider5[index5].classList.add('active');
  imgIndex5 = index5;
}
controlls5.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev5')){
      let index5 = imgIndex5 - 1;

      if (index5 < 0){
        index5 = imgSlider5.length - 1;
      }
      show5(index5);
    }else if(event.target.classList.contains('next5')){
      let index5 = imgIndex5 + 1;
      if(index5 >= imgSlider5.length){
        index5=0;
      }
      show5(index5);
    }
  })
})
show5(imgIndex5);



let imgSlider6 = document.querySelectorAll(".imgSlider6");
let controlls6 = document.querySelectorAll(".controlls6");
let imgIndex6 = 0;
function show6(index6) {
  imgSlider6[imgIndex6].classList.remove('active');
  imgSlider6[index6].classList.add('active');
  imgIndex6 = index6;
}
controlls6.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev6')){
      let index6 = imgIndex6 - 1;

      if (index6 < 0){
        index6 = imgSlider6.length - 1;
      }
      show6(index6);
    }else if(event.target.classList.contains('next6')){
      let index6 = imgIndex6 + 1;
      if(index6 >= imgSlider6.length){
        index6=0;
      }
      show6(index6);
    }
  })
})
show6(imgIndex6);



let imgSlider7 = document.querySelectorAll(".imgSlider7");
let controlls7 = document.querySelectorAll(".controlls7");
let imgIndex7 = 0;
function show7(index7) {
  imgSlider7[imgIndex7].classList.remove('active');
  imgSlider7[index7].classList.add('active');
  imgIndex7 = index7;
}
controlls7.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev7')){
      let index7 = imgIndex7 - 1;

      if (index7 < 0){
        index7 = imgSlider7.length - 1;
      }
      show7(index7);
    }else if(event.target.classList.contains('next7')){
      let index7 = imgIndex7 + 1;
      if(index7 >= imgSlider7.length){
        index7=0;
      }
      show7(index7);
    }
  })
})
show7(imgIndex7);



let imgSlider8 = document.querySelectorAll(".imgSlider8");
let controlls8 = document.querySelectorAll(".controlls8");
let imgIndex8 = 0;
function show8(index8) {
  imgSlider8[imgIndex8].classList.remove('active');
  imgSlider8[index8].classList.add('active');
  imgIndex8 = index8;
}
controlls8.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev8')){
      let index8 = imgIndex8 - 1;

      if (index8 < 0){
        index8 = imgSlider8.length - 1;
      }
      show8(index8);
    }else if(event.target.classList.contains('next8')){
      let index8 = imgIndex8 + 1;
      if(index8 >= imgSlider8.length){
        index8=0;
      }
      show8(index8);
    }
  })
})
show8(imgIndex8);



let imgSlider9 = document.querySelectorAll(".imgSlider9");
let controlls9 = document.querySelectorAll(".controlls9");
let imgIndex9 = 0;
function show9(index9) {
  imgSlider9[imgIndex9].classList.remove('active');
  imgSlider9[index9].classList.add('active');
  imgIndex9 = index9;
}
controlls9.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev9')){
      let index9 = imgIndex9 - 1;

      if (index9 < 0){
        index9 = imgSlider9.length - 1;
      }
      show9(index9);
    }else if(event.target.classList.contains('next9')){
      let index9 = imgIndex9 + 1;
      if(index9 >= imgSlider9.length){
        index9=0;
      }
      show9(index9);
    }
  })
})
show9(imgIndex9);



let imgSlider10 = document.querySelectorAll(".imgSlider10");
let controlls10 = document.querySelectorAll(".controlls10");
let imgIndex10 = 0;
function show10(index10) {
  imgSlider10[imgIndex10].classList.remove('active');
  imgSlider10[index10].classList.add('active');
  imgIndex10 = index10;
}
controlls10.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev10')){
      let index10 = imgIndex10 - 1;

      if (index10 < 0){
        index10 = imgSlider10.length - 1;
      }
      show10(index10);
    }else if(event.target.classList.contains('next10')){
      let index10 = imgIndex10 + 1;
      if(index10 >= imgSlider10.length){
        index10=0;
      }
      show10(index10);
    }
  })
})
show10(imgIndex10);



let imgSlider11 = document.querySelectorAll(".imgSlider11");
let controlls11 = document.querySelectorAll(".controlls11");
let imgIndex11 = 0;
function show11(index11) {
  imgSlider11[imgIndex11].classList.remove('active');
  imgSlider11[index11].classList.add('active');
  imgIndex11 = index11;
}
controlls11.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev11')){
      let index11 = imgIndex11 - 1;

      if (index11 < 0){
        index11 = imgSlider11.length - 1;
      }
      show11(index11);
    }else if(event.target.classList.contains('next11')){
      let index11 = imgIndex11 + 1;
      if(index11 >= imgSlider11.length){
        index11=0;
      }
      show11(index11);
    }
  })
})
show11(imgIndex11);



let imgSlider12 = document.querySelectorAll(".imgSlider12");
let controlls12 = document.querySelectorAll(".controlls12");
let imgIndex12 = 0;
function show12(index12) {
  imgSlider12[imgIndex12].classList.remove('active');
  imgSlider12[index12].classList.add('active');
  imgIndex12 = index12;
}
controlls12.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev12')){
      let index12 = imgIndex12 - 1;

      if (index12 < 0){
        index12 = imgSlider12.length - 1;
      }
      show12(index12);
    }else if(event.target.classList.contains('next12')){
      let index12 = imgIndex12 + 1;
      if(index12 >= imgSlider12.length){
        index12=0;
      }
      show12(index12);
    }
  })
})
show12(imgIndex12);



let imgSlider13 = document.querySelectorAll(".imgSlider13");
let controlls13 = document.querySelectorAll(".controlls13");
let imgIndex13 = 0;
function show13(index13) {
  imgSlider13[imgIndex13].classList.remove('active');
  imgSlider13[index13].classList.add('active');
  imgIndex13 = index13;
}
controlls13.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev13')){
      let index13 = imgIndex13 - 1;

      if (index13 < 0){
        index13 = imgSlider13.length - 1;
      }
      show13(index13);
    }else if(event.target.classList.contains('next13')){
      let index13 = imgIndex13 + 1;
      if(index13 >= imgSlider13.length){
        index13=0;
      }
      show13(index13);
    }
  })
})
show13(imgIndex13);



let imgSlider14 = document.querySelectorAll(".imgSlider14");
let controlls14 = document.querySelectorAll(".controlls14");
let imgIndex14 = 0;
function show14(index14) {
  imgSlider14[imgIndex14].classList.remove('active');
  imgSlider14[index14].classList.add('active');
  imgIndex14 = index14;
}
controlls14.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev14')){
      let index14 = imgIndex14 - 1;

      if (index14 < 0){
        index14 = imgSlider14.length - 1;
      }
      show14(index14);
    }else if(event.target.classList.contains('next14')){
      let index14 = imgIndex14 + 1;
      if(index14 >= imgSlider14.length){
        index14=0;
      }
      show14(index14);
    }
  })
})
show14(imgIndex14);



let imgSlider15 = document.querySelectorAll(".imgSlider15");
let controlls15 = document.querySelectorAll(".controlls15");
let imgIndex15 = 0;
function show15(index15) {
  imgSlider15[imgIndex15].classList.remove('active');
  imgSlider15[index15].classList.add('active');
  imgIndex15 = index15;
}
controlls15.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev15')){
      let index15 = imgIndex15 - 1;

      if (index15 < 0){
        index15 = imgSlider15.length - 1;
      }
      show15(index15);
    }else if(event.target.classList.contains('next15')){
      let index15 = imgIndex15 + 1;
      if(index15 >= imgSlider15.length){
        index15=0;
      }
      show15(index15);
    }
  })
})
show15(imgIndex15);



let imgSlider16 = document.querySelectorAll(".imgSlider16");
let controlls16 = document.querySelectorAll(".controlls16");
let imgIndex16 = 0;
function show16(index16) {
  imgSlider16[imgIndex16].classList.remove('active');
  imgSlider16[index16].classList.add('active');
  imgIndex16 = index16;
}
controlls16.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev16')){
      let index16 = imgIndex16 - 1;

      if (index16 < 0){
        index16 = imgSlider16.length - 1;
      }
      show16(index16);
    }else if(event.target.classList.contains('next16')){
      let index16 = imgIndex16 + 1;
      if(index16 >= imgSlider16.length){
        index16=0;
      }
      show16(index16);
    }
  })
})
show16(imgIndex16);



let imgSlider17 = document.querySelectorAll(".imgSlider17");
let controlls17 = document.querySelectorAll(".controlls17");
let imgIndex17 = 0;
function show17(index17) {
  imgSlider17[imgIndex17].classList.remove('active');
  imgSlider17[index17].classList.add('active');
  imgIndex17 = index17;
}
controlls17.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev17')){
      let inde17 = imgIndex17 - 1;

      if (index17 < 0){
        index17 = imgSlider17.length - 1;
      }
      show17(index17);
    }else if(event.target.classList.contains('next17')){
      let index17 = imgIndex17 + 1;
      if(index17 >= imgSlider17.length){
        index17=0;
      }
      show17(index17);
    }
  })
})
show17(imgIndex17);



let imgSlider18 = document.querySelectorAll(".imgSlider18");
let controlls18 = document.querySelectorAll(".controlls18");
let imgIndex18 = 0;
function show18(index18) {
  imgSlider18[imgIndex18].classList.remove('active');
  imgSlider18[index18].classList.add('active');
  imgIndex18 = index18;
}
controlls18.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev18')){
      let index18 = imgIndex18 - 1;

      if (index18 < 0){
        index18 = imgSlider18.length - 1;
      }
      show18(index18);
    }else if(event.target.classList.contains('next18')){
      let index18 = imgIndex18 + 1;
      if(index18 >= imgSlider18.length){
        index18=0;
      }
      show18(index18);
    }
  })
})
show18(imgIndex18);



let imgSlider19 = document.querySelectorAll(".imgSlider19");
let controlls19 = document.querySelectorAll(".controlls19");
let imgIndex19 = 0;
function show19(index19) {
  imgSlider19[imgIndex19].classList.remove('active');
  imgSlider19[index19].classList.add('active');
  imgIndex19 = index19;
}
controlls19.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev19')){
      let index19 = imgIndex19 - 1;

      if (index19 < 0){
        index19 = imgSlider19.length - 1;
      }
      show19(index19);
    }else if(event.target.classList.contains('next19')){
      let index19 = imgIndex19 + 1;
      if(index19 >= imgSlider19.length){
        index19=0;
      }
      show19(index19);
    }
  })
})
show19(imgIndex19);



let imgSlider20 = document.querySelectorAll(".imgSlider20");
let controlls20 = document.querySelectorAll(".controlls20");
let imgIndex20 = 0;

function show20(index20) {
  imgSlider20[imgIndex20].classList.remove('active');
  imgSlider20[index20].classList.add('active');
  imgIndex20 = index20;
}
controlls20.forEach((e) => {
  e.addEventListener('click', (event) => {
    if (event.target.classList.contains('prev20')){
      let index20 = imgIndex20 - 1;

      if (index20 < 0){
        index20 = imgSlider20.length - 1;
      }
      show20(index20);
    }else if(event.target.classList.contains('next20')){
      let index20 = imgIndex20 + 1;
      if(index20 >= imgSlider20.length){
        index20=0;
      }
      show20(index20);
    }
  })
})
show20(imgIndex20);



















// function show(index) {
//     imgSlider[i].classList.remove("blockSlider");
//     imgSlider[index].classList.add("blockSlider");
//     i = index;
// }

// controlls.forEach((e) => {
//   e.addEventListener('click', () => {
//     if (Event.target.classList.contains('prev')){
//       let index = i - 1;

//       if (index < 0){
//         index = imgSlider.length - 1;
//       }
//       show(index);
//     }else if(Event.target.classList.contains('next')){
//       let index = i + 1;
//       if(index >= imgSlider.length){
//         index=0;
//       }
//       show(index);
//     }
//   })
// })
// show(i);
  


// (*1) i = (i + 1) % slide.length; — a % b дает остаток от деления a на b.

// В этом примере slide.length == 3, получается:

//                                                      i было | стало
// (0 + 1) % 3  →  1   // 1 не делится на 3            ||    0       1
// (1 + 1) % 3  →  2   // 2 не делится на 3            ||    1       2
// (2 + 1) % 3  →  0   // 3 делится на 3, остаток - 0. ||    2       0

// ... зацикливается, и без if-else 


