const button = document.querySelector("#button");
const mode_changer = document.querySelector("#mode_changer");

let state = 0;

button.addEventListener('click', function(){
   if (state % 2 === 0)
   {
    mode_changer.style.backgroundColor = "black";
    mode_changer.style.color = "white";
    intu.style.backgroundColor=" rgb(219, 105, 105)";
    intro.style.backgroundColor="rgb(122, 68, 68)";
    intro1.style.backgroundColor="rgb(122, 68, 68)";
    intro2.style.backgroundColor="rgb(122, 68, 68)";
    state++;
   }
   else
   {
    mode_changer.style.backgroundColor = "white";
    mode_changer.style.color = "black";
    intu.style.backgroundColor="white";
    intro.style.backgroundColor="lightcyan";
    intro1.style.backgroundColor="lightcyan";
    intro2.style.backgroundColor="lightcyan";
    state++;
   }
})

