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
      @if(empty($link))
         data-modal_id="modal_id"
      @endif
      href="{{$link}}" class="default__button auto-play__button"
  >
    {{ $linkText }}
  </a>
</article>
