flag = false;
document.querySelector('.hamburgericon').addEventListener('click', () => {
  if (!flag) 
  {
    // Toggle/click to open.
    document.querySelector('.hamburger').classList.add('hamburgertogglemenu search');
    flag = true;
  }
  else
  {
    // Toggle/click to close.
    document.querySelector('.hamburger').classList.remove('hamburgertogglemenu search');
    flag = false;
  }
});
;
