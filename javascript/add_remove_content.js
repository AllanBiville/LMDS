function togg2(){
  if(getComputedStyle(probleme2).display == "none"){
    probleme2.style.display = "block";
    add2.style.display = "none";
    add3.style.display = "block";
    remove2.style.display ="block";
  } 
  else{
    probleme2.style.display = "none";
    remove2.style.display="none";
    add2.style.display="block";
    add3.style.display="none";
  }
};
add2.onclick = togg2;
remove2.onclick = togg2;
function togg3(){
  if(getComputedStyle(probleme3).display == "none"){
    probleme3.style.display = "block";
    add3.style.display = "none";
    remove2.style.display="none";
    remove3.style.display="block";
  } 
  else{
    probleme3.style.display = "none";
    remove2.style.display="block";
    remove3.style.display="none";
    add3.style.display="block";
  }
};
add3.onclick = togg3;
remove3.onclick = togg3;

