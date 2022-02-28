flag = false;
document.querySelector('.hamburgericon').addEventListener('click', () => {
  if (!flag) 
  {
    // Toggle/click to open.
    document.querySelector('.hamburger').classList.add('hamburgertogglemenu');
    document.querySelector('.search').classList.add('searchHamburger');
    flag = true;
  }
  else
  {
    // Toggle/click to close.
    document.querySelector('.hamburger').classList.remove('hamburgertogglemenu');
    document.querySelector('.search').classList.remove('searchHamburger');
    flag = false;
  }
});
;
