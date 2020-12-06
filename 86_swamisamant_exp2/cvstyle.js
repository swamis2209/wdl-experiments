function changecolor() {
  document.getElementById('header').style.backgroundImage="-webkit-linear-gradient(top,rgba(1,1,1,0.8),rgba(150,150,150,1))";
  document.getElementById('left').style.backgroundColor=" rgba(1,1,1,0.8)";
  document.getElementById('h2').style.backgroundColor="rgba(100,100,100,0.5)";
  y=document.getElementsByClassName('link');
  for(i=0;i<y.length;i++){
    y[i].style.backgroundColor="rgba(20,20,20,0.6)";
  }

  y=document.getElementById('abcde')
  if(y!=null){
      y.style.backgroundColor="rgba(80,80,80,0.4)";
  }

  y=document.getElementById('abc')
  if(y!=null){
      y.style.backgroundColor="rgba(1,1,1,1)";
  }
  y=document.getElementsByClassName('white')
  if (y!=null) {
    for (var i = 0; i < y.length; i++) {
      y[i].style.color="white";
  }}
  z=document.getElementsByClassName('th');
  document.getElementById('img').style.filter=" grayscale(30%)";
  s=document.getElementsByClassName('td');
  for(i=0;i<s.length;i++){
    s[i].style.backgroundColor="white"
  }
  if(z!=undefined){
    for(i=0;i<=z.length;i++){
      z[i].style.backgroundColor="rgba(1,1,1,1)";
      z[i].style.backgroundImage="none";
  }
}
}
function changecolorback(){
  location.reload();
}
