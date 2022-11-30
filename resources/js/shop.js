const closeCart = document.querySelector(".close");
const cart = document.querySelector(".cart");

closeCart.addEventListener("click", () => {
    cart.style.display = "none";
});

// show hoa don
// const btnOrders = document.querySelectorAll("#btn-order");

// btnOrders.forEach((btn, index) => {
//     btn.onclick = (e) => {
//         e.preventDefault();
//         cart.style.display = "block";
//         const card = e.target.closest(".product-card");
//         const srcImg = card.querySelector("img").src;
//         const cartImg = document.querySelector(".cart-img");
//         const nameProduct = card.querySelector(".product-name").innerHTML;
//         cart.querySelector(".skin-name").innerHTML = nameProduct;
//         cartImg.src = srcImg;
//     };
// });

const amount = document.querySelector(".skin-amount");
amount.addEventListener("change", function () {
    Sum();
});

// Tính tổng hóa đơn
function Sum() {
    const total = document.querySelector("#total");
    const price = document.querySelector(".price").innerHTML;
    const amount = document.querySelector(".skin-amount").value;
    const thanhtien = parseInt(price) * parseInt(amount);
    total.innerHTML = thanhtien;
}

// show success
const btnOrderReceipt = document.querySelector(".btn-order-receipt");
const formSuccess = document.querySelector(".form_success");
const btnCloseSuccess = document.querySelector(".fa-times");
btnOrderReceipt.onclick = (e) => {
    formSuccess.classList.add("active");
};

btnCloseSuccess.onclick = () => {
    formSuccess.classList.remove("active");
    cart.style.display = "none";
};
