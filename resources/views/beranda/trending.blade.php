<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menfess</title>
    <link rel="stylesheet" href="/css/beranda/style.css" />

  </head>
  <body>
    <header>
      @include('navbar.navbar')

 
    </header>
    <main>
      <div class="upload">
        @auth
        <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="isi" id="otherText" placeholder="update menfess anda">
            <label for="image" class="btn-upload">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                    <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
            </label>
            <input type="file" name="image" id="image" style="display: none;">
            <div id="image-preview"></div>
            <button type="submit">Post</button>
        </form>
        @endauth
    </div>
    
    
    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var imagePreview = document.getElementById('image-preview');
                var image = document.createElement('img');
                image.src = reader.result;
                imagePreview.innerHTML = '';
                imagePreview.appendChild(image);
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
    
    <hr class="pembatasupload">
    
        <div class="post">
            @foreach ($posts as $post)
            <div class="user-info">
              <img
                src="data:image/png;base64,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"alt="Profile Picture"
              />
              <div class="user-name">
                <h2>Anonymouse</h2>
              </div>
            </div>
            <p class="post-text">
                {{ $post->isi }}
            </p>
            @if (isset($post->image))
            <img class="post-image" src="{{ asset($post->image) }}" alt="Gambar">
            @endif
            
            <div class="post-actions"> 
              @auth
              <form action="{{ route('like', ['id' => $post->id, 'likable_type' => 'App\Models\Post']) }}" method="post">
                @csrf
                <button type="submit">
                    @if($post->likes->contains('user_id', auth()->id()))
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>{{ $post->likes()->count() }}
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>{{ $post->likes()->count() }}
                    @endif
                </button>
            </form>
              @else
              <a href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>{{ $post->likes()->count() }}</a>
              @endauth
            
              {{-- <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>{{ $post->like }}</a> --}}
              <a href="post/{{ $post->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>{{ $post->comment()->count() }}</a>
              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></a>
             
            
            </div>
            <hr>
            @endforeach
          </div>
        
      

      

    </main>
    <footer>
      {{-- <p>&copy; 2023 menfess.</p> --}}
    </footer>
  </body>
</html>
