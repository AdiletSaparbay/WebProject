function Valid() {
    var x =document.forms["myform"]["password"].value;
    var y =document.forms["myform"]["password2"].value;
    if(x!==y){
      document.getElementById('p').innerHTML="Don't match";
      return false;
    }
  }
