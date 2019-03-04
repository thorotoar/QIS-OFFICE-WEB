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
            margin-top: 121px
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

        table#konten, tr#konten, td#konten{
            border: 1px solid black;
            border-collapse: collapse;
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
                    <tr style="font-family: Calibri">
                        <td>Perihal</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>{{$sKeluar->perihal}}</td>
                    </tr>
                    <tr style="font-family: Calibri">
                        <td>Lampiran</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                        <td>@if($sKeluar->laprian == null)
                                &nbsp;-
                            @endif
                            {{$sKeluar->lampiran}}</td>
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
    <table width="100%" style="margin-top: 15px" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 100%;">
                <table>
                    <tr>
                        <td><b>Kepada</b></td>
                        <td>&nbsp;<b>:</b></td>
                        <td><b>Yth. {{$sKeluar->bagian_tujuan}} <br>{{$sKeluar->tujuan}}</b></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{{$sKeluar->alamat_tujuan}}</td>
                    </tr>
                </table>
            </td>
            <td align="center">
            </td>
            <td align="left">
            </td>
        </tr>
    </table>
    {{--isi dan penutup--}}
    <table width="84%" style="margin-top: 35px" class="margin-left margin-right">
        <tr>
            <td><b>Dengan hormat</b><br></td>
        </tr>
        <tr>
            <td class="clean"><p>Bersama surat ini, kami memberitahukan bahwa berdasarkan surat Perjanjian Kerjasama No 03/QI - SBY/IX/2014 antara Quali International Surabaya dan Stikes Muhammadiyah Lamongan, kami mengingatkan kepada {{$sKeluar->tujuan}} untuk menyelesaikan kekurangan biaya program pembelajaran Bahasa Inggris Komunitas.</p>
            </td>
        </tr>
        <tr>
            <td class="clean">Adapun biaya yang harus diselesaikan adalah biaya program sebesar @ Rp {{number_format ( $iKeluar->besar_biyaya, 2, ",", ".")}}
                dengan peserta sebanyak {{$iKeluar->jumlah_peserta}} peserta, maka :
            </td>
        </tr>
    </table>
    {{--table konten--}}
    <table id="konten" width="84%" class="margin-left margin-right">
        <tr id="konten">
            <td id="konten" style="width: 50%;">&nbsp;Biaya Program</td>
            <td id="konten" style="width: 50%;">&nbsp;Peserta</td>
            <td id="konten" style="width: 50%;">&nbsp;Jumlah</td>
        </tr>
        <tr>
            <td id="konten" style="width: 50%;">&nbsp;Rp {{number_format ( $iKeluar->besar_biyaya, 0, ",", ".")}},-</td>
            <td id="konten" style="width: 50%;">&nbsp;{{$iKeluar->deskripsi_peserta}}</td>
            <td id="konten" style="width: 50%;">&nbsp;Rp {{number_format ($total, 0, ",", ".")}},-</td>
        </tr>
    </table>
    {{--penutup--}}
    <table width="84%" class="margin-left margin-right">
        <tr>
            <td><b>Terbilang : {{\App\Helpers\Terbilang::terbilang($total)}} Rupiah.</b><br></td>
        </tr>
        <tr>
            <td class="clean"><p>Pembayaran mohon dilakukan selambat-lambatnya pada hari Senin tanggal 29 September 2014 melalui transfer antar bank ke nomor rekening BRI : 0096-01-065791-50-4 an. Lili Musyafa’ah.</p></td>
        </tr>
        <tr>
            <td class="clean">Demikian surat ini kami buat, bila ada pertanyaan ataupun hal lain yang ingin didiskusikan lebih lanjut untuk kejelasan maksud dalam surat penagihan ini mohon dapat menghubungi ibu Lili di 081228175957 atau di 081575236609 atas perhatiannya kami ucapkan banyak terima kasih.</td>
        </tr>
    </table>
    {{--footer--}}
    <br><br><br><table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 40%;">
                <b>Hormat Kami</b>
            </td>
            <td align="center">
            </td>
            <td align="left" style="width: 40%;">
            </td>
        </tr>
    </table>
    <br><br><br>
    <table width="84%" class="margin-left margin-right">
        <tr>
            <td align="left" style="width: 100%;">
                <p><u><b>Lili Musyafa’ah, S.Pd</b></u>
                    <br><small>Manajer Cabang Quali International-Surabaya</small></p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>