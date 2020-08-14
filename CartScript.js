   CartStorage = window.localStorage;
    let nbrPeach=Number("0");
    function reload1(){
    nbrPeach=CartStorage.getItem('nbrPeach');
    Quantity1.placeholder=nbrMango;
}
    reload1();
    CartStorage.setItem('nbrPeach', nbrPeach);

    Adding3.addEventListener('click', addplus3);
    Substracting3.addEventListener('click', subminus3);
    Deleting3.addEventListener('click',deletefruit3);
    function addplus1(){
    nbrMango=CartStorage.getItem('nbrMango');
    nbrMango++;
    Quantity1.placeholder=nbrMango;
    CartStorage.setItem('nbrMango', nbrMango);
}
    function subminus1(){
    nbrMango=CartStorage.getItem('nbrMango');
    if(nbrMango>0){
    nbrMango--;
    Quantity1.placeholder=nbrMango;
    CartStorage.setItem('nbrMango', nbrMango);
}
}
    function deletefruit1(){
    nbrMango=CartStorage.getItem('nbrMango');
    nbrMango=0;
    Quantity1.placeholder=nbrMango;
    CartStorage.setItem('nbrMango', nbrMango);
}
    function addplus2(){
    nbrApple=CartStorage.getItem('nbrApple');
    nbrApple++;
    Quantity2.placeholder=nbrApple;
    CartStorage.setItem('nbrApple', nbrApple);
}
    function subminus2(){
    nbrApple=CartStorage.getItem('nbrApple');
    if(nbrApple>0){
    nbrApple--;
    Quantity2.placeholder=nbrApple;
    CartStorage.setItem('nbrApple', nbrApple);
}
}
    function deletefruit2(){
    nbrApple=CartStorage.getItem('nbrApple');
    nbrApple=0;
    Quantity2.placeholder=nbrApple;
    CartStorage.setItem('nbrApple', nbrApple);
}
    function addplus3(){
    nbrPeach=CartStorage.getItem('nbrPeach');
    nbrPeach++;
    Quantity3.placeholder=nbrPeach;
    CartStorage.setItem('nbrPeach', nbrPeach);
}
    function subminus3(){
    nbrPeach=CartStorage.getItem('nbrPeach');
    if(nbrPeach>0){
    nbrPeach--;
    Quantity3.placeholder=nbrPeach;
    CartStorage.setItem('nbrPeach', nbrPeach);
}
}
    function deletefruit3(){
    nbrPeach=CartStorage.getItem('nbrPeach');
    nbrPeach=0;
    Quantity3.placeholder=nbrPeach;
    CartStorage.setItem('nbrPeach', nbrPeach);
}