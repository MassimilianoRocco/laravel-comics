<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>

    <title>Home</title>
</head>
<body>

@include('partials.header')

<div class="container">
    <div class="embla">
        <div class="embla__viewport">
            <div class="embla__container">
                @foreach ($store as $comic)        
                    <div class="embla__slide">
                        <div class="text_box">
                            <p>{{ $comic["title"] }}</p>
                        </div>
                        <div class="thumb_box">
                            <img src= {{$comic["thumb"]}} >
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="buttons_box">
            <button class="embla__prev">Prev</button>
            <button class="embla__next">Next</button>
        </div>
      </div>
</div>


      <script type="text/javascript">
        const emblaNode = document.querySelector('.embla')
        const options = { loop: false }
        const emblaApi = EmblaCarousel(emblaNode, options)

        const viewportNode = emblaNode.querySelector('.embla__viewport')

        // Grab button nodes
        const prevButtonNode = emblaNode.querySelector('.embla__prev')
        const nextButtonNode = emblaNode.querySelector('.embla__next')

        const embla = EmblaCarousel(viewportNode)
        prevButtonNode.addEventListener('click', embla.scrollPrev, false)
        nextButtonNode.addEventListener('click', embla.scrollNext, false)
      </script>
</body>
</html>