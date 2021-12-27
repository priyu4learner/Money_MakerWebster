const button = document.querySelector("#button");
const mode_changer = document.querySelector("#mode_changer");

let state = 0;

button.addEventListener('click', function(){
   if (state % 2 === 0)
   {
    mode_changer.style.backgroundColor = "black";
    mode_changer.style.color = "white";
    intro.style.color="black";
    state++;
   }
   else
   {
    mode_changer.style.backgroundColor = "white";
    mode_changer.style.color = "black";
    state++;
   }
})

