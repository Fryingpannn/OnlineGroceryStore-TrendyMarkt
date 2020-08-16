<?php 
  session_start();
  $dom = simplexml_load_file("Order.xml");
  ?>

<html >
  <head>
      
    <title> Process add order </title>
  </head>
  <body>
	
  <?php 
      if(isset($_GET['submit']));
      {
          $dom=new DOMDocument("1.0","UTF-8"); 
              $dom->load("Order.xml");
          $O_Number=$_GET['number'];
      $O_Date=$_GET['created'];
      $N_Customer=$_GET['customer'];
      $NO_Ship=$_GET['shipping'];
          $Tot=$_GET['total'];
        
    

    $root=$dom->getElementsByTagName("Olist")->item(0);
      
      $data=$dom->createElement("olist");
   
      $Order_num=$dom->createElement("number",$O_Number);
      $Order_date=$dom->createElement("created",$O_Date);
      $C_Name=$dom->createElement("customer",$N_Customer);
      $S_Number=$dom->createElement("shipping",$NO_Ship);
        $Total_val=$dom->createElement("total",$Tot);
      
      $data->appendChild($Order_num);
      $data->appendChild($Order_date);
      $data->appendChild($C_Name);
      $data->appendChild($S_Number);
        $data->appendChild($Total_val);
      $root->appendChild($data);
     
      $dom->save("Order.xml");
    echo("Order has been successfully added click on the link to go back to order list <a href='p11-orderlist.php'>go back</a>");
      }
	     ?>
  </body>
</html>

