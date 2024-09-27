const books=[
    { id: 1, title:"I wish You More",category:"children",price:"LKR 800.00",img:"src/asserts/images/book1.jpg"},
    { id: 2, title: "In Your Own Backyard", category: "Children", price: "LKR 1080.00", img: "src/asserts/images/book2.jpg" },
    { id: 3, title: "How Many Legs", category: "Children", price: "LKR 595.00", img: "src/asserts/images/book3.jpg" },
    { id: 4, title: "Princess the Cat", category: "Children", price: "LKR 1000.00", img: "src/asserts/images/book4.jpg" },
    { id: 5, title: "The Grizllie", category: "Children", price: "LKR 800.00", img: "src/asserts/images/book5.jpg" },
    { id: 6, title: "The Calculating Stars", category: "Fiction", price: "LKR 1800.00", img: "src/asserts/images/book6.jpg" },
    { id: 7, title: "Snow Crash", category: "Fiction", price: "LKR 1080.00", img: "src/asserts/images/book7.jpg" },
    { id: 8, title: "Fire Dance", category: "Fiction", price: "LKR 595.00", img: "src/asserts/images/book8.jpg" },
    { id: 9, title: "Children of Ruin", category: "Fiction", price: "LKR 1000.00", img: "src/asserts/images/book9.jpg" },
    { id: 10, title: "Fire Dance", category: "Fiction", price: "LKR 800.00", img: "src/asserts/images/book10.jpg" }
];

function loadBooks(category){
    const bookGrid=document.querySelector('.category_grid');
    bookGrid.innerHTML='';

    const filteredBooks=books.filter(book=>book.category===category);
     
    if(filteredBooks.length===0)
    {
        bookGrid.innerHTML='<p>No books available in this category.</p>';
        return;
    }
    
    filteredBooks.forEach(book => {
        const bookItem = `
            <div class="book_item">
                <img src="${book.img}" alt="${book.title}">
                <p class="title">${book.title}</p>
                <p class="price">
                    <span class="dis_price">${book.price}</span>
                </p>
            </div>`;
        bookGrid.innerHTML += bookItem;
    });



}
// Add event listeners for category links
document.querySelectorAll('.category-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const category = this.id;
        loadBooks(category.charAt(0).toUpperCase() + category.slice(1));  // Call loadBooks with the selected category
    });
});