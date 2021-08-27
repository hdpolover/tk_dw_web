<?php
function convertStatus($status)
{
    switch ($status) {
        case 0:
            return "-";
            break;
        case 1:
            return "A";
            break;
        case 2:
            return "&#10003";
            break;
        case 3:
            return "S";
            break;
        case 4:
            return "I";
            break;
        default:
            return "";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR HADIR KEPALA DAN GURU</title>
    <style>
        .tg {
            border-style: solid;
            border-width: 1px;
            border-color: black;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            word-break: normal;
        }

        .tg .tg-w2dt {
            font-size: 14px;
            text-align: center;
            vertical-align: middle;
            border-color: black;
            border-style: solid;
            border-width: 1px;
            padding: 10px 10px;
        }

        .tg .tg-z9od {
            font-size: 14px;
            text-align: left;
            vertical-align: center;
            padding: 10px 10px;
            border-color: black;
            border-style: solid;
            border-width: 1px;
        }

        .tg .tg-z9ad {
            font-size: 14px;
            text-align: left;
            vertical-align: center;
            border-color: black;
            border-style: solid;
            border-width: 1px;
            padding: 5px 5px;
        }

        .tg .tg-z9cd {
            font-size: 14px;
            text-align: left;
            vertical-align: center;
            border-color: black;
            border-style: solid;
            border-width: 1px;
            padding: 5px 5px;
        }

        .tg .tg-xsvg {
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
            padding-left: 23px;
            border-color: black;
            border-style: solid;
            border-width: 1px;
        }

        .tg .tg-ir4y {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            padding: 10px 10px;
        }

        .tg .tg-k27y {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            padding: 10px 10px;

        }

        .valign-middle {
            vertical-align: middle;
        }
    </style>
</head>

<body style="padding-left:0.5cm; padding-right:0.5cm; font-family:Arial, sans-serif; font-size:15px;">
    <div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="text-align: center; font-size: 20px; margin-bottom: 0px;" colspan="2">
                        YAYASAN DHARMAWANITA PERSATUAN
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 30px; font-weight: bold; margin-bottom: 0px; margin-top: 0px;" colspan="2">
                        TK DHARMAWANITA III
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 17px; margin-top: 5px;">
                        NSS: 00205201010
                    </td>
                    <td style="text-align: center; font-size: 17px; margin-top: 5px;">
                        NIS: 000100
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; font-size: 17px; margin-top: 5px;">
                        Kampung Baru Lampon Desa Pesanggaran Kec. Pesanggaran Kab. Banyuwangi
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <div>
        <p style="text-align: center; font-size: 17x; margin-top: 5px; font-weight: bold; margin-bottom: 0px;">
            DAFTAR HADIR KEPALA DAN GURU
        </p>
    </div>
    <p>BULAN: <?= $bulan;?></p>
    <div>
        <table class="tg" width="100%">
            <thead>
                <tr>
                    <th class="tg-ir4y" rowspan="2">
                        NO.
                    </th>
                    <th class="tg-ir4y" rowspan="2">
                        NAMA
                    </th>
                    <th class="tg-ir4y" rowspan="2">
                        JABATAN
                    </th>
                    <th class="tg-ir4y" rowspan="2">
                        GOL/RUANG
                    </th>
                    <th class="tg-ir4y" rowspan="1" colspan="31">
                        TANGGAL
                    </th>
                    <th class="tg-ir4y" rowspan="2">
                        S
                    </th>
                    <th class="tg-ir4y" rowspan="2">
                        I
                    </th>
                    <th class="tg-ir4y" rowspan="2">
                        A
                    </th>
                    <th class="tg-k27y" rowspan="2">
                        KET
                    </th>
                </tr>
                <tr>
                    <td class="tg-w2dt">1</td>
                    <td class="tg-w2dt">2</td>
                    <td class="tg-w2dt">3</td>
                    <td class="tg-w2dt">4</td>
                    <td class="tg-w2dt">5</td>
                    <td class="tg-w2dt">6</td>
                    <td class="tg-w2dt">7</td>
                    <td class="tg-w2dt">8</td>
                    <td class="tg-w2dt">9</td>
                    <td class="tg-w2dt">10</td>
                    <td class="tg-w2dt">11</td>
                    <td class="tg-w2dt">12</td>
                    <td class="tg-w2dt">13</td>
                    <td class="tg-w2dt">14</td>
                    <td class="tg-w2dt">15</td>
                    <td class="tg-w2dt">16</td>
                    <td class="tg-w2dt">17</td>
                    <td class="tg-w2dt">18</td>
                    <td class="tg-w2dt">19</td>
                    <td class="tg-w2dt">20</td>
                    <td class="tg-w2dt">21</td>
                    <td class="tg-w2dt">22</td>
                    <td class="tg-w2dt">23</td>
                    <td class="tg-w2dt">24</td>
                    <td class="tg-w2dt">25</td>
                    <td class="tg-w2dt">26</td>
                    <td class="tg-w2dt">27</td>
                    <td class="tg-w2dt">28</td>
                    <td class="tg-w2dt">29</td>
                    <td class="tg-w2dt">30</td>
                    <td class="tg-w2dt">31</td>
                </tr>
            </thead>
            <tbody>
                <?php $index = 1; ?>
                <?php foreach ($presensi_pegawai as $p) { ?>
                    <tr>
                        <td class="tg-z9od"><?php echo ($index); ?>.</td>
                        <td class="tg-w2dt">
                            <strong><?= $p['NAMA']; ?></strong>
                            <br>
                            <?= $p['NIP_NUPTK']; ?>
                        </td>
                        <td class="tg-w2dt">
                            <?= $p['JABATAN']; ?>
                        </td>
                        <td class="tg-w2dt">
                            <?= $p['GOLONGAN']; ?> / <?= $p['RUANG']; ?>
                        </td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_1']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_2']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_3']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_4']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_5']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_6']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_7']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_8']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_9']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_10']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_11']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_12']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_13']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_14']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_15']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_16']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_17']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_18']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_19']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_20']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_21']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_22']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_23']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_24']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_25']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_26']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_27']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_28']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_29']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_30']); ?></td>
                        <td class="tg-w2dt"><?= convertStatus($p['pres_31']); ?></td>
                        <td class="tg-w2dt"><?= $p['j_sakit']; ?></td>
                        <td class="tg-w2dt"><?= $p['j_izin']; ?></td>
                        <td class="tg-w2dt"><?= $p['j_alpha']; ?></td>
                        <td class="tg-w2dt"></td>
                    </tr>
                    <?php $index++; ?>
                <?php } ?>
                <tr>
                    <td class="tg-z9od"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                    <td class="tg-w2dt"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="text-align: right;">
                        Pesanggaran,...................
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Kepala TK DHARMA WANITA III
                        <br>
                        Lampon - Pesanggaran
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; margin-bottom: 0px; text-align: right;">
                        <br>
                        <br>
                        <br>
                        <br>
                        SUGIANTO, S.Pd
                    </td>
                </tr>
                <tr>
                    <td style="margin-bottom: 0px; text-align: right;">
                        NIP. 196908262007011015
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

</html>