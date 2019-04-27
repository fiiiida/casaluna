<?php



require __DIR__.'/PDF/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$total=0;
?>
<link href="pdf-style.css" type="text/css" rel="stylesheet">
<page footer="date; page" backtop="20mm" backbottom="20mm" backleft="10mm" backright="10mm">
    <page_header>
    <table class="table-header">
        <tr>
            <td class="logo">
                <img src="images/casa.png" style="height: 80px; width: 100px;" />
            </td>
            <td class="company-head"><h3>Casaluna</h3></td>
        </tr>
    </table>
    </page_header>
    <page_footer>
    <table style="border-top: 1px solid #666666; width: 100%; background: #cccccc;">
        <tr>
            <td style="width: 100%; text-align: center;">
                <p>
                   3, rue Slaheddine El Ayoubi
                              Sidi Bou Saïd 2026</p>
                <p>Tel 24 545 134, FAX 454545457578 </p>
            </td>
        </tr>
    </table>
    </page_footer>



    <h1>Facture</h1>
    <table class="doc-infos">
        <tr>
            <td class="invoice">
                <h3>Invoice  290810 <h3>
                <p><?php echo date('Y-m-d H:i');  ?></p>
            </td>
            <td class="client">
                <h3><?php echo $_SESSION['l']  ; ?></h3>
                <p>Tel 29 058 311</p>
            </td>
        </tr>
    </table>
    <hr>

    <table class="doc-details" cellspacing="0">
        <tr>
            <th class="ref">ID</th>
            <th class="desig">Produit</th>
            <th class="qte">QTE</th>
            <th class="price">Price</th>
            <th class="amount">Amount</th>
        </tr>

        <?php
        include 'core/Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig2.php';

              $prixTel=$cart->total();
         
            $cartItems = $cart->contents();
            foreach($cartItems as $item){

                ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td>Description</td>
                <td><?= $item['qty']?></td>
                <td><?= number_format($item['price'], 2)?></td>
                <td><?= number_format($prixTel, 2)?></td>
            </tr>
            <?php }?>

        

    </table>

    <br>
    <br>

      <table class="total" cellspacing="0">
        <tr>
            <td style="width: 70%">Montant de remise </td>
            <td style="width: 25%"><?=number_format($prixTel, 2)?></td>
        </tr>
        <tr>
            <td style="width: 70%">Total HT</td>
            <td style="width: 25%"><?=number_format($prixTel, 2)?></td>
        </tr>
        <tr>
            <td>Total TVA</td>
            <td></td>
        </tr>
        <tr>
            <td>Total TTC</td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2">Net A payer : <?=number_format($total, 2)?></td>
        </tr>
    </table>

    <br>
    <table class="signature-table" cellspacing="0">
        <tr>
            <td class="sinature"></td>
            <td class="amount-chars">
                <p>signature client</p>
            </td>
        </tr>
    </table>

 </page>
<?php
    $content = ob_get_clean();
    $lg = Array();
    $lg['a_meta_charset'] = 'UTF-8';
    $lg['a_meta_dir'] = 'rtl';
    $lg['a_meta_language'] = 'fa';
    $lg['w_page'] = 'page';

    // set some language-dependent strings (optional)


    $html2pdf = new HTML2PDF('P', 'A4', 'en');
    //$html2pdf->pdf->setLanguageArray($lg);

    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->Output('fichierpdf.pdf','D');

     $file = 'C:/Users/FidaDownloads/fichierpdf.pdf';
     $newfile = 'factures/fichierpdf.pdf';
   
 ?>