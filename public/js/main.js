let buttonLeft = document.getElementById('left');
let buttonRight = document.getElementById('right');
let slider = document.getElementsByClassName('profile')
let profiles = document.getElementsByClassName('profile-content')

let w = 80*(profiles.length-4);
let l = 0;
let movePer = 4*80;
let maxMove = w-80;
buttonLeft.style.display = "none";
let right_mover = ()=>{
    l = l + movePer;

    if (l >= maxMove) {
        buttonRight.style.display = 'none';
    }
    for(const i of slider)
    {
        if (l > maxMove){
            l = l - movePer;
        }
        i.style.left = '-' + (l+18) + 'px';
    }
    if (buttonLeft.style.display === "none") {
        buttonLeft.style.display = "block"
    }
}
let left_mover = ()=>{
    l = l - movePer;
    if (l<=0){
        l = 0;
        buttonLeft.style.display = "none"
    }
    for(const i of slider){
        i.style.left = '-' + (l+18) + 'px';
    }
    if (buttonRight.style.display === "none") {
        buttonRight.style.display = "block"
    }
}

buttonRight.onclick = ()=>{right_mover();}
buttonLeft.onclick = ()=>{left_mover();}
