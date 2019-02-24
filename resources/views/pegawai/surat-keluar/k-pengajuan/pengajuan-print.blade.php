<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pengajuan Dana</title>
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

        table#konten, tr#konten, td#konten{
            border: 1px solid black;
            border-collapse: collapse;
        }

        .text{
            font-size: 16px;
        }

        .clean{
            text-indent: 50px;
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
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 29px" class="margin-left margin-right">
        <tr>
            <td><i>Bissmillahirrahmanirrahim.</i></td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td class="clean" align="justify">Puji Syukur kehadrat Allah yang Maha Pengasih dan Maha Penyayang, Dengan datangnya surat ini maka kami dari bagian <b>Administrasi</b> ingin mengajukan Dana sebesar <b>Rp. 200.000,.-</b> dengan rincian sebagai berikut :</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
    </table>
    {{--table konten--}}
    <table id="konten" width="84%" class="margin-left margin-right">
        <tr id="konten">
            <td id="konten" style="width: 8%;" align="center">&nbsp;<b>No</b></td>
            <td id="konten" style="width: 50%;" align="center">&nbsp;<b>Nama Barang</b></td>
            <td id="konten" style="width: 20%;" align="center">&nbsp;<b>Frek</b></td>
            <td id="konten" style="width: 37%;" align="center">&nbsp;<b>Harga</b></td>
        </tr>
        <tr>
            <td id="konten" style="width: 8%;">&nbsp;1</td>
            <td id="konten" style="width: 50%;">&nbsp;Tinta Kuning EPSON Y664</td>
            <td id="konten" style="width: 20%;" align="center">&nbsp;1 buah</td>
            <td id="konten" style="width: 37%;" align="center">&nbsp;Rp. 85.000,.-</td>
        </tr>
        <tr>
            <td id="konten" style="width: 8%;">&nbsp;2</td>
            <td id="konten" style="width: 50%;">&nbsp;Tinta Kuning EPSON Y664</td>
            <td id="konten" style="width: 20%;" align="center">&nbsp;1 buah</td>
            <td id="konten" style="width: 37%;" align="center">&nbsp;Rp. 85.000,.-</td>
        </tr>
        <tr>
            <td id="konten" style="width: 8%;">&nbsp;3</td>
            <td id="konten" style="width: 50%;">&nbsp;Tinta Kuning EPSON Y664</td>
            <td id="konten" style="width: 20%;" align="center">&nbsp;1 buah</td>
            <td id="konten" style="width: 37%;" align="center">&nbsp;Rp. 10.000,.--</td>
        </tr>
        <tr>
            <td id="konten" style="width: 8%;">&nbsp;4</td>
            <td id="konten" style="width: 50%;">&nbsp;Tinta Kuning EPSON Y664</td>
            <td id="konten" style="width: 20%;" align="center">&nbsp;</td>
            <td id="konten" style="width: 37%;" align="center">&nbsp;Rp. 10.000,.-</td>
        </tr>
        <tr>
            <td id="konten"  colspan="2">&nbsp;<b>Jumlah Total</b></td>
            <td id="konten" style="width: 20%;">&nbsp;</td>
            <td id="konten" style="width: 37%;" align="center">&nbsp;<b>Rp. 190.000,.-</b></td>
        </tr>
    </table>
    {{--penutup--}}
    <table width="84%" style="margin-top: 15px" class="margin-left margin-right">
        <tr>
            <td class="clean" align="justify">Demikian Surat ini kami sampaikan. Semoga dari pihak yang berkenan mensetujui apa yang telah kami ajukan, atas kerjasamanya kami sampaikan terimakasih.</td>
        </tr>
        <tr><td></td></tr>
    </table>
    {{--footer--}}
    <br><br><br><br><br>
    <table align="center" width="84%" class="margin-left margin-right">
        <tr>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;">Mengetahui,</td>
            <td align="center" style="width: 40%;"></td>
        </tr>
        <tr>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;"></td>
        </tr>
        <tr>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;"></td>
        </tr>
        <tr>
            <td align="center" style="width: 40%;">Bagian Administrasi</td>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;">Bagian Bendahara</td>
        </tr>
    </table>
    <br><br><br><br>
    <table align="center" width="84%" class="margin-left margin-right">
        <tr>
            <td align="center" style="width: 40%;"><b>Nizal Firmansyah</b></td>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;"><b>Firdia Qatrunnada</b></td>
        </tr>
    </table>
</div>
</body>
</html>