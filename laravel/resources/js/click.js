
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

//     $( document ).ready(function() {


    //     $('#but2').bind('click', function(event) {
            
    //         var classname = $('#parent').attr('class');
    //         console.log($('#parent').attr('class'));

    //         if (classname == "parent"){
    //             $('#parent').removeClass('parent').addClass('canclick');
    //             $('#parent2').removeClass('parent2').addClass('canclick2');
    //             $('#but2').removeClass('edit').addClass('apply');
    //             $("#but2").html("Apply");
    //         }

    //         else if (classname == "canclick") {
    //             $('#parent').removeClass('canclick').addClass('parent');
    //             $('#parent2').removeClass('canclick2').addClass('parent2');
    //             $('#but2').removeClass('apply').addClass('edit');
    //             $("#but2").html("Edit");
                
    //         }

    //     });
    // });