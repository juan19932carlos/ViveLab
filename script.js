a = parseInt(document.getElementById("t1").innerHTML);
b = parseInt(document.getElementById("t2").innerHTML);

ans = a+b;
if (isNaN(ans))
	ans = 0;

var res = document.getElementById("ans");
res.innerHTML = ans;
res = document.getElementById("typed");

if (ans === 0){
	res.innerHTML = "zero";
}else{
	n = parseInt( Math.ceil( Math.log(ans+1) / Math.log(10) ) );
	typed = "";

	aux2 = null; // auxiliar unidades
	for (var i = 1; i <= n; i++) {
		p = Math.pow(10,i);
		aux = ans%p-ans%(p/10); //i-esimo termino con 0s a la derecha

		if (i > 1 && 10*aux/p !== 0){
			switch( i%6 ){
				case 1:
					if( 10*aux/p == 1)
						typed = "million " + typed;
					else
						typed = "million " + typed;
					break;
				case 4:
					typed = "thousand " + typed;
					break;
			}
		}

		switch (i%3){
			case 1: // unidades
				aux2 = getValue( 10*aux/p );
				break;
			case 2:
				if (10*aux/p == 1){ //decenas
					typed = getValue( 100*(ans%p-ans%(p/100))/p ) + " " + typed;
				}else{
					typed = getValue( 100*aux/p ) + "-"+ aux2+" " + typed;
				}
				aux2 = null;
				break;
			case 0: //centenas
				if (10*aux/p !==0){
					typed = getValue( 10*aux/p ) + " hundred "+typed;
				}
				break;
		}
	}

	if(aux2 !== null){
		typed = aux2 + " " + typed;
	}

	res.innerHTML = typed; 
}

function getValue(a){
	switch(a){
		case 1:
			return "one";
		case 2:
			return "two";
		case 3:
			return "three";
		case 4:
			return "four";
		case 5:
			return "five";
		case 6:
			return "six";
		case 7:
			return "seven";
		case 8:
			return "eight";
		case 9:
			return "nine";
		case 10:
			return "ten";

		case 11:
			return "eleven";
		case 12:
			return "twelve";
		case 13:
			return "thirteen";
		case 14:
			return "fourteen";
		case 15:
			return "fifteen";
		case 16:
			return "sixteen";
		case 17:
			return "seventeen";
		case 18:
			return "eighteen";
		case 19:
			return "nineteen";

		case 20:
			return "twenty";
		case 30:
			return "thirty";
		case 40:
			return "forty";
		case 50 :
			return "fifty";
		case 60:
			return "sixty";
		case 70:
			return "seventy";
		case 80:
			return "eighty";
		case 90:
			return "ninety";
		default:
			return "";
	}
}