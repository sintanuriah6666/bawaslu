<!DOCTYPE html>
<html><head>
 
</head><body>
<div class="title">
   
    <br> </br>
    <br> </br>
</div>
<style> 
    table, 
    td, 
    th {
       
        border: 1px solid #333;
    }

    table {
        width: 100%;
        border-collapse: collapse 
    }
    td, th {
        padding: 2px;
    }
    th {
        background-color: #CCC;
    }
    <!DOCTYPE html>
<html>
<head>
    
<style> 
     .title {
        text-align: center;
        font-size:13px;

    
    }

    .line-litle{
        border: 0;
        border-style: inset;
        border-top: 1px solid #000;
    }

    table, 
    td, 
    th {

        border: 1px solid #333;
    }

    table {
        width: 100%;
        border-collapse: collapse 
    }
    td, th {
        padding: 2px;
    }
    th {
        background-color: #CCC;
    }
    @media print {
        @page {
            width: 80mm;
            margin: 0mm;
        }
</style>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;line-height:115%;'><strong><span style='font-size:16px;line-height:115%;font-family:"Arial",sans-serif;'>&lsquo;BERITA ACARA STOCK OPNAME FISIK PERSEDIAAN</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;line-height:115%;'><strong><span style='font-size:16px;line-height:115%;font-family:"Arial",sans-serif;'>BAWASLU KABUPATEN/KOTA</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;line-height:115%;'><strong><span style='font-family:"Arial",sans-serif;'><?=isset($post7['date1']) ? $post7['date1'] : '' ?> - <?=isset($post7['date2']) ? $post7['date2'] : '' ?></span></strong></p>
</style>
<br></br>
   <br></br>
    <table> 
        <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama</th>                       
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th> 
       
        </tr>

        <?php $no = 1;
        $total_harga = 0;                    
        foreach($row->result() as $key => $data):  ?>
                    <tr>
                            <td ><?=$no++?>.</td>
                            <td ><?=indo_date($data->date)?></td> 
                            <td><?=$data->name?></td>
                           <td><?=$data->qty?></td>
                              <td ><?=indo_currency($data->price)?></td>
                           <td><?=indo_currency($data->total)?></td>                 
                            
                        </tr>
            <?php {
                    $total_harga += $data->total;               
                
                }
                      ?>
        <?php endforeach; ?>
           
                    <tr>
                      <td></td>
                         <td></td>
                      <td></td>
                      
                       <td></td>
                      
                       <td></td>
                     
                         <td><?=indo_currency($total_harga)?></td>
                    </tr>
        </table>

        <br>
    </br>
    <br>
</br>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Arial",sans-serif;color:black;'>Keterangan:</span></p>
<p><span style='font-size:16px;line-height:107%;font-family:"Arial",sans-serif;color:black;'>1. Total Pembelian senilai <?=indo_currency($total_harga)?>,-&nbsp;</span></p>
      <br></br> <p style="text-align: center;">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; <?=$ttd1[0]->jabatan ?></p> <p
                        style="text-align: center;">&nbsp;</p> <p style="text-align:
                        center;">&nbsp;</p> <p style="text-align: center;"><strong>&nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;<u><?=$ttd1[0]->name?></u></strong></p> <p
                        style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NIP.
                       <?=$ttd1[0]->nip?></p>

</body></html>

</body></html>