<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pengangkatan</title>
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
<div>
    <table width="84%" class="margin-top margin-left margin-right">
        <tr>
            <td align="center" style="width: 100%;">
                <p><u><b><font size="16">SURAT KEPUTUSAN MANAGER</font></b></u>
                    <br><small><b>{{$data->no_surat}}{{$data->kode_surat}}</b></small></p>
            </td>
        </tr>
    </table>
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 20px" class="text margin-left margin-right">
        <tr>
            <td class="clean" align="justify">Berdasarkan rapat yang dilaksanakan pada hari Rabu, tanggal 02 Januari 2013, saya yang bertanda tangan di bawah ini
            </td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
    </table>
    {{--table konten--}}
    <table width="84%" class="text margin-left margin-right">
        <tr>
            <td style="width: 30%;">Nama</td>
            <td>:</td>
            <td style="width: 90%;">Ir. Akhmad Mujib</td>
        </tr>
        <tr style="width: 40%">
            <td style="width: 30%;">Jabatan</td>
            <td>:</td>
            <td style="width: 90%;">Direktur Quali International</td>
        </tr>
    </table>
    <table width="84%" style="margin-top: 15px" class="text margin-left margin-right">
        <tr>
            <td><b>Menimbang</b>, bahwa nama tersebut di bawah ini :</td>
        </tr>
        <tr><td></td></tr>
    </table>
    {{--table konten--}}
    <table width="84%" class="text margin-left margin-right">
        <tr>
            <td style="width: 30%;">Nama </td>
            <td>:</td>
            <td style="width: 90%;">Lili Musyafa’ah, S.Pd</td>
        </tr>
        <tr>
            <td style="width: 30%;">Tempat Tanggal Lahir </td>
            <td>:</td>
            <td style="width: 90%;">Jakarta, 12 Maret 1970</td>
        </tr>
        <tr style="width: 40%">
            <td style="width: 30%;">Pendidikan terakhir </td>
            <td>:</td>
            <td style="width: 90%;">S1 Bahasa Inggris tahun 1994</td>
        </tr>
    </table>
    {{--penutup--}}
    <table width="84%" style="margin-top: 15px" class="text margin-left margin-right">
        <tr>
            <td class="clean" align="justify"><b>Memutuskan</b>, nama tersebut di atas diangkat sebagai <b>Manager</b> di Quali International cabang Surabaya.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td>Demikian surat keputusan tersebut dibuat, dan dapat digunakan sebagaimana mestinya.</td>
        </tr>
    </table>
    {{--footer--}}
    <br><br><br><table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;">
                {{$data->tempat}}, {{$data->tgl_keluar}}
            </td>
            <td align="center"></td>
            <td align="left" style="width: 40%;"></td>
        </tr>
        <tr>
            <td align="left" style="width: 40%;"></td>
            <td align="center"></td>
            <td align="left" style="width: 40%;"></td>
        </tr>
        <tr>
            <td align="left" style="width: 40%;">Mengetahui,</td>
            <td align="center"></td>
            <td align="left" style="width: 40%;"></td>
        </tr>
    </table>
    <br><br><br>
    <table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 100%;">
                <p><u>Ir. Akhmad Mujib</u>
                    <br><small>Direktur Quali International</small></p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>