flag = false;
document.querySelector('.hamburgericon').addEventListener('click', () => {
  if (!flag) 
  {
    // Toggle/click to open.
    document.querySelector('.hamburger').classList.add('hamburgertogglemenu');
    flag = true;
  }
  else
  {
    // Toggle/click to close.
    document.querySelector('.hamburger').classList.remove('hamburgertogglemenu');
    flag = false;
  }
});
;
