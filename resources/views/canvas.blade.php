@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="padding-top:10%; padding-bottom:10%;">
        <div class="row justify-content-center">
            <div class="canvas position-relative" style="background-image: url({{ asset('images/mistore.png') }}); background-size:cover; height:50vh; width:40vw;">
               @for($i = 0; $i <9; $i++)
                <img class="peace-{{ $i }}" style="box-shadow: black" src="" alt="">
                   @endfor
            </div>
        </div>
    </div>


@push('scripts')
    <script>
        // $('.canvas').on('click', function () {
            var image = new Image();
            image.onload = cutImageUp;
            image.src = '{{ asset('images/mistore.png') }}';
            // console.log(image);
            function cutImageUp() {
                var imagePieces = [];
                for(var x = 0; x < 3; x++) {
                    for(var y = 0; y < 3; ++y) {
                        var canvas = document.createElement('canvas');
                        canvas.width = 100;
                        canvas.height = 100;
                        var context = canvas.getContext('2d');
                        context.drawImage(image, x * 100, y * 100, 100, 100, 0, 0, canvas.width, canvas.height);
                        imagePieces.push(canvas.toDataURL());
                    }
                }
                // imagePieces now contains data urls of all the pieces of the image
                // load one piece onto the page
                // var anImageElement = document.getElementById('first-peace');
                // var anImageElement2 = document.getElementById('second-peace');
                // var anImageElement3 = document.getElementById('third-peace');
                // anImageElement.src = imagePieces[0];
                // anImageElement2.src = imagePieces[1];
                // anImageElement3.src = imagePieces[2];
                console.log(imagePieces.length);
                for (let i = 0; i < imagePieces.length; i++)
                {
                    console.log(i);
                    $('.peace-' + i).src = imagePieces[0];
                }
            }
        // })

    </script>
@endpush
@endsection