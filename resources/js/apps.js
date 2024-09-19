//kategori start
const categoryScroll = document.getElementById("categoryScroll");
const scrollRight = document.getElementById("scrollRight");

// Fungsi untuk scroll ke kanan
scrollRight.addEventListener("click", () => {
    categoryScroll.scrollBy({ left: 200, behavior: "smooth" });
});
//kategori end


