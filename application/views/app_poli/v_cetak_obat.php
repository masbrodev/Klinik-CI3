<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jbs_cetak.css" />        
        <title ng-value="_blank">Cetak</title>
        <!--menghilangkan header footer saat print halman-->
        <style type="text/css" media="print">
            @page{
                size: auto;
                margin: 0mm;
                /*size: landscape;*/
            }
            html{
                background-color:#FFFFFF;
                margin: 0px;
            }
            body{
                /*border: solid 1px black ;*/
                /*margin: 5mm 5mm 5mm 5mm;*/
            }
        </style>
        <style type="text/css">
            tr{
                font-family               : arial;
                font-size                 : 13px;
                color                     : #000000;
                background-color          : #FFFFFF;
            }
        </style>
    </head>
<body>        
<table border="1" cellpadding="5" cellspacing="2" width="500" height="500" align="center">
<tr>
<td align="center" valign="top" colspan="2">
    <!--===getHeader()=======================================================-->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td width="15%" align="center" >
                <img src="<?php echo base_url() ?>assets/images/logoklnk.png"/>
            </td>
            <td valign="top" align='center' colspan="2">
                <font size="5" style="font-family: Georgia"><strong>YAYASAN NURUL JADID</strong></font><br/>
                <font size="5" style="font-family: Georgia">KLINIK AZ-ZAINIYAH</font><br/>
                <font size="1" style="font-family: Times New Rowmen">PAITON PROBOLINGGO 67291 TELP.(0335) 771959 FAX 771406</font><br/>
            </td>
        </tr>

        <!-- Status dan dokter -->
        <tr height="55">
            <td></td>
            <td valign="bottom" align="left" >Status : <strong> <?= $c->status ?></strong> </td>  
            <td align="left" width="35%">Dokter</td>
        </tr>
        <tr height="30">
            <td></td>
            <td valign="top" align='center' style="font-family: Monotype Corsiva; font-size: 25px; padding-top: 5px;"></td>
            <td valign="bottom"><strong>( <?= $c->nama_dokter ?> )</strong></td>
        </tr>
        <tr>
            <td colspan="3"><hr width="100%" /></td>
        </tr>
    </table>
    <!--===endGetHeader()=======================================================-->                    

    <br/>
<table width="100%">
    <tr>    	
        <td>
            <table border="0" id="table" width="100%" cellpadding="0" style="border-collapse:collapse" cellspacing="0" >
                <tr>
                    <td valign="top">
                        <table border="0" cellpadding="0" style="border-collapse:collapse" cellspacing="0" width="100%">

                            <tr >
                                <td >&nbsp;R / <?= $c->terapy ?></td>
                                <td colspan="2" align="right">&nbsp;Tanggal : <?php echo date('d F Y'); ?></td>
                            </tr>
                          
                            <tr height="300">
                                <td valign="bottom">&nbsp;<strong>Pro : <?= $c->pasien ?> </strong></td>
                            </tr>
                            <tr>
                                <td align="left"><hr width="95%" />
                            </tr>
                            <tr height="20">
                                <td colspan="2">&nbsp;Umur : <strong><?= $c->usia . "Tahun" ?></strong></td>
                            </tr>
                            <tr>
                                <strong><td align="center"><hr width="147%" /></td></strong>
                            </tr>
                            <tr>
                                <td valign="bottom" color="#c90518">&nbsp;<strong>Obat tersebut tidak boleh diganti tanpa seijin dokter</strong></td>
                            </tr>
                            
                        </table>
                    </td>
                </tr>

              
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
</td>
</tr>
</table>


        <script language="javascript">
            window.print();
        </script>
    </body>
</html>