function validate() {
    const bookname = document.getElementById("bookname").value;
    const authorname = document.getElementById("authorname").value;
    const price = document.getElementById("price").value;
    const publishdate = document.getElementById("publishdate").value;
    const image = document.getElementById("image").value;
    

    if (bookname == " " || bookname == null
        || authorname == " " || authorname == null
        || price == " " || price == null
        || publishdate == " " || publishdate == null
        || image == " " || image == null
    ) {
        alert("Book Name cannot be empty");
        return false;
    }
    



}