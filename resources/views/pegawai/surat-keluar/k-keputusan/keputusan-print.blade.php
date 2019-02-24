<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Keputusan Instruktur Madya</title>
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
                <p><u><b><font size="16">SURAT KEPUTUSAN INSTRUKTUR MADYA</font></b></u>
                    <br><small><b>{{$data->no_surat}}{{$data->kode_surat}}</b></small></p>
            </td>
        </tr>
    </table>
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 20px" class="text margin-left margin-right">
        <tr>
            <td class="clean" align="justify">Berdasarkan rapat yang dilaksanakan bersama Direktur Quali International pada hari Senin, tanggal 6 Oktober 2014,
            </td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td align="justify">saya yang bertanda tangan di bawah ini</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
    </table>
    {{--table konten--}}
    <table width="84%" class="text margin-left margin-right">
        <tr>
            <td style="width: 40%;">Nama</td>
            <td>:</td>
            <td style="width: 90%;">Lili Musyafa'ah, S.Pd</td>
        </tr>
        <tr style="width: 40%">
            <td style="width: 40%;">Jabatan</td>
            <td>:</td>
            <td style="width: 90%;">Manager Cabang Quali International Surabaya</td>
        </tr>
    </table>
    <table width="84%" style="margin-top: 15px" class="text margin-left margin-right">
        <tr>
            <td>Memutuskan, bahwa calon instruktur di bawah ini :</td>
        </tr>
        <tr><td></td></tr>
    </table>
    {{--table konten--}}
    <table width="84%" class="text margin-left margin-right">
        <tr>
            <td style="width: 40%;">Nama </td>
            <td>:</td>
            <td style="width: 90%;">Ahmad Mustafid</td>
        </tr>
        <tr>
            <td style="width: 40%;">Tempat Tanggal Lahir </td>
            <td>:</td>
            <td style="width: 90%;">Pati, 15 Maret 1991</td>
        </tr>
        <tr style="width: 40%">
            <td style="width: 40%;">Pendidikan terakhir </td>
            <td>:</td>
            <td style="width: 90%;">MA (PP AL FITROH) tahun 2011</td>
        </tr>
    </table>
    {{--penutup--}}
    <table width="84%" style="margin-top: 15px" class="text margin-left margin-right">
        <tr>
            <td class="clean" align="justify">Telah selesai menjalankan PROGRAM mengajar dengan klasifikasi level INSTRUKTUR MUDA Bahasa Inggris pada kurun waktu 04 Pebruari 2013 sampai dengan 31 Juli 2014,</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td align="justify"><b>Memutuskan :</b></td>
        </tr>
        <tr>
            <td class="clean" align="justify">Nama tersebut di atas di angkat sebagai INSTRUKTUR MADYA Bahasa Inggris di Quali International Surabaya dengan kurun waktu 1 (tahun) terhitung per tanggal 6 Oktober 2014 sampai dengan 5 Oktober 2015.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td class="clean" align="justify">Diwajibkan atas saudara Mustafid mengajar minimal 48 jam per minggu. Yang bersangkutan berhak menerima gaji sebesar Rp. 700.000,00 per bulan dan bonus mengajar sebesar Rp. 300.000,00 per bulan yang akan diberikan setiap tanggal 05 pada bulan berikutnya. Serta berhak mendapat makan 3x per hari, tempat tinggal dan transportasi mengajar.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td class="clean" align="justify">Demikian surat keputusan tersebut dibuat, dan dapat digunakan sebagaimana mestinya.</td>
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
                <p><u>Lili Musyafa’ah, S.Pd</u>
                    <br><small>Manager Cabang Surabaya</small></p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>