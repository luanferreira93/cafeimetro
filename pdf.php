<?php

require_once ('./dompdf/autoload.inc.php');

use Dompdf\Dompdf;

class PDF extends Dompdf{
    public function __construct(){
        parent::__construct();
    }
}