<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jbs_cetak.css" />        
        <title ng-value="_blank">Laporan Kunjungan Pasien</title>
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
        <table border="0" cellpadding="5" cellspacing="2" align="left" width="100%">
            <tr>
                <td align="left" valign="top" colspan="2">
                    <!--===getHeader()=======================================================-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td width="50%" align="center">
                                <img src="<?php echo base_url() ?>assets/images/logoklnk.png"/>
                            </td>
                            <td valign="top" align='center'>
                                <font size="3" style="font-family: Georgia"><strong>LAPORAN KUNJUNGAN PASIEN KLINIK AZ-ZAINIYAH</strong></font><br/>
                                <font size="3" style="font-family: Georgia">PONDOK PESANTREN NURUL JADID</font><br/>
                                <font size="3" style="font-family: Tahoma">PAITON PROBOLINGGO</font><br/>
                                <font size="2" style="font-family: Tahoma">Tanggal <?= $tgl_dari . " s/d " . $tgl_sampai ?></font><br/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><hr width="100%" /></td>
                        </tr>
                    </table>
                    <!--===endGetHeader()=======================================================-->                    

                    <br/>

                    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse" width="100%">
                        <thead class="text-capitalize">
                            <tr height="30" align="center">
                                <th bgcolor="#CCCCCC" width="5%">No</th>
                                <th bgcolor="#CCCCCC" width="15%">No_RM</th>
                                <th bgcolor="#CCCCCC" width="15%">Nama</th>
                                <th bgcolor="#CCCCCC">Alamat</th>
                                <th bgcolor="#CCCCCC">Tgl_Lahir</th>
                                <th bgcolor="#CCCCCC">Usia</th>
                                <th bgcolor="#CCCCCC">Kelamin</th>
                                <th bgcolor="#CCCCCC">Daerah</th>
                                <th bgcolor="#CCCCCC">Tgl Daftar</th>
                                <th bgcolor="#CCCCCC">Jam Daftar</th>
                                <th bgcolor="#CCCCCC">&nbsp;Kunjungan&nbsp;</th>                                    
                                <th bgcolor="#CCCCCC">Petugas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kunjungan as $b) {
                                ?>
                                <tr height="22" align="center">
                                    <td><?= $no ?></td>
                                    <td>&nbsp;<?= $b->no_rm ?>&nbsp;</td>
                                    <td>&nbsp;<?= $b->pasien ?>&nbsp;</td>
                                    <td>&nbsp;<?= $b->alamat ?>&nbsp;</td>
                                    <td><?= $b->tgl_lahir ?></td>
                                    <td><?= $b->usia ?></td>
                                    <td><?= $b->kelamin ?></td>
                                    <td><?= $b->daerah ?></td>
                                    <td>&nbsp;<?= $b->tgl_daftar?>&nbsp;</td>
                                    <td>&nbsp;<?= $b->jam_daftar?>&nbsp;</td>
                                    <td><?= $b->poli ?></td>
                                    <td><?= $b->petugas ?></td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>                                                              
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>


        <script language="javascript">
            window.print();
        </script>
    </body>
</html>