const button = document.querySelector("#button");
const mode_changer = document.querySelector("#mode_changer");
const welcome = document.querySelector("#welcome");
let state = 0;

button.addEventListener('click', function(){
   if (state % 2 === 0)
   {
    mode_changer.style.backgroundColor = "grey";
    mode_changer.style.color = "white";
    welcome.style.color="black";
    intu.style.backgroundColor="black";
    intu2.style.backgroundColor="rgb(122, 68, 68)";
    intu2.style.color="white";
    state++;
   }
   else
   {
    mode_changer.style.backgroundColor = "white";
    mode_changer.style.color = "black";
    welcome.style.color="black";
    intu.style.backgroundColor="white";
    intu2.style.backgroundColor="white";
    intu2.style.color="black";
    state++;
   }
})

