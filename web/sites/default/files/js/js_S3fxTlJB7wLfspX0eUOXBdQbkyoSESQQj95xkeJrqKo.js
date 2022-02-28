flag = false;
document.querySelector('.hamburgericon').addEventListener('click', () => {
  if (!flag) 
  {
    // Toggle/click to open.
    document.querySelector('.hamburger').classList.add('hamburgertogglemenu');
    document.querySelector('.searchHam').classList.add('searchHamburger');
    flag = true;
  }
  else
  {
    // Toggle/click to close.
    document.querySelector('.hamburger').classList.remove('hamburgertogglemenu');
    document.querySelector('.searchHam').classList.remove('searchHamburger');
    flag = false;
  }
});
;
