
function addEvent()
{

alert("function starts");


var ajaxRequest;  // The variable that makes Ajax possible!
function ajaxFunction(){
   try{
      
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
   }catch (e){
   
      // Internet Explorer Browsers
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
      
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
      
            // Something went wrong
            alert("Your browser broke!");
            return false;
         }
      }
   }

         xmlhttp.onreadystatechange = function()
         {
              // This code will be executed each time the readyState changes
              if(ajaxRequest.readyState == 4){
                 // document.getElementById("result").innerHTML=xmlhttp.responseText;
              }
        }

        xmlhttp.open("get","../php/add_event.php",true);
          xmlhttp.send();


}



    var name=document.getElementById("event_name").innerHTML;  
    var description=document.getElementById("event_description").innerHTML;  
      
   
    $.ajax({


        type: 'get',
        url: '../php/add_event.php',
        data: { event_name: event_name, event_description: description, event_date: "11/11/12" },
        success: function(response) {
           
          
            
             alert("success");
        }
    });





}
