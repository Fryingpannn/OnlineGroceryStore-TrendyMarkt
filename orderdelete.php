<?php
session_start();
?>
<html>
<head>
    <title>choice</title></head>
<body>
<?php
   if(isset($_GET['delete']))
{ 
       $num=$_GET['filter'];
$dom = new DOMDocument();
$dom->load("Order.xml");
$xpathXml = new DOMXPath($dom);
$elements = $xpathXml->query("//olist[number='$num']");
foreach ($elements as $element) {
$element->parentNode->removeChild($element);
   $dom->save("Order.xml");
}
  echo("Order has been successfully deleted. Press on the link to go back to the order list <a href='p11-orderlist.php'>go back</a>");
} 
    ?> 

    </body>
</html>


