window.onload = function(){
    const mArea = document.getElementById("main");
    const cBttn = document.getElementsByTagName("button");
    const reqhandle = new XMLHttpRequest;
    
    var pgSwitch = (pid) => {
        
        var page;
        
        reqhandle.onreadystatechange = () =>{
            //Checking ready state
            if (reqhandle.readyState == 4 && reqhandle.status == 200) {
                console.log("Success");
                //document.getElementById("result").innerHTML = searchReq.responseText;
                mArea.innerHTML = reqhandle.responseText;
            } else{
                console.log("there is an error");
            }
        }
        
        if (pid == 1){
            reqhandle.open('get',"../PHP scripts/newuser.php", true);
            reqhandle.send();
        } else if(pid == 2){
            reqhandle.open('get',"../PHP scripts/newjob.php", true);
            reqhandle.send();
        } else if(pid == 0){
            reqhandle.open('get',"../PHP scripts/dashboard.php", true);
            reqhandle.send();
        }
    }
    
    for(let i = 0; i < cBttn.length; i++){
        cBttn[i].addEventListener("click", function(){
            
            console.log("event triggered");
            pgSwitch(i);
        });
    }
    
}