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
            background-image: url("/images/kop/kop_qis.png");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .margin-top{
            margin-top: 147px
        }

        .margin-left{
            margin-left: 72px;
        }

        .margin-right{
            margin-right: 20px;
        }

        @font-face{
            font-family: Calibri;
        }

        .text{
            font-family: Calibri;
            font-size: 12px;
        }

    </style>

</head>
<body class="bg">
<div>
    <table width="100%" class="margin-left margin-top margin-right">
        <tr>
            <td align="left" style="width: 40%;">
                <table>
                    <tr style="font-family: Calibri">
                        <td>Nomor</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>{{$data->no_surat}}{{$data->kode_surat}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
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
    <table width="100%" style="margin-top: 36px" class="margin-left margin-right">
        <tr>
            <td>Yth.</td>
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
            <td>Bapak / Ibu/ Wali Murid</td>
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
            <td><b>{{$data->nama_peserta}}</b></td>
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
            <td>Dengan hormat,</td>
        </tr>
    </table>
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 30px" class="margin-left margin-right">
        <tr>
            <td><p>Sehubungan dengan beredarnya surat ini, kami dari Quali International Surabaya memberitahukan bahwa Ananda <b>{{$data->nama_peserta}}</b> telah melalui program pendidikan Bahasa Inggris di tempat kami Kampung Inggris Surabaya dengan mengambil 1 kali program.</p></td>
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
            <td><p>Program kami yakni <b>Flash Fun For Kids</b> yang berlangsung selama 2 bulan 24 kali pertemuan. Di dalam pembelajaran telah diselenggarakan evalusi berupa Maju Di Setiap Pembelajaran. Berdasarkan hasil evaluasi Ananda cukup mampu dalam penggunaan grammar, conversation, comprehension.</p></td>
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
            <td><p>Demikian surat ini kami sampaikan. Atas perhatian bapak / Ibu/ Saudara wali murid peserta didik Kampung Inggris Surabaya. Kami ucapkan terimakasih banyak.</p></td>
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
            <td></td>
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
            <td></td>
        </tr>
        <tr>
            <td><p>Mengetahui,</p></td>
        </tr>
    </table>
    {{--footer--}}
    <table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;">
                Bagian Pengajaran
            </td>
            <td align="center">
            </td>
            <td align="left" style="width: 40%;">
                Instruktur Kelas
            </td>
        </tr>
    </table>
    <br><br><br><br><br>
    <table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;">
                <u><b>Farah Nur Jihan</b></u>
            </td>
            <td align="center">
            </td>
            <td align="left" style="width: 40%;">
                <u><b>Khoerun Nikmah</b></u>
            </td>
        </tr>
    </table>
</div>
</body>
</html>