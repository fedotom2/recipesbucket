@extends('layouts.base')

@section('content')
<article>
    <div class="s">
      <div id="tabs-1">
      	@if ($user->lastname != '')
        <h1>{{ $user->name }} {{ $user->lastname }}</h1>
        @else
        <h1>{{ $user->name }}</h1>
		@endif
        <h2>{{ $user->email }}</h2>
        <p>
        	@if ($user->about != NULL)
        	{{ $user->about }}
        	@endif
        </p>
      </div>
      <div id="tabs-2">
        <h1>Posts</h1>
      
      </div> 
      <div id="tabs-3">
        <h1>Liked</h1>
       
      </div>
      <div id="tabs-4">
        <h1>Add recipe</h1>
          <button class="button button3">Add your recipe!</button>
      </div>   
  
    </div>
    <div class="card-header">
      <img class="profile-photo" src="https://s.cdpn.io/27480/biggie.jpg">
      
    </div>
   
    <ul class="card-links" id="tabs">
      <a href="#tabs-1">
        <li>
          <i class="icon icon-user"></i><span class="label">Profile</span>
        </li>
      </a>
      <hr>
      <a href="#tabs-2">
        <li>
          <i class="icon icon-list-alt"></i><span class="label">Posts</span>
        </li>
      </a>
      <hr>
      <a href="#tabs-3">
        <li>
          <i class="icon icon-time"></i><span class="label">Liked</span>
        </li>
      </a>
      <hr>
      <a href="#tabs-4">
        <li>
          <i class="icon icon-file-text-alt"></i><span class="label">Add recipe</span>
        </li>
      </a>
      <hr>
    </ul>

</article>

<!-- Scripts -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script>
    ;(function ($) {

      const links = $('#tabs a');

      $('.s > div').hide();
      $('.s > div:first').show();
      
      links.click(function (e) {
        $('.s > div').hide();
        $(e.currentTarget.hash).show();

        e.preventDefault();
      });

    })(jQuery);
</script>
@endsection