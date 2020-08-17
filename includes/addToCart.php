<?php

    if(empty($_SESSION['name'])){
        $_SESSION['name'] = array();
        $_SESSION['price'] = array();
        $_SESSION['qty'] = array();
        $_SESSION['pic'] = array();
    }

    array_push($_SESSION['qty'], $_POST['qty']);
   
    $details = explode("|", $_POST['item']);

    array_push($_SESSION['name'], $details[0]);
    array_push($_SESSION['price'], $details[1]);
    array_push($_SESSION['pic'], $details[2]);

   header("Location: ../p4-cartcopy.php");
?>
<!--
function writeCart(){
    if(empty(!$_SESSION['name'])){
        $name = $_SESSION['name'];
        $price = $_SESSION['price']; 
        $qty = $_SESSION['qty'];
        $pic = $_SESSION['pic'];

        for($i = 0; $i < count($name); $i++){
            echo '<div class="row list pt-2 pb-2" id="Mango">
            <img src="'.$pic.'" class="product-image col-4 ">
            <div class="col">
                <div class="row mb-2">
                    <div class="col align-self-left ml-2 font-weight-bold" id="name0">'.$name.'</div>
                    <div class="col align-self-right ml-2 font-weight-bold " id="eachTag0"> $ <var id="each0">'.$price.'</var> ea.</div>
                </div>
                <div class="row mt-1 mb-2 border-top">
                    <div class="col-sm-6  pt-2">
                        <div class="row">
                            <div class="col ml-4"><a class="btn btn-outline-info " id="Substracting0"><i class="fa fa-minus"></i></a></div>
                            <div class="col input-group" ><input type="text" class="form-control QTY" id="Quantity0" value="'.$qty.'"></div>
                            <div class="col "> <a class="btn btn-outline-info " id="Adding0"><i class="fa fa-plus"></i></a></div>
                        </div>
                    </div>
                    <div class="col-sm-6  pt-2">
                        <div class="row">
                            <div class="col-7 text-center pt-1" style="font-size:19px" id="totTag0"> $ <var  id="tot0"></var></div>
                            <div class="col ml-2"><a class="btn btn-outline-info" id="Deleting0"><i class="fa fa-close"></i> </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    }
    else {
        echo "<h2>Empty cart</h2>";
    }
}
-->