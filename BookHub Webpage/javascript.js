function next(){  
    const imageArray = [
        "images/banners/1.jpg",
        "images/banners/2.jpg",
        "images/banners/3.jpg",
        "images/banners/4.jpg"
    ];
    
    const img1 = document.getElementById("img1");
    const currentImage = img1.src;
    
    if (currentImage.includes("images/banners/1.jpg")) {
        img1.src = imageArray[1]; 
    } 
    else if (currentImage.includes("images/banners/2.jpg")) {
        img1.src = imageArray[2]; 
    } 
    else if (currentImage.includes("images/banners/3.jpg")) {
        img1.src = imageArray[3]; 
    } 
    else {
        img1.src = imageArray[0];
    }
}
    
   
 
function previous(){  
    const imageArray = [
        "images/banners/1.jpg",
        "images/banners/2.jpg",
        "images/banners/3.jpg",
        "images/banners/4.jpg"
    ];

    const img1 = document.getElementById("img1");
    const currentImage = img1.src;
    
    if (currentImage.includes("images/banners/1.jpg")) {
        img1.src = imageArray[3]; 
    } 
    else if (currentImage.includes("images/banners/2.jpg")) {
        img1.src = imageArray[0]; 
    } 
    else if (currentImage.includes("images/banners/3.jpg")) {
        img1.src = imageArray[1]; 
    } 
    else {
        img1.src = imageArray[2];
    }
}