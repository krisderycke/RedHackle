window.addEventListener("load", bounce);

function bounce() {
  // let textBox = document.getElementById("php");
  // let promptBox = document.getElementById("phpBox");
  let form = document.getElementById("form");
  TweenLite.to(form, 1.5, { ease: Back.easeOut.config(3), x: "50%" });
}
