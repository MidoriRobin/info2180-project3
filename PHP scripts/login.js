window.onload = function(){
    const mArea = document.getElementById("main");
    const cBttn = document.getElementsByTagName("button");
    const reqhandle = new XMLHttpRequest;
    const seshStatus = document.getElementById("session");
    const fInfo = new FormData(document.getElementsByTagName("form"));
    const subButtn = document.getElementsByName("submit")[0];
    console.log(fInfo);
    console.log(seshStatus.value);
    
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
            }
        }else {
                alert("You need to be logged in to do this!!");
        }    
    }
    
    for(let i = 0; i < cBttn.length; i++){
        cBttn[i].addEventListener("click", function(){
            
            console.log("event triggered");
            pgSwitch(i);
        });
    }
    
    subButtn.addEventListener("click", function(){
        console.log("event triggered");
        
        });       
    
}