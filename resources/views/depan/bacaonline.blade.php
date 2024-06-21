<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$buku->judul_buku}}</title>

    <style>
        body {
            margin: 0;
            /* Reset default margin */
        }

        iframe {
            display: block;
            /* iframes are inline by default */
            background: #000;
            border: none;
            /* Reset default border */
            height: 100vh;
            /* Viewport-relative units */
            width: 100vw;
        }
    </style>
</head>

<body>


    {{-- <embed src="{{ Storage::url($buku->pdf_buku) }}" width="100%" height="800px" alt="pdf" type="application/pdf"
        pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"> --}}
    {{-- @dd(asset('/laraview/#../'.$buku->pdf_buku) ); --}}
    {{-- @dd(asset('/laraview/#../pdf/izinpt.pdf')); --}}

    <iframe src="{{ asset('/laraview/#../'.$buku->pdf_buku) }}" frameborder="0" width="100%" height="100%"></iframe>

</body>



</html>