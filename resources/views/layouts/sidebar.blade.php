<aside class="col-md-4 blog-sidebar">
  <div class="p-3 mb-3 bg-light rounded">
    <h4 class="font-italic">About</h4>
    <p class="mb-0">Trying out Laravel</p>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Archives</h4>
    <ol class="list-unstyled mb-0">
      @foreach($archives as $stats)
        <li>
          <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }} "> 
            {{ $stats['month'] . ' ' . $stats['year'] }}
            </a>
        </li>
      @endforeach
    </ol>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="http://www.github.com">GitHub</a></li>
      <li><a href="http://www.twitter.com">Twitter</a></li>
      <li><a href="http://www.facebook.com">Facebook</a></li>
    </ol>
  </div>
</aside><!-- /.blog-sidebar - ->

