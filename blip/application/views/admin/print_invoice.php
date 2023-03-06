<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Invoice');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<h3>Daftar Produk</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="5%" align="center">Invoice Id</th>
                            <th width="22%" align="center">Buyers Name</th>
                            <th width="22%" align="center">Shipping Address</th>
                            <th width="22%" align="center">Payment Date</th>
                            <th width="22%" align="center">Payment Limit</th>
                        </tr>';
            foreach ($invoice as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['alamat'].'</td>
                            <td>'.$row['tgl_pesan'].'</td>
                            <td>'.$row['batas_bayar'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('print_invoice.pdf', 'I');
