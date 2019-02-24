<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pemberitahuan</title>
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
            margin-top: 127px
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

        .text{
            font-family: Calibri;
            font-size: 14px;
        }

        .clean{
            text-indent: 30px;
        }

    </style>

</head>
<body class="bg">
<div class="text">
    <table width="100%" class="margin-left margin-top margin-right">
        <tr>
            <td align="left" style="width: 40%;">
                <table>
                    <tr style="font-family: Calibri">
                        <td>Nomor</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>{{$data->no_surat}}{{$data->kode_surat}}</td>
                    </tr>
                    <tr style="font-family: Calibri">
                        <td>Lampiran</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>&nbsp;-</td>
                    </tr>
                    <tr style="font-family: Calibri">
                        <td>Perihal</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>{{$data->perihal}}</td>
                    </tr>
                </table>
            </td>
            <td align="center">
            </td>
            <td align="left" style="width: 40%;">
                {{$data->tempat}}, {{$data->tgl_dicaat}}
            </td>
        </tr>
    </table>
    {{--pembukaan--}}
    <table width="100%" style="margin-top: 23px" class="margin-left margin-right">
        <tr>
            <td>Kepada Yth,</td>
        </tr>
        <tr>
            <td>Bapak/ibu orang tua murid dari : <b>{{$data->nama_peserta}}</b></td>
        </tr>
        <tr>
            <td>Di tempat,</td>
        </tr>
    </table>
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 29px" class="margin-left margin-right">
        <tr>
            <td><i>Bissmillahirrahmanirrahim.</i></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td><i>Asssalamu’alaikum warrahmatullahi wabrakatuh.</i><br></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td class="clean" align="justify">Segala puji bagi Allah Rabb semesta alam, yang memberikan rahmat serta hidayahnya sehingga sampai saat ini kita masih diberikan umur yang cukup beserta nikmat yang lainnya. Sholawat serta salam semoga tetap tercurahkan kepada junjungan kita, Nabiyullah Muhammad shallallahu ‘alaihi wassalam, beserta keluarga, sahabat, dan seluruh umat sampai akhir zaman.</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td class="clean" align="justify">Dengan datangnya surat ini kepada orang tua murid, dari kami pihak manajemen Lembaga Pendidikan Bahasa Inggris Quali International Surabaya (QIS) berdasarkan hasil rapat pada hari, tanggal <b>Senin, 23 Oktober 2017</b> memutuskan bahwa :</td>
        </tr>
    </table>
    {{--table konten--}}
    <table id="konten" width="60%" class="margin-left margin-right">
        <tr id="konten">
            <td id="konten" style="width: 25%;">Nama Lengkap</td>
            <td id="konten" style="width: 10%;">&nbsp;:</td>
            <td id="konten" style="width: 65%;">{{$data->nama_peserta}}</td>
        </tr>
        <tr style="width: 40%">
            <td id="konten" style="width: 25%;">Asal</td>
            <td id="konten" style="width: 10%;">&nbsp;:</td>
            <td id="konten" style="width: 65%;">Bandung, Jawa Barat.</td>
        </tr>
    </table>
    {{--penutup--}}
    <table width="84%" style="margin-top: 15px" class="margin-left margin-right">
        <tr>
            <td class="clean" align="justify">Diberikan kesempatan untuk kembali mengikuti Pendidikan instruktur di Lembaga Pendidikan Bahasa Inggris Quali International Surabaya (QIS), dengan persyaratan yang harus dipenuhi sebagai berikut :</td>
        </tr>
        <tr>
            <td align="justify"><ol>
                    <li>Tidak diperkenankan untuk membawa & menggunakan alat komunikasi (hp/gadget) selama masa pendidikan berlangsung.</li>
                    <li>Tidak diperkenankan untuk membawa atau mengakses ATM selama masa pendidikan berlangsung.</li>
                    <li>Diharuskan meminta izin terlebih dahulu sebelum menggunakan sarana & prasarana lembaga.</li>
                    <li>Sanggup mentaati segala peraturan yang berlaku di Lembaga Pendidikan Bahasa Inggris Quali International Surabaya (QIS).</li>
                    <li>Diharapkan bisa kembali ke tempat Pendidikan selambat lambatnya pada hari ahad, tanggal 29 Oktober, pukul : 18.00 WIB. Dengan tidak diantarkan oleh orang tua murid.</li>
                </ol></td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td class="clean" align="justify">Sehubungan dengan pentingnya surat ini, kami harap bisa dilakukan dengan sebaik sebaiknya. Demikian surat ini kami sampaikan, kurang lebihnya kami mohon maaf. Kami ucapkan terimakasih.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td><i>Wasssalamua’alaikum warrahmatullahi wabarakatuh.</i></td>
        </tr>
    </table>
    {{--footer--}}
    <br>
    <table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;"></td>
            <td align="center"></td>
            <td align="center" style="width: 40%;">
                Manager Operational <br>Quali International Surabaya (QIS)
            </td>
        </tr>
    </table>
    <br><br><br><br><br>
    <table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;"></td>
            <td align="center"></td>
            <td align="center" style="width: 40%;">
                <b>Ahmad Mustafid</b>
            </td>
        </tr>
    </table>
</div>
</body>
</html>