<!DOCTYPE html>
<html>
    <head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
justRepeatIt.club
</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168922840-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168922840-1');
</script>

        <link rel="stylesheet" href="mystyle.css">
<script src="index.js"></script>

    </head>
    <body>

                <div class="container text-capitalize" style="position:fixed; top:0px;">
<div class='row'>
<div class='col-xs-12'>

 <button type="button" style="margin-left : 75% ; " class="btn btn-primary" id='mybtn'> 
    <i class="fa fa-bars"> Menu </i>
                </button>
    
    
    <div style="padding-left: 10px; width: 100% ; border: 2px dotted dashed solid DodgerBlue ; background-color : black ; font-size: 18px; font-weight: bold;" class="container d-flex align-items-end" id='mydiv' hidden>

        <hr/>
        <a href='index.html' style="color: red ; ">    Home </a>

<br/><br/><a style="color:orange;" href="calculator.html" >    Age Calculator </a>

<br/><br/><a style="color:orange;" href="countdown.html" >    Event CountDownTimer </a>

<br/><br/><a style="color:orange;" href="game.html" >    Games </a>

<br/><br/><a style="color: white ;" href="https://www.facebook.com" >    share Fb </a>
        
<br/><br/><a style="color: yellow ;" href="whatsapp://send?text= %20" data-action="share/whatsapp/share" >    share whatsApp </a>

        <br/><br/><a href='about.html' >    About page</a>
        
        <br/><br/><a href='contact.html' >    Contact Us</a>
        
        <br/><br/><a href='privacy.html' >    Privacy page</a>
        
        <br/><br/><a href='tnc.html' >    terms&conditions </a>

<hr/>

</div>
</div>
</div>

<div class="row">
  <div class="col-xs-3">

<a href='index.html'>
<img class="img-responsive img-thumbnail" src="imgs/logo.png" alt="logo" style="hight: 81px; width: 154px;">
</a>
</div>

  <div class="col-xs-9">
      
<h5> Welcome in Just Repeat It </h5>      
      </div>

</div>
</div>
<hr/>


<div class="container">

<div id="clockbox">
</div>
</div>
<div class="container">


</div>

<?php

// new year

$y= 2021;
$n= 01;
$m1 = $n-1;

$dt= 01 ;
$hr= 00 ;
$min= 00 ;
$sec= 00 ;

// diwali

$y1= 2020;
$n1= 11;
$m11 = $n1-1;

$dt1= 14 ;
$hr1= 00 ;
$min1= 00 ;
$sec1= 00 ;

//x mas

$y2= 2020;
$n2= 12 ;
$m12 = $n2-1;

$dt2= 25 ;
$hr2= 00 ;
$min2= 00 ;
$sec2= 00 ;

//olympics

$y3= 2021;
$n3= 07 ;
$m13 = $n3-1;

$dt3= 23 ;
$hr3= 00 ;
$min3= 00 ;
$sec3= 00 ;

?>



<script type="text/javascript">


var CDown = function() {
this.state=0;

this.counts=[];

this.interval=null;// setInterval object
}

CDown.prototype = {
init: function(){
this.state=1;
var self=this;
this.interval=window.setInterval(function(){self.tick();}, 1000);
},
add: function(date,id){
this.counts.push({d:date,id:id});
this.tick();
if(this.state==0) this.init();
},
expire: function(idxs){

for(var x in idxs) {
this.display(this.counts[idxs[x]], "Now!");

document.getElementById('countbox1').innerHTML= "<h1> <b> Over </b> </h1>";

this.counts.splice(idxs[x], 1);
}
},
format: function(r){
var pre='',post='',divide=', ',
out="";
if(r.d != 0){out += pre+r.d +" "+((r.d==1)?"day":"days")+post+divide;}
if(r.h != 0){out += pre+r.h +" "+((r.h==1)?"hour":"hours")+post+divide;}
out += pre+r.m +" "+((r.m==1)?"min":"mins")+post+divide;
out += pre+r.s +" "+((r.s==1)?"sec":"secs")+post+divide;

return out.substr(0,out.length-divide.length);
},
math: function(work){
var	y=w=d=h=m=s=ms=0;

ms=(""+((work%1000)+1000)).substr(1,3);
work=Math.floor(work/1000);//kill the "milliseconds" so just secs

y=Math.floor(work/31536000);//years (no leapyear support)
w=Math.floor(work/604800);//weeks
d=Math.floor(work/86400);//days
work=work%86400;

h=Math.floor(work/3600);//hours
work=work%3600;

m=Math.floor(work/60);//minutes
work=work%60;

s=Math.floor(work);//seconds

return {y:y,w:w,d:d,h:h,m:m,s:s,ms:ms};
},
tick: function(){
var now=(new Date()).getTime(),
expired=[],cnt=0,amount=0;

if(this.counts)
for(var idx=0,n=this.counts.length; idx<n; ++idx){
cnt=this.counts[idx];
amount=cnt.d.getTime()-now;//calc milliseconds between dates

// if time is already past
if(amount<0){
expired.push(idx);
}
// date is still good
else{
this.display(cnt, this.format(this.math(amount)));
}
}

// deal with any expired
if(expired.length>0) this.expire(expired);

// if no active counts, stop updating
if(this.counts.length==0) window.clearTimeout(this.interval);

},
display: function(cnt,msg){
document.getElementById(cnt.id).innerHTML=msg;
}
};

window.onload=function(){
// new year


var cdown = new CDown();

var y= <?php echo($y); ?>;
var m1= <?php echo($m1); ?>;
var dt= <?php echo($dt); ?>;
var hr= <?php echo($hr); ?>;
var min= <?php echo($min); ?>;
var sec= <?php echo($sec); ?>;

var m3=new Date(y,m1,dt,hr,min,sec);
cdown.add(m3, "countbox1");

//diwali

var cdown1 = new CDown();

var y1= <?php echo($y1); ?>;
var m11= <?php echo($m11); ?>;
var dt1= <?php echo($dt1); ?>;
var hr1= <?php echo($hr1); ?>;
var min1= <?php echo($min1); ?>;
var sec1= <?php echo($sec1); ?>;

var m31=new Date(y1,m11,dt1,hr1,min1,sec1);
cdown1.add(m31, "countbox2");



// x mas

var cdown2 = new CDown();

var y2= <?php echo($y2); ?>;
var m12= <?php echo($m12); ?>;
var dt2= <?php echo($dt2); ?>;
var hr2= <?php echo($hr2); ?>;
var min2= <?php echo($min2); ?>;
var sec2= <?php echo($sec2); ?>;

var m32=new Date(y2,m12,dt2,hr2,min2,sec2);
cdown2.add(m32, "countbox3");



//olympics

var cdown3 = new CDown();

var y3= <?php echo($y3); ?>;
var m13= <?php echo($m13); ?>;
var dt3= <?php echo($dt3); ?>;
var hr3= <?php echo($hr3); ?>;
var min3= <?php echo($min3); ?>;
var sec3= <?php echo($sec3); ?>;

var m33=new Date(y3,m13,dt3,hr3,min3,sec3);
cdown3.add(m33, "countbox4");



};


var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){

var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();

var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";

document.getElementById('clockbox').innerHTML= "current time ...<br/>"+clocktext;

}

GetClock();
setInterval(GetClock,1000);


$("#mybtn").click(function(){
  $("#mydiv").slideToggle(750);
});
</script>

<div class="container">
<h3>
<i>
upcoming Events
</i></h3>

<h1>New Year Countdown </h1>

<div id="countbox1"></div>
<h5><b> days left </b> </h5> <hr/>

<h1>Deepawali Countdown </h1>

<div id="countbox2"></div>
<h5><b> days left </b> </h5> <hr/>

<h1>X-Mas Countdown </h1>

<div id="countbox3"></div>
<h5><b> days left </b> </h5> <hr/>

<h1>Olympics Games Countdown </h1>

<div id="countbox4"></div>
<h5><b> days left </b> </h5> <hr/>
<hr/>

</div>



    </body>
</html>
