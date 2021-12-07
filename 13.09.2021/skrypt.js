var a = parseInt(prompt("Podaj a: "));
var b = parseInt(prompt("Podaj b: "));
var c = parseInt(prompt("Podaj c: "));

var delta = Math.pow(b,2) - 4*a*c;

if (delta<0)
    {
        document.write("Brak pierwiastków");
    }
else if (delta == 0)
    {
        var x = (-1*b)/2*a;
        document.write("Jest tylko jeden pierwiastek. Wynosi:  "+x);
    }
else if(delta>0)
    {
        var x1 = ((-1*b) - Math.sqrt(delta))/2*a;
        var x2 = ((-1*b) + Math.sqrt(delta))/2*a;
        document.write("Funkcja ma dwa pierwiastki. Wynoszą: "+x1+"oraz " + x2);
    }
