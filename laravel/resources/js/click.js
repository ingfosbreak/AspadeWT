
// function myFunction(){
//     document.getElementById("parent").className = "canclick";
//     console.log("work");
// }

document.getElementById("but").addEventListener("click", () => {
    
    var classname = document.getElementById("parent").className;
   
    if (classname == "parent"){
        document.getElementById("parent").className = "canclick"; 
        document.getElementById("parent2").className = "canclick2"; 
        document.getElementById("but").className = 'apply';
        document.getElementById("but").innerHTML = 'Apply';
    }
    else if (classname == "canclick") {
        document.getElementById("parent").className = "parent"; 
        document.getElementById("parent2").className = "parent2";
        document.getElementById("but").className = 'edit';
        document.getElementById("but").innerHTML = 'Edit';
    }
    
   

});