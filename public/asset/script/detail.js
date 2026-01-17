document.addEventListener("DOMContentLoaded", () => {
    console.log("JS LOADED");

    var bookPopup = document.getElementById("bookPopup");
    var books = document.querySelectorAll(".book");
    var roomid = document.getElementById("room_id");

    console.log("Buttons:", books.length);

    books.forEach(book => {
        book.addEventListener("click", () => {
            console.log("CLICKED", book.value);
            roomid.value = book.value;
            bookPopup.classList.replace("unactive", "active");
        });
    });
});
