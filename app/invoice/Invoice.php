<?php
/**
 * Created by PhpStorm.
 * User: saadati-mo
 * Date: 11/17/2018
 * Time: 4:19 PM
 */

namespace App\invoice;

use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;

class Invoice
{
    protected $pdf;

    public function __construct()
    {
        $this->pdf = new Dompdf;
    }

    public function generate()
    {
        $this->pdf->loadHtml(View::make('invoices.invoice')->render());
        $this->pdf->render();
        $this->pdf->stream('invoice.pdf');
        return $this->pdf->output();
    }
}