const burgerTop = getBreadTop();
const lessSaladBtn = document.getElementById("lessSalad");
const lessBaconBtn = document.getElementById("lessBacon");
const lessCheeseBtn = document.getElementById("lessCheese");
const lessMeatBtn = document.getElementById("lessMeat");
const btnOrder = document.getElementById("btnOrder");
const lblCost = document.getElementById("lblCost");
const modalLblCost = document.getElementById("modalLblCost");
const saladCount = document.getElementById("salad-count");
const baconCount = document.getElementById("bacon-count");
const cheeseCount = document.getElementById("cheese-count");
const meatCount = document.getElementById("meat-count");


const saladPrice = parseFloat(document.getElementById("saladPrice").value);
const cheesePrice = parseFloat(document.getElementById("cheesePrice").value);
const baconPrice = parseFloat(document.getElementById("baconPrice").value);
const meatPrice = parseFloat(document.getElementById("meatPrice").value);


const defaultPrice = 4;
let burgerCost = 4;
let noSalad = 0;
let noCheese = 0;
let noMeat = 0;
let noBacon = 0;

function updatePrice(cost) {
    lblCost.innerText = parseFloat(cost).toFixed(2);
    modalLblCost.innerText = parseFloat(cost).toFixed(2);
}

function updateCount(count, ingredient) {
    switch(ingredient) {
        case 'salad':
          saladCount.innerText = count;
          break;
        case 'bacon':
            baconCount.innerText = count;
          break;
        case 'cheese':
            cheeseCount.innerText = count;
            break;
        case 'meat':
            meatCount.innerText = count;
            break;
      }
}

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
    burgerCost -= saladPrice;
    noSalad = noSalad-1;
    updateCount(noSalad, 'salad');
    updatePrice(burgerCost);
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
    burgerCost -= cheesePrice;
    noCheese = noCheese-1;
    updateCount(noCheese, 'cheese');
    updatePrice(burgerCost);
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
    burgerCost -= baconPrice;
    noBacon = noBacon-1;
    updateCount(noBacon, 'bacon');
    updatePrice(burgerCost);
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
    burgerCost -= meatPrice;
    noMeat = noMeat-1;
    updateCount(noMeat, 'meat');
    updatePrice(burgerCost);
}

function addSalad() {
    removeWelcomeMessage();
    const salad = getSalad();
    burgerTop.after(salad);
    lessSaladBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
    burgerCost += saladPrice;
    noSalad = noSalad+1;
    updateCount(noSalad, 'salad');
    updatePrice(burgerCost);
}

function addBacon() {
    removeWelcomeMessage();
    const bacon = getBacon();
    burgerTop.after(bacon);
    lessBaconBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
    burgerCost += baconPrice;
    noBacon = noBacon+1;
    updateCount(noBacon, 'bacon');
    updatePrice(burgerCost);
}

function addCheese() {
    removeWelcomeMessage();
    const cheese = getCheese();
    burgerTop.after(cheese);
    lessCheeseBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
    burgerCost += cheesePrice;
    noCheese = noCheese+1;
    updateCount(noCheese, 'cheese');
    updatePrice(burgerCost);
}

function addMeat() {
    removeWelcomeMessage();
    const meat = getMeat();
    burgerTop.after(meat);
    lessMeatBtn.removeAttribute("disabled");
    btnOrder.removeAttribute("disabled");
    burgerCost += meatPrice;
    noMeat = noMeat+1;
    updateCount(noMeat, 'meat');
    updatePrice(burgerCost);
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

function buildPreview(){
    var ingredients = {'salad':noSalad, 'cheese':noCheese, 'meat':noMeat, 'bacon':noBacon};
    var totalCost = document.getElementById("modalLblCost").innerHTML;
    $.ajax({
    url: "/orders/build-preview",
    method: "POST",
    data: {'ingredients':ingredients, 'totalCost':totalCost},
    success: function(result){
        $(location).attr('href','/orders/checkout');
    }});
}