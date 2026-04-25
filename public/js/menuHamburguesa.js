const items = document.querySelectorAll(".footer-menu-mobile a");

items.forEach(item => {
    item.addEventListener("click", () => {
        items.forEach(el => el.classList.remove("active"));
        item.classList.add("active");
    });
});

