fetch("inf.json")
    .then(res=>res.json())
    .then((data)=>{
    	for (var i = 10 - 1; i >= 0; i--) {
    		var h="d"+i;
    		document.getElementById(h).innerHTML=data["header"][i];
    		var p="p"+i;
    		document.getElementById(p).innerHTML=data["info"][i];
    		var x= document.createElement("img");
    		x.src=data["images"][i];
    		x.style.width=250+"px";
    		var f="f"+i;
    		document.getElementById(f).appendChild(x);  
    	}

    });