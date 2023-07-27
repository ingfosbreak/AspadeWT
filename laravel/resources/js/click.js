
// function myFunction(){
//     document.getElementById("parent").className = "canclick";
//     console.log("work");
// }

document.getElementById("but2").addEventListener("click", () => {
    
    var classname = document.getElementById("parent").className;
   
    if (classname == "parent"){
        document.getElementById("parent").className = "canclick"; 
        document.getElementById("parent2").className = "canclick2"; 
        document.getElementById("but2").className = 'apply';
        document.getElementById("but2").innerHTML = 'Apply';
    }
    else if (classname == "canclick") {
        document.getElementById("parent").className = "parent"; 
        document.getElementById("parent2").className = "parent2";
        document.getElementById("but2").className = 'edit';
        document.getElementById("but2").innerHTML = 'Edit';
    }
    
   

});