<?php

// Class Definition
class Mobile
{
   private $Model = "";
   private $Price = "";
   
   public function SetInfo($aModel, $aPrice)
   {
      $this->Model = $aModel;
      $this->Price = $aPrice;
   }
   public function PrintInfo()
   {
      echo ("<hr />\n");
      echo ("<pre>\n");
      echo ("Model : " . $this->Model . "<br/>\n");
      echo ("Price : " . $this->Price . "<br/>\n");
      echo ("</pre>\n");
      echo ("<hr />\n");
   }
}

// Instantiation
$MyMobile1 = new Mobile();
$MyMobile2 = new Mobile();

$MyMobile1->SetInfo("Nokia E50", 12500);
$MyMobile2->SetInfo("SAMSUNG SGH-X200", 2500);

$MyMobile1->PrintInfo();
$MyMobile2->PrintInfo();

?>