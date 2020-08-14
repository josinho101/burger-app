const burgerTop = getBreadTop();
const lessSaladBtn = document.getElementById("lessSalad");
const lessBaconBtn = document.getElementById("lessBacon");
const lessCheeseBtn = document.getElementById("lessCheese");
const lessMeatBtn = document.getElementById("lessMeat");
const btnOrder = document.getElementById("btnOrder");

function hasAnyIngredients() {
    const salads = document.getElementsByClassName("Salad");
    const cheese = document.getElementsByClassName("Cheese");
    const bacons = document.getElementsByClassName("Bacon");
    const meats = document.getElementsByClassName("Meat");

    return salads.length || cheese.length || bacons.length || meats.length;
}

function checkAndAddMessage() {
    if (!hasAnyIngredients()) {
        AddWelcomeMessage();
        btnOrder.setAttribute("disabled", true);
    } else {
        btnOrder.removeAttribute("disabled");
    }
}

function lessSalad() {
    const salads = document.getElementsByClassName("Salad");
    if (salads.length <= 1) {
        lessSaladBtn.setAttribute("disabled", true);
    }
    if (salads[0]) {
        salads[0].remove();
    }
    checkAndAddMessage();
}

function lessCheese() {
    const cheese = document.getElementsByClassName("Cheese");
    if (cheese.length <= 1) {
        lessCheeseBtn.setAttribute("disabled", true);
    }
    if (cheese[0]) {
        cheese[0].remove();
    }
    checkAndAddMessage();
}

function lessBacon() {
    const bacons = document.getElementsByClassName("Bacon");
    if (bacons.length <= 1) {
        lessBaconBtn.setAttribute("disabled", true);
    }
    if (bacons[0]) {
        bacons[0].remove();
    }
    checkAndAddMessage();
}

function lessMeat() {
    const meats = document.getElementsByClassName("Meat");
    if (meats.length <= 1) {
        lessMeatBtn.setAttribute("disabled", true);
    }
    if (meats[0]) {
        meats[0].remove();
    }
    checkAndAddMessage();
}

function addSalad() {
    removeWelcomeMessage();
    const salad = getSalad();
    burgerTop.after(salad);
    lessSaladBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
}

function addBacon() {
    removeWelcomeMessage();
    const bacon = getBacon();
    burgerTop.after(bacon);
    lessBaconBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
}

function addCheese() {
    removeWelcomeMessage();
    const cheese = getCheese();
    burgerTop.after(cheese);
    lessCheeseBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
}

function addMeat() {
    removeWelcomeMessage();
    const meat = getMeat();
    burgerTop.after(meat);
    lessMeatBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
}

function getBreadTop() {
    return document.getElementsByClassName("BreadTop")[0];
}

function removeWelcomeMessage() {
    const message = document.getElementById("welcomeMsg");
    if (message) {
        message.remove();
    }
}

function getSalad() {
    let div = document.createElement("div");
    div.classList.add("Salad");
    return div;
}

function getBacon() {
    let div = document.createElement("div");
    div.classList.add("Bacon");
    return div;
}

function getCheese() {
    let div = document.createElement("div");
    div.classList.add("Cheese");
    return div;
}

function getMeat() {
    let div = document.createElement("div");
    div.classList.add("Meat");
    return div;
}

function AddWelcomeMessage() {
    const burgerTop = getBreadTop();
    let p = document.createElement("p");
    p.id = "welcomeMsg";
    p.innerText = "Please start adding ingredients !!!.";
    p.classList.add("Message");
    burgerTop.after(p);
}