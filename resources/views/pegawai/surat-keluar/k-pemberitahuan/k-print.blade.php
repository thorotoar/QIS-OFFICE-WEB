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

        .clean{
            text-align: justify;
            text-indent: 30px;
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
                        <td>{{$sKeluar->no_surat}}{{$sKeluar->kode_surat}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="font-family: Calibri">
                        <td>Perihal</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>{{$sKeluar->perihal}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="font-family: Calibri">
                        <td>Lampiran</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>{{$sKeluar->lampiran}}</td>
                    </tr>
                </table>
            </td>
            <td align="center">
            </td>
            <td align="left" style="width: 40%;">
                {{$sKeluar->tempat}}, {{$sKeluar->tgl_dicatat}}
            </td>
        </tr>
    </table>
    {{--pembukaan--}}
    <table width="100%" style="margin-top: 36px" class="margin-left margin-right">
        <tr>
            <td>Yth.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td>Bapak / Ibu/ Wali Murid</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td><b>{{$iKeluar->nama_peserta}}</b></td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td>Dengan hormat,</td>
        </tr>
    </table>
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 30px" class="margin-left margin-right">
        <tr>
            <td class="clean">Sehubungan dengan beredarnya surat ini, kami dari Quali International Surabaya memberitahukan bahwa Ananda <b>{{$iKeluar->nama_peserta}}</b> telah melalui program pendidikan Bahasa Inggris di tempat kami Kampung Inggris Surabaya dengan mengambil {{$iKeluar->jumlah_program}} kali program.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td class="clean">Program kami yakni @if($kKeluar >= 1)
                    @php
                        $a = count($kKeluar) -1;
                        $b = count($kKeluar);
                    foreach( $kKeluar as $index => $keluars){
                        if ($a == $index){
                        echo "<b>dan</b>";
                        }
                        echo "<b>". " " . $a . " " .$keluars['jenis_program'] . "</b>,";
                    }
                    @endphp
                @elseif($kKeluar == 1)
                    <b>{{$kKeluar['jenis_program']}}</b>
                @endif yang berlangsung selama
                @if($kKeluar >= 1)
                    @php
                        $a = count($kKeluar) -1;
                    foreach( $kKeluar as $index => $keluars){
                        if ($a === $index){
                        echo "dan";
                        }
                        echo $a. " " .$keluars['lama_program'] . " ";
                    }
                    @endphp
                @elseif($kKeluar == 1)
                    {{$kKeluar['lama_program']}}
                @endif. Di dalam pembelajaran telah diselenggarakan evalusi berupa <b>Maju Di Setiap Pembelajaran</b>. Berdasarkan hasil evaluasi Ananda cukup mampu dalam penggunaan grammar, conversation, comprehension.</td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td class="clean"><p>Demikian surat ini kami sampaikan. Atas perhatian bapak / Ibu/ Saudara wali murid peserta didik Kampung Inggris Surabaya. Kami ucapkan terimakasih banyak.</p></td>
        </tr>
    </table>
    {{--footer--}}
    <br><br><br>
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
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 40%;"></td>
        </tr>
        <tr>
            <td align="center" style="width: 60%;">Bagian Pengajaran</td>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 60%;">Instruktur Kelas</td>
        </tr>
    </table>
    <br><br><br><br>
    <table align="center" width="84%" class="margin-left margin-right">
        <tr>
            <td align="center" style="width: 60%;"><b><u><b>{{$pengajaran->nama}}</b></u></b></td>
            <td align="center" style="width: 40%;"></td>
            <td align="center" style="width: 60%;"><u><b>{{$iKeluar->instruktur}}</b></u></td>
        </tr>
    </table>
</div>
</body>
</html>