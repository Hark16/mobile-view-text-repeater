
function homeFunction() {

var a = document.getElementById('a').value
var b= document.getElementById('b').value
var c= 1

var h1 = ""
var h2 = ""
var h3 = ""
var h4 = ""
var h= ""

var e= document.getElementById('demo')


while(c<=b){

 h1+= a +". ";
 h2+= a +", ";
 h3+= a +"<br/>";
 h4+= a +""+ c +" ";
 h += a +" ";



c++

}


e.innerHTML= h;

var g= document.getElementById('clip')
var f= document.getElementById('demo1')

g.onclick= function two(){

var el = document.createElement('textarea');
el.value = h;
f.appendChild(el);
el.select();
document.execCommand('copy');

document.body.removeChild(el);

}
}


function newlineFunction() {

var a = document.getElementById('aNL').value
var b= document.getElementById('bNL').value
var c= 1

var h1 = ""
var h2 = ""
var h3 = ""
var h31= ""
var h4 = ""
var h= ""

var e= document.getElementById('demoNL')


while(c<=b){

 h1+= a +". ";
 h2+= a +", ";
 h3+= a +"<br/>";
 h31+= a +"\n";


 h4+= a +""+ c +" ";
 h += a +" ";



c++

}


e.innerHTML= h3;

var g= document.getElementById('clipNL')
var f= document.getElementById('demo1NL')

g.onclick= function two(){

var el = document.createElement('textarea');
el.value = h31;
f.appendChild(el);
el.select();
document.execCommand('copy');

document.body.removeChild(el);

}
}


function numbersFunction() {

var a = document.getElementById('aNum').value
var b= document.getElementById('bNum').value
var c= 1

var h1 = ""
var h2 = ""
var h3 = ""
var h4 = ""
var h= ""

var e= document.getElementById('demoNum')


while(c<=b){

 h1+= a +". ";
 h2+= a +", ";
 h3+= a +"<br/>";
 h4+= a +""+ c +" ";
 h += a +" ";



c++

}


e.innerHTML= h4;

var g= document.getElementById('clipNum')
var f= document.getElementById('demo1Num')

g.onclick= function two(){

var el = document.createElement('textarea');
el.value = h4;
f.appendChild(el);
el.select();
document.execCommand('copy');

document.body.removeChild(el);

}
}


function wordsFunction() {

var a = document.getElementById('aW').value
var b= document.getElementById('bW').value
var c= 1
var h1= ''

var e= document.getElementById('demoW')



var h= ["the","of","and","a","to","in","is","you","that","it","he","was","for","on","are","as","with","his","they","I","at","be","this","have","from","or","one","had","by","word","but","not","what","all","were","we","when","your","can","said","there","use","an","each","which","she","do","how","their","if","will","up","other","about","out","many","then","them","these","so","some","her","would","make","like","him","into","time","has","look","two","more","write","go","see","number","no","way","could","people","my","than","first","water","been","call","who","oil","its","now","find","long","down","day","did","get","come","made","may","part"];

while(c<=b){

var a1 =Math.random()
var b1 =a1 * 99

var c1 = Math.round(b1) 

 h1 += a +" "+ h[c1] +" ";

c++

}


e.innerHTML= h1;

var g= document.getElementById('clipW')
var f= document.getElementById('demo1W')

g.onclick= function two(){

var el = document.createElement('textarea');
el.value = h1;
f.appendChild(el);
el.select();
document.execCommand('copy');

document.body.removeChild(el);

}
}

