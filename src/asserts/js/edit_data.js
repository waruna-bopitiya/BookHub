
function validate() {
    const bookname = document.getElementById("bookname").value.trim();
    const authorname = document.getElementById("authorname").value.trim();
    const price = document.getElementById("price").value.trim();
    const description = document.getElementById("description").value.trim();
    const image = document.getElementById("imageupload1").value.trim();
    
    
    if (!bookname) {
        alert("Book Name cannot be empty");
        return false;
    }
    
    if (!authorname) {
        alert("Author Name cannot be empty");
        return false;
    }
    
    if (!price) {
        alert("Price cannot be empty");
        return false;
    }
    
    if (!description) {
        alert("Description cannot be empty");
        return false;   
    }
    
    
    return true;
}




