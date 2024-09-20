console.log("javascript file is loaded");
function next(){  
    const imageArray = [
        "../images/banners/1.jpg",
        "../images/banners/2.jpg",
        "../images/banners/3.jpg",
        "../images/banners/4.jpg"
        
    ];
    
    const img1 = document.getElementById("img1");
    const currentImage = img1.src;
    
    if (currentImage.endsWith("1.jpg")) {
        img1.src = imageArray[1]; 
    } 
    else if (currentImage.endsWith("2.jpg")) {
        img1.src = imageArray[2]; 
    } 
    else if (currentImage.endsWith("3.jpg")) {
        img1.src = imageArray[3]; 
    } 
    else {
        img1.src = imageArray[0];
    }
}

    
   
 
function previous(){  
    const imageArray = [
        "../images/banners/1.jpg",
        "../images/banners/2.jpg",
        "../images/banners/3.jpg",
        "../images/banners/4.jpg"
    ];

    const img1 = document.getElementById("img1");
    const currentImage = img1.src;
    console.log("Current Image:", currentImage);
    
    if (currentImage.endsWith("1.jpg")) {
        img1.src = imageArray[3];   
    } 
    else if (currentImage.endsWith("2.jpg")) {
        img1.src = imageArray[0]; 
    } 
    else if (currentImage.endsWith("3.jpg")) {
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
            a.p.style.display = "none";
           
        }