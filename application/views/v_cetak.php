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
<table border="1" cellpadding="5" cellspacing="2" width="540" height="370" align="left">
<tr>
<td align="left" valign="top" colspan="2">
    <!--===getHeader()=======================================================-->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td width="15%" align="center">
                <img src="<?php echo base_url() ?>assets/images/logo_unuja.jpg"/>
            </td>
            <td valign="top" align='left'>
                <font size="3" style="font-family: Georgia"><strong>KARTU BEROBAT KLINIK AZ-ZAINIYAH</strong></font><br/>
                <font size="3" style="font-family: Georgia">PONDOK PESANTREN NURUL JADID</font><br/>
                <font size="3" style="font-family: Tahoma">PAITON PROBOLINGGO 2020</font><br/>
            </td>
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
<!--                                                <tr  height="30">
                                <td align="center" bgcolor="#CCCCCC"><strong>A. </strong></td>
                                <td style="padding-left: 5px" bgcolor="#CCCCCC" colspan="5"><strong>PROGRAM PEMINATAN</strong></td>
                            </tr>-->
                            <tr height="20">
                                <td rowspan="7" width="5%"></td>
                                <td align="center" width="5%"></td>
                                <td width="27%">&nbsp;No. Antrian</td>
                                <td align="center" width="2%">:</td>
                                <td colspan="2">&nbsp;<strong><?= $pasien->poli . " (" . $pasien->no_antrian . ")" ?></strong></td>
                            </tr>
                            <tr height="20">
                                <td align="center"></td>
                                <td>&nbsp;Nama Pasien</td>
                                <td align="center">:</td>
                                <td colspan="2">&nbsp;<strong><?= $pasien->pasien ?></strong></td>
                            </tr>
                            <tr height="20">                                                                                                    
                                <td align="center"></td>
                                <td>&nbsp;Alamat</td>
                                <td align="center">:</td>
                                <td colspan="2">&nbsp;<strong><?= $pasien->alamat ?></strong></td>
                            </tr>
                            <tr height="20">
                                <td align="center"></td>
                                <td>&nbsp;Usia</td>
                                <td align="center">:</td>
                                <td colspan="2">&nbsp;<strong><?= $pasien->usia . " tahun" ?></strong></td>
                            </tr>
                            <tr height="20">
                                <td align="center"></td>
                                <td>&nbsp;Kelamin</td>
                                <td align="center">:</td>
                                <td colspan="2">&nbsp;<strong><?= $pasien->kelamin ?></strong></td>
                            </tr>
                            <tr height="20">
                                <td align="center"></td>
                                <td>&nbsp;Keluhan</td>
                                <td align="center">:</td>
                                <td colspan="2">&nbsp;<strong><?= $pasien->keluhan ?></strong></td>
                            </tr>
                            <tr height="20">
                                <td align="center"></td>
                                <td>&nbsp;Kunjungan</td>
                                <td align="center">:</td>
                                <td colspan="2">&nbsp;<strong><?= $pasien->poli ?></strong></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr height="20">
                                <td></td>
                                <td></td>
                                <td>Paiton, <?php echo date('d F Y'); ?></td>
                            </tr>
                            <tr>
                                <td width="20%"></td>
                                <td></td>
                                <td width="35%">Petugas,</td>
                            </tr>
                            <tr height="55">
                                <td></td>
                                <td valign="top" align='center' style="font-family: Monotype Corsiva; font-size: 25px; padding-top: 5px;"></td>
                                <td valign="bottom"><strong>( <?= $this->session->userdata('nama') ?> )</strong></td>
                            </tr>
                            <tr><!-- 
                                <td colspan="2" style="font-family: Monotype Corsiva; font-size: 14px;"><u>Catatan :</u> Simpan kuitansi bukti pembayaran ini dengan baik<br/> <b>- hijau untuk siswa &nbsp;&nbsp;&nbsp;- merah arsip madrasah</b></td>
                            </tr> -->
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