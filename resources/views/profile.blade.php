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

        <button id="edit_btn">Edit profile</button>
        <form action="{{ route('profileEdit') }}" method="post" id="edit_form">
          {{ csrf_field() }}
          <input type="text" name="name" placeholder="Name" value="{{ $user->name }}"><br>
          <input type="text" name="lastname" placeholder="Lastname" value="{{ $user->lastname }}"><br>
          <textarea name="about" placeholder="About">{{ $user->about }}</textarea><br>
          <input type="submit">
        </form>
      </div>
      <div id="tabs-2">
        <h1>Posts</h1>
      
      </div> 
      <div id="tabs-3">
        <h1>Liked</h1>
       
      </div>
      <div id="tabs-4">
        <h1>Add recipe</h1>
          <button class="button button3" id="addRecipe_btn">Add your recipe!</button>
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

      /* Tabs */
      const links = $('#tabs a');

      $('.s > div').hide();
      $('.s > div:first').show();
      
      links.click(function (e) {
        $('.s > div').hide();
        $(e.currentTarget.hash).show();

        e.preventDefault();
      });

      /* Edit profile */
      const edit_form = $('#edit_form');
      edit_form.hide();

      const edit_btn = $('#edit_btn');
      edit_btn.click(function (e) {
        edit_form.show();
        e.preventDefault();
      });

      /* Add recipe */
      const addRecipe_btn = $('#addRecipe_btn');
      addRecipe_btn.click(function(e) {
        document.location.href = '/recipe/add';
        e.preventDefault();
      });

    })(jQuery);
</script>
@endsection