function next(){  
    const imageArray = [
        "images/banners/1.jpg",
        "images/banners/2.jpg",
        "images/banners/3.jpg"
    ];
    
    const img1 = document.getElementById("img1");

    // Get the current image file name from the full URL
    const currentImage = img1.src.split("/").pop();

    // Check which image is currently displayed and update to the next one
    if (currentImage === "1.jpg") {
        img1.src = imageArray[1]; // Switch to the second image
    } else if (currentImage === "2.jpg") {
        img1.src = imageArray[2]; // Switch to the third image
    } else {
        img1.src = imageArray[0]; // Loop back to the first image
    }
}
