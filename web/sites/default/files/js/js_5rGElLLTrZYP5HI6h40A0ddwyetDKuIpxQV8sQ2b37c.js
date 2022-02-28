flag = false;
document.querySelector('.hamburgericon').addEventListener('click', () => {
    if (!flag) {
        document.querySelector('.menu-toggle').classList.add('menu-untoggle');  // Toggle/click to open.
        document.querySelector('.hamburgernavbar').setAttribute("style", "display: flex;");
        flag = true;
    } else {
       document.querySelector('.menu-toggle').classList.remove('menu-untoggle');   // Toggle/click to close.
        document.querySelector('.hamburgernavbar').setAttribute("style", "display: none;");
        flag = false;
    }
});



// var logo = document.querySelector('.container');
// var menu = document.querySelector('.menu');

// logo.addEventListener('click',function(){
//   menu.classList.toggle('showmenu')
// });


// function myFunction() {
//   var x = document.getElementById("myLinks");
//   if (x.style.display === "block") {
//     x.style.display = "none";
//   } else {
//     x.style.display = "block";
//   }
// }
;
