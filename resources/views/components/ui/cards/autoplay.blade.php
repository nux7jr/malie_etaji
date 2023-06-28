<article class="auto-play" style="background-image: url({{$background}})">
  @if ($video !== '')
  <video class="auto-play__video" muted="" autoplay loop>
    <source src="{{ $video }}" type="video/mp4">
  </video>
  @endif
  <h2 class="auto-play__heading">
    {{ $title }}
  </h2>
  <a
      @if(str_contains($link, '.pdf'))
        data-modal_id="modal__cell"
        class="default__button auto-play__button"
      @else
      href="{{$link}}" class="default__button auto-play__button"
      @endif
  >
    {{ $linkText }}
  </a>
</article>
