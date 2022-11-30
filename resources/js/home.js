// toggle menu
const toggleItem1 = document.querySelector(".toggle-item:nth-child(1)");
const toggleItem2 = document.querySelector(".toggle-item:nth-child(2)");
const toggleItem3 = document.querySelector(".toggle-item:nth-child(3)");

const menu = document.querySelector(".navbar_menu");
const navbarToggle = document.querySelector(".navbar-toggle");

navbarToggle.onclick = () => {
    toggleItem1.classList.toggle("active");
    toggleItem3.classList.toggle("active");
    toggleItem2.classList.toggle("active");
    menu.classList.toggle("active");
};

const menuDichVu = document.querySelector(".menu-item:first-child a");
const menuChild = document.querySelector(".menu-item ul");
const menuPG = document.querySelector(".menu-item ul li");
const menuChild2 = document.querySelector(".menu-item ul li ul");

menuDichVu.onclick = () => {
    menuChild.classList.toggle("active");
    console.log(this);
};

menuPG.onclick = () => {
    menuChild2.classList.toggle("active");
    console.log(this);
};

const avatarMenu = document.querySelector(".menu-avatar");
const menuLogout = document.querySelector(".menu-logout");
avatarMenu.onclick = () => {
    menuLogout.classList.toggle("active");
};

//send email
const formContact = document.querySelector(".contact-form");

formContact.addEventListener("submit", (e) => {
    e.preventDefault();
    let name = document.getElementById("name").value,
        email = document.getElementById("email").value,
        phone = document.getElementById("phone").value,
        message = document.getElementById("message").value,
        body =
            "name " +
            name +
            "</br> email " +
            email +
            "</br> phone " +
            phone +
            "</br> message " +
            message;
    Email.send({
        // SecureToken: "1eab69ff-522c-4f93-ab21-72c312f67c40",
        // lxwfjpvbvffofoecs
        Host: "smtp.elasticemail.com",
        Username: "trunghips001@gmail.com",
        Password: "EC759474D6F914A1129911E710564421DC36",
        To: "trunghips001@gmail.com",
        From: email,
        Subject: "Contact Form",
        Body: body,
    })
        .then((success) => {
            alert("Message sent successfully");
        })
        .catch((error) => {
            alert("Error sending message");
        });
});
