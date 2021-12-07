var a = prompt("Podaj liczbę pierwsza:");
var b = prompt("Podaj liczbę drugą:");
var c = prompt("Wybierz jakie chcesz wykonać obliczenie <br> 1 - Dodawanie, 2 - Odejmowanie, 3 - Mnożenie, 4 - Dzielenie.");
var d = 0;
if (c==1){
    d=a+b;
}
if else (c==2){
    d=a-b;
}
if else (c==3){
    d=a*b;
}
if else (c==4){
    d=a/b;
}

else
    {
    document.write("Nie podałeś właściwej cyfry przy wyborze obliczenia!");   
    }

