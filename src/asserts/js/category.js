const books=[
    { id: 1, title:"I wish You More",category:"children",price:"LKR 800.00",img:"src/asserts/images/book1.jpg"},
    { id: 2, title: "In Your Own Backyard", category: "children", price: "LKR 1080.00", img: "src/asserts/images/book2.jpg" },
    { id: 3, title: "How Many Legs", category: "children", price: "LKR 595.00", img: "src/asserts/images/book3.jpg" },
    { id: 4, title: "Princess the Cat", category: "children", price: "LKR 1000.00", img: "src/asserts/images/book4.jpg" },
    { id: 5, title: "The Grizllie", category: "children", price: "LKR 800.00", img: "src/asserts/images/book5.jpg" },
    { id: 6, title: "The Calculating Stars", category: "fiction", price: "LKR 1800.00", img: "src/asserts/images/book6.jpg" },
    { id: 7, title: "Snow Crash", category: "fiction", price: "LKR 1080.00", img: "src/asserts/images/book7.jpg" },
    { id: 8, title: "Fire Dance", category: "fiction", price: "LKR 595.00", img: "src/asserts/images/book8.jpg" },
    { id: 9, title: "Children of Ruin", category: "fiction", price: "LKR 1000.00", img: "src/asserts/images/book9.jpg" },
    { id: 10, title: "Fire Dance", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book10.jpg" },
    { id: 11, title: "The Nature of Science", category: "science", price: "LKR 800.00", img: "src/asserts/images/book11.jpg" },
    { id: 12, title: "The Story of Science and technology", category: "science", price: "LKR 800.00", img: "src/asserts/images/book12.jpg" },
    { id: 13, title: "Marine Science", category: "science", price: "LKR 800.00", img: "src/asserts/images/book13.jpg" },
    { id: 14, title: "Science Fiction", category: "science", price: "LKR 800.00", img: "src/asserts/images/book14.jpg" },
    { id: 15, title: "Earth Science Astronomy and Space", category: "science", price: "LKR 800.00", img: "src/asserts/images/book15.jpg" },
    { id: 16, title: "Active Integrated Science", category: "science", price: "LKR 800.00", img: "src/asserts/images/book16.jpg" },
    { id: 17, title: "Science and You", category: "science", price: "LKR 800.00", img: "src/asserts/images/book17.jpg" },
    { id: 18, title: "The Calculating Stars", category: "science", price: "LKR 800.00", img: "src/asserts/images/book18.jpg" },
    { id: 19, title: "After The Rain", category: "science", price: "LKR 800.00", img: "src/asserts/images/book19.jpg" },
    { id: 20, title: "The stars are Legion", category: "science", price: "LKR 800.00", img: "src/asserts/images/book20.jpg" },
    { id: 21, title: "Hidden Federation", category: "science", price: "LKR 800.00", img: "src/asserts/images/book21.jpg" },
    { id: 22, title: "A New age of Reason", category: "Science", price: "LKR 800.00", img: "src/asserts/images/book22.jpg" },
    { id: 23, title: "Enceladus", category: "science", price: "LKR 800.00", img: "src/asserts/images/book23.jpg" },
    { id: 24, title: "The Cloud Mystery", category: "science", price: "LKR 800.00", img: "src/asserts/images/book24.jpg" },
    { id: 25, title: "Relic", category: "science", price: "LKR 800.00", img: "src/asserts/images/book25.jpg" },
    { id: 26, title: "The Earth Family Smith", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book26.jpg" },
    { id: 27, title: "Carrie Annes World", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book27.jpg" },
    { id: 28, title: "Incursion", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book28.jpg" },
    { id: 29, title: "Forbidden Planet", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book29.jpg" },
    { id: 30, title: "The Green Queen", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book30.jpg" },
    { id: 31, title: "Red Star", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book31.jpg" },
    { id: 32, title: "Dune", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book32.jpg" },
    { id: 33, title: "Elemental Mode", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book33.jpg" },
    { id: 34, title: "Extinction Event", category: "fiction", price: "LKR 800.00", img: "src/asserts/images/book34.jpg"},
    { id: 35, title: "Sam and Pam", category: "children", price: "LKR 800.00", img: "src/asserts/images/book35.jpg" },
    { id: 36, title: "Corduroy", category: "children", price: "LKR 800.00", img: "src/asserts/images/book36.jpg" },
    { id: 37, title: "Princess Soup", category: "children", price: "LKR 800.00", img: "src/asserts/images/book377.jpg" },
    { id: 38, title: "Can a Cookie change a world", category: "children", price: "LKR 800.00", img: "src/asserts/images/book38.jpg" },
    { id: 39, title: "The Familars", category: "children", price: "LKR 800.00", img: "src/asserts/images/book39.jpg" },
    { id: 40, title: "Saving Fable", category: "children", price: "LKR 800.00", img: "src/asserts/images/book40.jpg" },
    { id: 41, title: "Princess Evie", category: "children", price: "LKR 800.00", img: "src/asserts/images/book41.jpg" },
    { id: 42, title: "I Believe I Can", category: "children", price: "LKR 800.00", img: "src/asserts/images/book42.jpg" },
    { id: 43, title: "Chocolate Me", category: "children", price: "LKR 800.00", img: "src/asserts/images/book43.jpg" },
    { id: 44, title: "Girl Of Mine", category: "children", price: "LKR 800.00", img:"src/asserts/images/book44.jpg" },
    { id: 45, title: "Hathpana", category: "education", price: "LKR 800.00", img: "src/asserts/images/book45.jpg" },
    { id: 46, title: "Teaching Strategy", category: "education", price: "LKR 800.00", img: "src/asserts/images/book46.jpg" },
    { id: 47, title: "Learning Teach English", category: "education", price: "LKR 800.00", img: "src/asserts/images/book47.jpg" },
    { id: 48, title: "We Learn English", category: "education", price: "LKR 800.00", img: "src/asserts/images/book48.jpg" },
    { id: 49, title: "Innovate Teaching", category: "education", price: "LKR 800.00", img: "src/asserts/images/book49.jpg" },
    { id: 50, title: "Ambitious And Anxious", category: "education", price: "LKR 800.00", img: "src/asserts/images/book50.jpg" },
    { id: 51, title: "The Assistant Principal", category: "education", price: "LKR 800.00", img: "src/asserts/images/book51.jpg" },
    { id: 52, title: "Money Master The Game", category: "education", price: "LKR 800.00", img: "src/asserts/images/book52.jpg" },
    { id: 53, title: "Deep Finance", category: "education", price: "LKR 800.00", img: "src/asserts/images/book53.jpg" },
    { id: 54, title: "ICT Starters", category: "education", price: "LKR 800.00", img: "src/asserts/images/book54.jpg" },
    { id: 55, title: "ICT Infrastructure", category: "education", price: "LKR 800.00", img: "src/asserts/images/book55.jpg" },
    { id: 56, title: "C++ programming Language", category: "education", price: "LKR 800.00", img: "src/asserts/images/book56.jpg" },
    { id: 57, title: "C Programming", category: "education", price: "LKR 800.00", img:"src/asserts/images/book57.jpg" },
    { id: 58, title: "Kiran Desai", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book58.jpg" },
    { id: 59, title: "New Grub Street", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book59.jpg" },
    { id: 60, title: "Harry Potter", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book60.jpg" },
    { id: 61, title: "Lisa Wingate", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book61.jpg" },
    { id: 62, title: "Dangerous Woman", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book62.jpg" },
    { id: 63, title: "Mistress of the Ritz", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book63.jpg" },
    { id: 64, title: "An Orphan's War", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book64.jpg" },
    { id: 65, title: "The Sound of the Hours", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book65.jpg" },
    { id: 66, title: "The Ventriloquists", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book66.jpg" },
    { id: 67, title: "The Crown", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book67.jpg" },
    { id: 68, title: "Briderton ", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book68.jpg" },
    { id: 69, title: "Book Title", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book69.jpg" },
    { id: 70, title: "Me Before You", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book70.jpg" },
    { id: 71, title: "Act Like This", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book71.jpg" },
    { id: 72, title: "Suddenly Last Summer", category: "novels", price: "LKR 800.00", img: "src/asserts/images/book72.jpg" },
];

function loadBooks(category){
    const bookGrid=document.getElementById('book_grid');
    const categoryHeading= document.getElementById('category-heading');
    bookGrid.innerHTML='';
    if (category === 'all') {
        categoryHeading.innerText = 'All Books';
    } else {
        categoryHeading.innerText = `Best ${capitalizeFirstLetter(category)} Books`;
    }
    const filteredBooks = category === 'all' ? books : books.filter(book => book.category === category);

    
     
    
    
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
document.addEventListener('DOMContentLoaded', function () {
    loadBooks('all');  // Load default category, or all books initially
});
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
