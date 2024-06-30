<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>
    <link rel="stylesheet" href="/home.css">
    <title>Home</title>
</head>
<body>
    <h1>Main Comics List</h1>
<div class="container">

    <div class="embla">
        <div class="embla__viewport">
            <div class="embla__container">
                @foreach ($store as $comic)        
                    <div class="embla__slide">
                        <div class="text_box">
                            <p>{{ $comic["title"] }}</p>
                            <a href="/about">Description</a>
                        </div>
                        <div class="thumb_box">
                            <img src= {{$comic["thumb"]}} >
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="embla__prev">Prev</button>
        <button class="embla__next">Next</button>
      </div>
</div>


      <script type="text/javascript">
        const emblaNode = document.querySelector('.embla')
        const options = { loop: false }
        const plugins = [EmblaCarouselAutoplay({ delay: 5000 })]
        const emblaApi = EmblaCarousel(emblaNode, options, plugins)

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