console.log("javascript file is loaded");
function next(){  
    const imageArray = [
        "src/asserts/images/banners/b1.jpg",
        "src/asserts/images/banners/b2.jpg",
        "src/asserts/images/banners/b3.jpg",
        "src/asserts/images/banners/b4.jpg"
    ];
    
    const img1 = document.getElementById("img1");
    const currentImage = img1.src;
    
    if (currentImage.endsWith("b1.jpg")) {
        img1.src = imageArray[1]; 
    } 
    else if (currentImage.endsWith("b2.jpg")) {
        img1.src = imageArray[2]; 
    } 
    else if (currentImage.endsWith("b3.jpg")) {
        img1.src = imageArray[3]; 
    } 
    else {
        img1.src = imageArray[0];
    }
}

    
   
 
function previous(){  
    const imageArray = [
        "src/asserts/images/banners/b1.jpg",
        "src/asserts/images/banners/b2.jpg",
        "src/asserts/images/banners/b3.jpg",
        "src/asserts/images/banners/b4.jpg"
    ];
    //fvdfvdfvsfvsfv

    const img1 = document.getElementById("img1");
    const currentImage = img1.src;
    console.log("Current Image:", currentImage);
    
    if (currentImage.endsWith("b1.jpg")) {
        img1.src = imageArray[3];   
    } 
    else if (currentImage.endsWith("b2.jpg")) {
        img1.src = imageArray[0]; 
    } 
    else if (currentImage.endsWith("b3.jpg")) {
        img1.src = imageArray[1]; 
    } 
    else {

        img1.src = imageArray[2 ];
    }
}

function preview_image(event){
    var reader = new FileReader();
    var imageField = document.getElementById("updateimg");
    var a = document.getElementById("hide");

            reader.onload = function(){
                
                imageField.src = reader.result;
                imageField.style.display = "block";
            }

            reader.readAsDataURL(event.target.files[0]);
           
        }


function validatesearch(){
    const searchname = document.getElementById("searchname").value.trim();

    if (!searchname || searchname == "" || searchname == null || searchname == undefined || searchname == " " ) {
        alert("Search cannot be empty");
        return false;
    }
    return true;
}