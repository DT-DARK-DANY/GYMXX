function myFunction() {
    document.getElementById("formlogin").style.display = "none";
    document.getElementById("formlogin").style.visibility = "hidden";
    document.getElementById("divline2").style.cssFloat = "left";
    document.getElementById("divline2").style.backgroundColor = "#FF4500";
    document.getElementById("formreg").style.display = "inline";
    document.getElementById("formreg").style.visibility = "visible";
    document.getElementById("input_3").style.color = "white";
    document.getElementById("input_1").style.color = "#FF4500";
    document.getElementById("Image_src1").style.backgroundImage = "url(../photo/Muscles.jpg)";
}
function myFunction2() {
    document.getElementById("formreg").style.display = "none";
    document.getElementById("formreg").style.visibility = "hidden";
    document.getElementById("divline2").style.cssFloat = "right";
    document.getElementById("divline2").style.backgroundColor = "#FF4500";
    document.getElementById("formlogin").style.display = "inline";
    document.getElementById("formlogin").style.visibility = "visible";
    document.getElementById("input_1").style.color = "white";
    document.getElementById("input_3").style.color = "#FF4500";
    document.getElementById("Image_src1").style.backgroundImage = "url(../photo/Gym-full-HD.jpg)";
   
}
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
///////////////validation///////////////
function showSuggestionfs(str){
    if(str.length == 0){
            document.getElementById('FN').innerHTML = '';
    }
    else{
        var request = new XMLHttpRequest();
        request.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var node=document.getElementById('FN');
            node.innerHTML =this.responseText;
        }
        }
        request.open("GET","validation.php?fn="+str,true);
        
        request.send();
    }
    }
    function showSuggestionls(str){
        if(str.length == 0){
                document.getElementById('ln').innerHTML = '';
        }
        else{
            var request = new XMLHttpRequest();
            request.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var node=document.getElementById('ln');
                node.innerHTML =this.responseText;
            }
            }
            request.open("GET","validation.php?ls="+str,true);
            
            request.send();
        }
        }
        function showSuggestionem(str){
            if(str.length == 0){
                    document.getElementById('Em').innerHTML = '';
            }
            else{
                var request = new XMLHttpRequest();
                request.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    var node=document.getElementById('Em');
                    node.innerHTML =this.responseText;
                }
                }
                request.open("GET","validation.php?em="+str,true);
                
                request.send();
            }
            }
            function showSuggestionus(str){
                if(str.length == 0){
                        document.getElementById('US').innerHTML = '';
                }
                else{
                    var request = new XMLHttpRequest();
                    request.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        var node=document.getElementById('US');
                        node.innerHTML =this.responseText;
                    }
                    }
                    request.open("GET","validation.php?US="+str,true);
                    
                    request.send();
                }
                }
                function showSuggestionps(str){
                    if(str.length == 0){
                            document.getElementById('ps').innerHTML = '';
                    }
                    else{
                        var request = new XMLHttpRequest();
                        request.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            var node=document.getElementById('ps');
                            node.innerHTML =this.responseText;
                        }
                        }
                        request.open("GET","validation.php?ps="+str,true);
                        
                        request.send();
                    }
                    }
                    function showSuggestionrps(str){
                        if(str.length == 0){
                                document.getElementById('rps').innerHTML = '';
                        }
                        else{
                            var request = new XMLHttpRequest();
                            request.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                var node=document.getElementById('rps');
                                node.innerHTML =this.responseText;
                            }
                            }
                            request.open("GET","validation.php?rps="+str,true);
                            
                            request.send();
                        }
                        }