window.onload = function(){
    const mArea = document.getElementById("main");
    const cBttn = document.getElementsByTagName("button");
    
    const seshStatus = document.getElementById("session");
    const fInfo = document.getElementsByTagName("form")[0];
    const subButtn = document.getElementsByName("login")[0];
    
    console.log(subButtn);
    console.log(fInfo);
    console.log(seshStatus.value);
    
    var pgSwitch = (pid) => {
        
        var reqhandle = new XMLHttpRequest;
        
        
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
        if(seshStatus.value == 'true'){
            if (pid == 1){
                reqhandle.open('get',"../PHP scripts/newuser.php", true);
                reqhandle.send();
                
            } else if(pid == 2){
                reqhandle.open('get',"../PHP scripts/newjob.php", true);
                reqhandle.send();
                
            } else if(pid == 0){
                reqhandle.open('get',"../PHP scripts/dashboard.php", true);
                reqhandle.send();
                
            } else if(pid == 3){
                reqhandle.open('get',"../PHP scripts/logout.php", true);
                reqhandle.send();
                window.location.reload(true);
            }
        } else if(pid == 4){
            reqhandle.open('get',"../PHP scripts/dashboard.php", true);
            reqhandle.send();
            
        } else if (pid != 4 || seshStatus.value != 'true'){
                alert("You need to be logged in to do this!!");
                window.location.reload(true);
        }    
    }
    
    
    var login = () => {
        
        var logReq = new XMLHttpRequest;
        
         logReq.onreadystatechange = () =>{
            //Checking ready state
            if (logReq.readyState == 4 && logReq.status == 200) {
                console.log("Success");
                //document.getElementById("result").innerHTML = searchReq.responseText;
                mArea.innerHTML = logReq.responseText;
                alert(logReq.responseText);
                pgSwitch(4);
            } else{
                console.log("there is an error");
            }
        }
        
        logReq.open('post',"../PHP scripts/login.php", true);
        logReq.send(new FormData(fInfo));
        
    }
    
    for(let i = 0; i < cBttn.length; i++){
        cBttn[i].addEventListener("click", function(){
            
            console.log("event triggered");
            pgSwitch(i);
        });
    }
    
    subButtn.addEventListener("click", function(event){
        
        
        console.log("event triggered");
        console.log(fInfo);
        //event.preventDefault();
        login();
        
    });       
    
}