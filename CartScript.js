


let pathP3, pageP3, serialIDP3;
let xhttp = new XMLHttpRequest();

let indexP3, xrep, itemNameP3, itemDescriptionP3, itemRatingP3, itemPriceP3, itemUnitP3, itemIngredientsP3, itemPicPathP3;
function getPathP3(){
    pathP3 = window.location.pathname;
    console.log("test this s path p3 "+pathP3);
    pageP3 = pathP3.split("/").pop();
    serialIDP3 = pageP3.substring(pageP3.length-12,pageP3.length-4)
    console.log(serialIDP3);
}
function loadProductPage() {
    getPathP3();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            xrep = xhttp.responseXML;
            getProdXMLData();
            fillProductPage();
        };
    }
    xhttp.open("GET", "productlist.xml", true);
    xhttp.send();
}
function getProdXMLData() {
    for(let i=0; i<xrep.getElementsByTagName("itemSerial").length; i++){
        if(xrep.getElementsByTagName("itemSerial")[i].childNodes[0].nodeValue==serialIDP3){
            indexP3 = i;
        }
    }
    let temp = xrep.getElementsByTagName("item")[indexP3];
    itemNameP3 = temp.childNodes[3].firstChild .nodeValue;
    console.log(itemNameP3);
    itemDescriptionP3  = temp.childNodes[5].childNodes[0].nodeValue;
    itemRatingP3 = temp.childNodes[7].childNodes[0].nodeValue;
    itemPriceP3 = temp.childNodes[9].childNodes[0].nodeValue;
    itemUnitP3 = temp.childNodes[11].childNodes[0].nodeValue;
    console.log(itemUnitP3);
    itemIngredientsP3 = temp.childNodes[15].childNodes[0].nodeValue;
    console.log(itemIngredientsP3);
    itemPicPathP3 = temp.childNodes[19].childNodes[0].nodeValue;
}
function fillProductPage(){
    document.getElementById("itemName").innerText=itemNameP3;
    document.getElementById("itemDescription").textContent=itemDescriptionP3;
    document.getElementById("itemUnit").innerHTML= itemUnitP3;
    document.getElementById("itemPrice").innerText= itemPriceP3;
    document.getElementById("itemPic").src=itemPicPathP3;
    console.log(document.getElementById("itemPic").src);
    console.log(itemPicPathP3);
}
function addThisMuch(){
    let quantity = Number(document.getElementById("qty").value);
    if(isNaN(quantity)){
        alert("Please enter a valid number.");
        document.getElementById("qty").focus();    //focus on the textbox
        document.getElementById("qty").select();   //highlight the text
        return false;
    }
    let name = document.getElementById("itemName").textContent;
    let unit = document.getElementById("itemUnit").textContent;
    let price = Number(document.getElementById("itemPrice").textContent);
    let picPath = document.getElementById("itemPic").src;
    console.log("this is the serial id : "+serialIDP3);
    addToCart(name, serialIDP3, unit, price, quantity, picPath);
    alert("Item has been added to your Trendy Markt Cart! :)");
}
//increments quantity IN THE CART PAGE, when the items already exist in the cart lust,
// and the "addtocart" button is pressed from the p3 page
// this function is used for the PRODUCT PAGE
/////////////////// CART PAGE
let cartList = [];
CartStorage = window.localStorage;
//PRODUCT PAGE CODE:
function cartPageLoad(){
    //emptyCartItem();
    getCartItemArray();
    calnbrItems();
    calpretotal();
    calGST();
    calQST();
    calTotal();
}
function getCartItemArray() {
    console.log("this is the cart page load list length"+CartStorage.getItem('cartList.length'));
    let length = CartStorage.getItem('cartList.length');
    for (let i = 0; i < length; i++){
        let strIndex = "cartList[" + i + "]";
        let name = CartStorage.getItem(strIndex + ".name");
        let serialID = CartStorage.getItem(strIndex + ".serialID");
        let unit = CartStorage.getItem(strIndex + ".unit");
        let itemprice = Number(CartStorage.getItem(strIndex + ".itemprice"));
        let quantity = Number(CartStorage.getItem(strIndex + ".quantity"));
        let picturepath = CartStorage.getItem(strIndex + ".picturepath");
        let temp = cartItem(name, serialID, unit, itemprice, quantity, picturepath);
        cartList.push(temp);
        console.log("this is name "+name );
        console.log("this is the new cart list length"+ cartList.length);
        createDivision(name);
        eventEars(name);
        calSingleTotal(name);
    }
}

//function: 1) creates a cart item 2) creates div elements for its display 3)creates event listener for its button
function addToCart(name, serialID, unit, itemprice, quantity, picturepath) {
    console.log("this is the serial id from add to cart: "+serialIDP3);
    function getCartItemArrayONLY() {
        cartList=[];
        console.log("this is the cart page load list length"+CartStorage.getItem('cartList.length'));
        let length = CartStorage.getItem('cartList.length');
        for (let i = 0; i < length; i++){
            let strIndex = "cartList[" + i + "]";
            let name = CartStorage.getItem(strIndex + ".name");
            let serialID = CartStorage.getItem(strIndex + ".serialID");
            let unit = CartStorage.getItem(strIndex + ".unit");
            let itemprice = Number(CartStorage.getItem(strIndex + ".itemprice"));
            let quantity = Number(CartStorage.getItem(strIndex + ".quantity"));
            let picturepath = CartStorage.getItem(strIndex + ".picturepath");
            let temp = cartItem(name,serialID, unit, itemprice, quantity, picturepath);
            cartList.push(temp);
            console.log("this is name "+name );
            console.log("this is the new cart list length"+ cartList.length);
        }
    }
    getCartItemArrayONLY();
    console.log("this is length stored in memory from add to cart : "+length);
    console.log("this is the length of the list "+cartList.length);
    if (cartList.some(cartList => cartList.name === name)) {
        let index = cartList.findIndex(cartList => cartList.name === name);
        cartList[index].quantity+=quantity;
        console.log("quantity is being incremented ");
    } else {
        let temp = cartItem(name, serialID, unit, itemprice, quantity, picturepath);
        cartList.push(temp);
        console.log("this is the new cart list length after push "+cartList.length);
    }
    storeCartItemArray();
}
function storeCartItemArray(){
    CartStorage.setItem('cartList.length', cartList.length);
    for(let i=0; i<cartList.length; i++){
        let strIndex= "cartList["+i+"]";
        CartStorage.setItem((strIndex+".name"),(cartList[i].name));
        CartStorage.setItem((strIndex+".serialID"),(cartList[i].serialID));
        CartStorage.setItem((strIndex+".unit"),(cartList[i].unit));
        CartStorage.setItem((strIndex+".itemprice"),(cartList[i].itemprice));
        CartStorage.setItem((strIndex+".quantity"),(cartList[i].quantity));
        CartStorage.setItem((strIndex+".picturepath"),(cartList[i].picturepath));
    }
}
//creates a cart ITEM with attributes
function cartItem  (name, serialID, unit, itemprice, quantity, picturepath){
    return {
        name: name,
        serialID: serialID,
        nameCut: () => name.split(" ").join(""),
        unit: unit, // " ea." or "/lb"
        itemprice: itemprice,
        quantity: quantity,
        total: function(){ return this.itemprice*this.quantity;},
        picturepath: picturepath,
    }
}
//function creates div elements for the named item for its display
function createDivision(name){
    let index = cartList.findIndex(cartList => cartList.name === name);
    let tempOuter1 = document.createElement("div");
    tempOuter1.className = "row list pt-2 pb-2 ";
    tempOuter1.id=cartList[index].nameCut();
    console.log("this is tempouter1 : "+tempOuter1.id);
    let tempImg = document.createElement("IMG");
    tempImg.className="product-image col-4";
    tempImg.src = cartList[index].picturepath;
    let ColOuter = document.createElement("div");
    ColOuter.classname = "col";
    ColOuter.style.width = "66%";
    document.getElementById("frameWork").append(tempOuter1);
    tempOuter1.append(tempImg);
    tempOuter1.append(ColOuter);
    //ROW 1
    let rowOuter1 = document.createElement('div');
    rowOuter1.classname = "row mb-2";
    rowOuter1.style.display = "flex";
    let ro1col1 = document.createElement('div');
    ro1col1.className = "col align-self-left ml-2 font-weight-bold";
    ro1col1.textContent = cartList[index].name ;
    ro1col1.id = "name"+index;
    let ro1col2 = document.createElement('div');
    ro1col2.className = "col align-self-right ml-2 font-weight-bold";
    ro1col2.style.justifyContent="flex-end";
    ro1col2.id = ("eachTag" + index);
    let ro1col2var = document.createElement('var');
    ro1col2var.id = ("each" + index);
    ro1col2var.textContent = cartList[index].itemprice;
    ro1col2var.style.display="none";
    ro1col2.textContent = "$ " + ro1col2var.textContent + " " + cartList[index].unit;
    //ROW 2
    let rowOuter2 = document.createElement('div');
    rowOuter2.classname = "row mt-1 mb-2 ";
    rowOuter2.style.borderTop="thin solid darkgrey";
    rowOuter2.style.minWidth = "100%";
    rowOuter2.style.display = "flex";
    rowOuter2.style.flexWrap = "wrap";
    //ROW 2 Col 1
    let ro2col1 = document.createElement('div');
    ro2col1.className = "col-sm-6   pt-2";
    let ro2col1ro = document.createElement('div');
    ro2col1ro.className = 'row';
    ro2col1ro.style.width = "120%";
    let ro2col1roCol1 = document.createElement("div");
    ro2col1roCol1.className = "col ml-4";
    let ro2col1roCol1a = document.createElement("a");
    ro2col1roCol1a.className = "btn btn-outline-info";
    ro2col1roCol1a.id = "Substracting"+index;
    let ro2col1roCol1ai = document.createElement("i");
    ro2col1roCol1ai.className = "fa fa-minus"
    let ro2col1roCol2 = document.createElement("div");
    ro2col1roCol2.className = "col input-group";
    let ro2col1roCol2input = document.createElement("input");
    ro2col1roCol2input.type="text";
    ro2col1roCol2input.className="form-control QTY";
    ro2col1roCol2input.id="Quantity"+index;
    ro2col1roCol2input.name="Quantity"+cartList[index].serialID;
    //ro2col1roCol2input.value=cartList[index].quantity;
    ro2col1roCol2input.placeholder=cartList[index].quantity;
    let ro2col1roCol2input2 = document.createElement("input");
    ro2col1roCol2input2.type="hidden";
    ro2col1roCol2input2.className="form-control QTY";
    ro2col1roCol2input.name=cartList[index].serialID;
    ro2col1roCol2input2.id=cartList[index].serialID;
    ro2col1roCol2input2.value=cartList[index].serialID;

//    ro2col1roCol2input.onchange="updateServer()";
    let ro2col1roCol3 = document.createElement("div");
    ro2col1roCol3.className = "col";
    let ro2col1roCol3a = document.createElement("a");
    ro2col1roCol3a.className = "btn btn-outline-info";
    ro2col1roCol3a.id = "Adding"+index;
    let ro2col1roCol3ai = document.createElement("i");
    ro2col1roCol3ai.className = "fa fa-plus";
//total for each item  + DELETE button
    let ro2col2 = document.createElement('div');
    ro2col2.className = "col-sm-6   pt-2";
    let ro2col2ro = document.createElement('div');
    ro2col2ro.className = 'row';
    let ro2col2roCol1 = document.createElement("div");
    ro2col2roCol1.className = "col-7 text-center pt-1";
    ro2col2roCol1.id = "totTag"+index;
    let ro2col2roCol1var = document.createElement('var');
    ro2col2roCol1var.id="tot"+index;
    let ro2col2roCol2 = document.createElement("div");
    ro2col2roCol2.className = "col ml-2";
    let ro2col2roCol2a = document.createElement('a');
    ro2col2roCol2a.className = "btn btn-outline-info";
    ro2col2roCol2a.id = "Deleting"+index;
    let ro2col2roCol2ai = document.createElement('i');
    ro2col2roCol2ai.className="fa fa-close";
    ColOuter.append(rowOuter1);
    ColOuter.append(rowOuter2);
    rowOuter1.append(ro1col1);
    rowOuter1.append(ro1col2);
    rowOuter2.append(ro2col1);
    rowOuter2.append(ro2col2);
    ro1col2.append(ro1col2var);
    ro2col1.append(ro2col1ro);
    ro2col2.append(ro2col2ro);
    ro2col1ro.appendChild(ro2col1roCol1);
    ro2col1ro.appendChild(ro2col1roCol2);
    ro2col1ro.appendChild(ro2col1roCol3);
    ro2col2ro.append(ro2col2roCol1);
    ro2col2ro.append(ro2col2roCol2);
    ro2col1roCol1.appendChild(ro2col1roCol1a);
    ro2col2roCol1.append(ro2col2roCol1var);
    ro2col2roCol2.append(ro2col2roCol2a);
    ro2col1roCol2.appendChild(ro2col1roCol2input);
    ro2col1roCol2.appendChild(ro2col1roCol2input2);
    ro2col1roCol3.appendChild(ro2col1roCol3a);
    ro2col1roCol1a.appendChild(ro2col1roCol1ai);
    ro2col2roCol2a.append(ro2col2roCol2ai);
    ro2col1roCol3a.appendChild(ro2col1roCol3ai);
}
//function creates event listeners for adding, removing or deleting every item in the cart
function eventEars(name){
    let index = cartList.findIndex(cartList => cartList.name === name);
    document.getElementById("Adding"+index).addEventListener('click',()=> addplus(name));
    document.getElementById("Substracting"+index).addEventListener('click',()=>  subminus(name));
    document.getElementById("Deleting"+index).addEventListener('click', ()=> deleteItem(name));}
//local storage of cartList array and functions to manipulate it
function emptyCartItem(){
    let length = CartStorage.getItem('cartList.length');
    for(let i=0; i<length; i++){
        let strIndex= "cartList["+i+"]";
        CartStorage.removeItem(strIndex+".name");
        CartStorage.removeItem(strIndex+".unit");
        CartStorage.removeItem(strIndex+".itemprice");
        CartStorage.removeItem(strIndex+".quantity");
        CartStorage.removeItem(strIndex+".picturepath");
    }
    cartList = [];
    CartStorage.setItem('cartList.length', '0');
}
function popCartItem(name){
    let index = cartList.findIndex(cartList => cartList.name === name);
    let element = document.getElementById(cartList[index].nameCut());
    for(i=index; i<cartList.length-1; i++){
        cartList[i]=cartList[i+1];
        CartStorage.setItem(("Quantity"+i),(CartStorage.getItem("Quantity"+(i+1))));
    }
    cartList.pop();
    storeCartItemArray()
    CartStorage.setItem('cartList.length', cartList.length);
    let strIndex= "cartList["+(cartList.length)+"]";
    CartStorage.removeItem((strIndex+".name"));
    CartStorage.removeItem((strIndex+".unit"));
    CartStorage.removeItem((strIndex+".itemprice"));
    CartStorage.removeItem((strIndex+".quantity"));
    CartStorage.removeItem((strIndex+".picturepath"));
    element.parentNode.removeChild(element);
}
function calpretotal(){
    let pretotal1=0;
    console.log("this is total from cartlist");

    for (i = 0; i < cartList.length; i++) {
        console.log("this is total from cartlist"+cartList[i].total());
        pretotal1 +=cartList[i].total();
    }
    if(pretotal1.toString().length>3){
        pretotal1 = Number(pretotal1.toFixed(3));
    }
    document.getElementById("pretotal").textContent = pretotal1;
}
function calnbrItems() {
    nbrItems=0;
    for (i = 0; i < cartList.length; i++) {
        nbrItems += cartList[i].quantity;
    }
    document.getElementById("nbrItems").textContent = nbrItems;
    CartStorage.setItem("nbrItems", nbrItems);
    return nbrItems;
}
function calGST(){
    let pretotal1 = Number(document.getElementById("pretotal").textContent);
    let gst1 = pretotal1*0.05;
    if(gst1.toString().length>3){
        gst1 = Number(gst1.toFixed(2));
    }
    document.getElementById("GST").textContent = gst1;
}
function calQST(){
    let pretotal1 = Number(document.getElementById("pretotal").textContent);
    let qst1 = pretotal1*0.09975;
    if(qst1.toString().length>3){
        qst1 = Number(qst1.toFixed(2));
    }
    document.getElementById("QST").textContent = qst1;
}
function calTotal(){
    let pretotal1 = Number(document.getElementById("pretotal").textContent);
    let gst1 = Number(document.getElementById("GST").textContent);
    let qst1 = Number(document.getElementById("QST").textContent);
    let total1 = pretotal1+gst1+qst1;
    if(total1.toString().length>3){
        total1 = Number(total1.toFixed(2));
    }
    document.getElementById("TOTAL").textContent = total1;
}
//increments quantity by 1, function used by the CART PAGE + buttons
function addplus(name) {
    let index = cartList.findIndex(cartList => cartList.name === name);
    cartList[index].quantity++;
    document.getElementById("Quantity"+index).value=cartList[index].quantity;
    console.log("this is the value attribute of of the element Quantity with index  "+index+" : "+document.getElementById("Quantity"+index).value);
    let IDstring = "Quantity"+index;
    document.getElementById(IDstring).placeholder = cartList[index].quantity;
    console.log("this is the placeholder of "+document.getElementById("Quantity"+index).placeholder);
    storeCartItemArray();
    calnbrItems();
    calpretotal();
    calSingleTotal(name);
    calGST();
    calQST();
    calTotal();
}
function subminus(name) {
    let index = cartList.findIndex(cartList => cartList.name === name);
    if (cartList[index].quantity!=0) {
        cartList[index].quantity--;
        document.getElementById("Quantity"+index).value=cartList[index].quantity;
        console.log("this is the value attribute of of the element Quantity with index  "+index+" : "+document.getElementById("Quantity"+index).value);
        let IDstring = "Quantity" + index;
        document.getElementById(IDstring).placeholder = cartList[index].quantity;
        storeCartItemArray();
        calnbrItems();
        calpretotal();
        calSingleTotal(name);
        calGST();
        calQST();
        calTotal();
    }else{
        deleteItem(name);
    }
}
function calSingleTotal(name){
    let index = cartList.findIndex(cartList => cartList.name === name);
    let IDstring = "tot"+index;
    let temp = cartList[index].total();
    console.log("this is the temp from calsingleottal"+ temp);
    if(temp.toString().length>3){
        temp = Number(temp.toFixed(3));
    }
    document.getElementById(IDstring).textContent = temp;
}
function deleteItem(name){
    // jQuery(function ($){  ("#frameWork").load(window.location.href+"#framework")});
    let index = cartList.findIndex(cartList => cartList.name === name);
    cartList[index].quantity=0;
    document.getElementById("Quantity"+index).value=cartList[index].quantity;
    console.log("this is the value attribute of of the element Quantity with index  "+index+" : "+document.getElementById("Quantity"+index).value);
    let IDstring = "Quantity" + index;
    let element = document.getElementById(cartList[index].nameCut());
    element.style.display="none";
    document.getElementById(IDstring).placeholder = "0";
    popCartItem(name);
    location.reload();
    //  calnbrItems();
    // calpretotal();
    //calSingleTotal(name);
    //calGST();
    // calQST();
    //calTotal();
    //jQuery(function ($){  ("#frameWork").load(window.location.href+"#framework")});
//    $("#frameWork").load(window.location.href + " #framework" );
}

