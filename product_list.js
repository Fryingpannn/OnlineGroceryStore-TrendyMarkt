

    function checkPrice(event){
        var myPrice = event.currentTarget;
        var position = myPrice.value.search(/^\d+(,\d{1,2})?$/);
        if(position!=0){
            alert("The Price input is not a number or the number is not in the right format. The format should be as follow: dd(can be more than two):dd");  
            myPrice.focus();
            myPrice.select();
        }
    }
    

    function checkInventory(event){
        var myPosition = event.currentTarget;
        var position = myPosition.value.search(/^[0-9]+$/);

        
        if(position!=0){
            alert("The Inventory input is not a number");  
            myPosition.focus();
            myPosition.select();
        }
    }

    function checkdescritpion(event){
        var mydescrption = event.currentTarget;
        var position = mydescrption.value.search(/\w*\:\w*/);
        if(position!=0){
            alert("The Description format is not in the right format. The format should be as follows:  Category:name");  
            mydescrption.focus();
            mydescrption.select();
        }
    }


    function selectALL(isChecked){

        if(isChecked){
        var checkboxes = document.getElementsByName('select');
        for(var i=0;i<checkboxes.length;i++){
            if(checkboxes[i].type=='checkbox')
            checkboxes[i].checked=true;
        }
    }
    else{
        var checkboxes = document.getElementsByName('select');
        for(var i=0;i<checkboxes.length;i++){
            if(checkboxes[i].type=='checkbox')
            checkboxes[i].checked=false;
        }
    }
    }

    

    function cannotedittwo(){
        var check=document.getElementsByName('select');
        var count=0;
        for(var i=0;i<check.length;i++){
         if (check[i].checked==true){
             count++;
         }
        }

        if(count>1){
            alert("You Cannot edit more than one product at the time");
            return false;
        }

    }



    




    function validateImage() {
        var formData = new FormData();
     
        var file = document.getElementById("image").files[0];
     
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
            alert('Please select a valid image file');
            document.getElementById("image").value = '';
            return false;
        }
        
        return true;
    }










   


    
    