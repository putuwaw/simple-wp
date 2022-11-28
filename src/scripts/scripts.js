const clickedmenu = document.getElementById("clickedmenu");
if (clickedmenu != null) {
  clickedmenu.onclick = navbar_menu();
}
function navbar_menu() {
  const mymenu = document.getElementById("openmenu");
  const mycloseMenu = document.getElementById("closemenu");
  const mymenuLinks = document.getElementById("mobilemenu");
  if (mymenu != null && mycloseMenu != null && mymenuLinks != null) {
    mycloseMenu.classList.toggle('hidden');
    mymenu.classList.toggle('hidden');
    mymenuLinks.classList.toggle('hidden');
  }
}