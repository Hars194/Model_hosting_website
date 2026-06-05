// Mobile Menu Toggle
function toggleMenu() {
    const menu = document.getElementById("navMenu");
    menu.classList.toggle("show");
}

// Image Preview Before Upload
function previewImage(input, previewId) {

    const preview = document.getElementById(previewId);

    if (input.files && input.files[0]) {

        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        }

        reader.readAsDataURL(input.files[0]);
    }
}

// Gallery Image Popup
function openImage(src) {

    let popup = document.createElement("div");

    popup.style.position = "fixed";
    popup.style.top = "0";
    popup.style.left = "0";
    popup.style.width = "100%";
    popup.style.height = "100%";
    popup.style.background = "rgba(0,0,0,0.8)";
    popup.style.display = "flex";
    popup.style.alignItems = "center";
    popup.style.justifyContent = "center";
    popup.style.zIndex = "9999";

    let img = document.createElement("img");

    img.src = src;
    img.style.maxWidth = "90%";
    img.style.maxHeight = "90%";
    img.style.borderRadius = "10px";

    popup.appendChild(img);

    popup.onclick = function() {
        document.body.removeChild(popup);
    }

    document.body.appendChild(popup);
}

// Delete Confirmation
function confirmDelete() {

    return confirm("Are you sure you want to delete this item?");

}

// Smooth Scroll
document.querySelectorAll("a[href^='#']").forEach(anchor => {

    anchor.addEventListener("click", function(e) {

        e.preventDefault();

        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });

    });

});

// Auto Hide Alert Messages
setTimeout(() => {

    const alerts = document.querySelectorAll(".alert");

    alerts.forEach(alert => {
        alert.style.display = "none";
    });

}, 3000);


// Navbar Shadow on Scroll
window.addEventListener("scroll", function(){

    const navbar = document.querySelector(".navbar");

    if(window.scrollY > 50){
        navbar.style.boxShadow = "0 4px 20px rgba(0,0,0,0.2)";
    } else {
        navbar.style.boxShadow = "none";
    }

});

// Drag and Drop Upload

const uploadBox = document.getElementById("uploadBox");
const fileInput = document.getElementById("fileInput");
const preview = document.getElementById("preview");

if(uploadBox){

uploadBox.addEventListener("click", () => {
fileInput.click();
});

fileInput.addEventListener("change", function(){

const file = this.files[0];

if(file){

const reader = new FileReader();

reader.onload = function(e){
preview.src = e.target.result;
preview.style.display = "block";
}

reader.readAsDataURL(file);

}

});

uploadBox.addEventListener("dragover", (e) => {
e.preventDefault();
uploadBox.style.borderColor = "#ff6a00";
});

uploadBox.addEventListener("dragleave", () => {
uploadBox.style.borderColor = "#ccc";
});

uploadBox.addEventListener("drop", (e) => {

e.preventDefault();

fileInput.files = e.dataTransfer.files;

const file = e.dataTransfer.files[0];

const reader = new FileReader();

reader.onload = function(e){
preview.src = e.target.result;
preview.style.display = "block";
}

reader.readAsDataURL(file);

});

}


// Homepage Slider

let slides = document.querySelectorAll(".slide");

let index = 0;

if(slides.length > 0){

slides[0].style.display = "block";

setInterval(()=>{

slides.forEach(slide=>slide.style.display="none");

slides[index].style.display="block";

index++;

if(index>=slides.length){
index=0;
}

},3000);

}