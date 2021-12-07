alert("Ciechawostka! - Dzięki pomocy swojego brata, Łukasiewicz podjął pracę w jednej z najsłynniejszych aptek lwowskich - w aptece Pod Gwaiazdą magistra Piotra Mikolascha. Był bardzo ambitnym i zdolnym pracownikiem, chciał dalej się kształcić w zawodzie, ale zakaz opuszczania miasta uniemożliwiał mu podjęcie studiów. Jednak dzięki pomocy pracodawcy udało mu się wyjechać i podjąć studia na Uniwersytecie Jagiellońskim.");

function zmien()
{
document.getElementById("lata").innerHTML = "żył on 60 lat!";
}


function zarowka()

    {

      alert('Brawo! Odkryłeś specjalny przycisk pokazujący ciekawostkę! - Dzięki pomocy swojego brata, Łukasiewicz podjął pracę w jednej z najsłynniejszych aptek lwowskich - w aptece Pod Gwaiazdą magistra Piotra Mikolascha. Był bardzo ambitnym i zdolnym pracownikiem, chciał dalej się kształcić w zawodzie, ale zakaz opuszczania miasta uniemożliwiał mu podjęcie studiów. Jednak dzięki pomocy pracodawcy udało mu się wyjechać i podjąć studia na Uniwersytecie Jagiellońskim.');

    }

let btred = document.querySelector('#bt-red');
let btgre = document.querySelector('#bt-gre');
let btblue = document.querySelector('#bt-blu');
let dropdown = document.querySelector('select');

btred.addEventListener('click', () => {
    document.body.style.background = 'red';
    
})
btgre.addEventListener('click', () => {
    document.body.style.background = 'green';
    
})
btblue.addEventListener('click', () => {
    document.body.style.background = 'blue';
    
})
document.getElementById("button").bgcolor="#DDDDDD";

function changebackground(){
	document.body.style.backgroundColor = 'green';
}
 var now = new Date();
var someDateInMiliseconds = new Date(10000);
var someDateAsString = new Date("01/02/2000");
var someDate = new Date(2017, 2, 8, 20, 0, 0);