<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Keterangan Pengalaman</title>
    <style type="text/css">
        body, html {
            height: 100%;
            margin: 0;
            border: 0;
        }

        .bg {
            /* The image used */
            background-image: url("/images/kop/kop_qis12.png");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .margin-top{
            margin-top: 125px
        }

        .margin-left{
            margin-left: 72px;
        }

        .margin-right{
            margin-right: 10px;
        }

        @font-face{
            font-family: Calibri;
            font-size: 10px;
        }

        table#konten, tr#konten, td#konten{
            border: 1px solid black;
            border-collapse: collapse;
        }

        /*.clean{*/
        /*text-indent: 50px;*/
        /*}*/

        .text{
            font-size: 16px;
        }

    </style>

</head>
<body class="bg">
<div style="height: 100%;
            margin: 0;
            border: 0;
            background-image: url('/images/kop/kop_qis12.png');

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
    <table width="84%" class="margin-top margin-left margin-right">
        <tr>
            <td align="center" style="width: 100%;">
                <p><u><b><font size="16">SURAT KETERANGAN</font></b></u>
                    <br><small><b>{{$sKeluar->no_surat}}{{$sKeluar->kode_surat}}</b></small></p>
            </td>
        </tr>
    </table>
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 20px" class="text margin-left margin-right">
        <tr>
            <td class="clean" align="justify">Yang bertandatangan di bawah ini :</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
    </table>
    {{--table konten--}}
    <table width="84%" class="text margin-left margin-right">
        <tr>
            <td style="width: 30%;">Nama Lengkap</td>
            <td>:</td>
            <td style="width: 90%;">Lili Musyafa’ah S. Pd</td>
        </tr>
        <tr style="width: 40%">
            <td style="width: 30%;">Jabatan</td>
            <td>:</td>
            <td style="width: 90%;">Pimpinan LPBI Quali International Surabaya (QIS)</td>
        </tr>
    </table>
    <table width="84%" style="margin-top: 23px" class="text margin-left margin-right">
        <tr>
            <td>Menerangkan bahwa :</td>
        </tr>
        <tr><td></td></tr>
    </table>
    {{--table konten--}}
    <table width="84%" class="text margin-left margin-right">
        <tr>
            <td style="width: 30%;">Nama Lengkap</td>
            <td>:</td>
            <td style="width: 90%;">{{ $iKeluar->nama_pegawai }}</td>
        </tr>
        <tr>
            <td style="width: 30%;">{{ $iKeluar->jabatan}}</td>
            <td>:</td>
            <td style="width: 90%;">{{ $iKeluar->lembaga}}</td>
        </tr>
        <tr style="width: 40%">
            <td style="width: 30%;">Periode</td>
            <td>:</td>
            <td style="width: 90%;">Sejak 01 April 2016 – 31 Mei 2018</td>
        </tr>
    </table>
    {{--penutup--}}
    <table width="84%" style="margin-top: 23px" class="text margin-left margin-right">
        <tr>
            <td class="clean" align="justify">Pernah bekerja di Lembaga kami <b>LKP Quali International Surabaya (QIS)</b> sebagai Instruktur Bahasa Inggris. Adapun sikap dan hasil kerja nama tersebut di atas dinilai baik.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td>Demikian surat ini kami buat dengan sebenar benarnya.</td>
        </tr>
    </table>
    {{--footer--}}
    <br><br><br><br><br><br>
    <table width="90%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;"></td>
            <td align="center"></td>
            <td align="center" style="width: 50%;">
                {{$data->tempat}}, {{$data->tgl_keluar}}
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 40%;"></td>
            <td align="center"></td>
            <td align="left" style="width: 40%;"></td>
        </tr>
        <tr>
            <td align="left" style="width: 40%;"></td>
            <td align="center"></td>
            <td align="center" style="width: 50%;"><b>Pimpinan<br>Quali International Surabaya (QIS)</b></td>
        </tr>
    </table>
    <br><br><br><br><br>
    <table width="90%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;"></td>
            <td align="center"></td>
            <td align="center" style="width: 50%;">
                <b><u>Lili Musyafa’ah, S. Pd, M. Pd</u></b>
            </td>
        </tr>
    </table>
</div>
</body>
</html>