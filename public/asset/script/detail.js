var bookPopup = document.getElementById("bookPopup");
var books = document.querySelectorAll("#book");
var checkin = document.getElementById("checkin");

books.forEach(book => {
    book.addEventListener("click", () => {
        bookPopup.classList.replace("unactive", "active");
    });
});