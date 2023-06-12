<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menfess</title>
    <link rel="stylesheet" href="/css/postingan/style.css" />
  </head>
  <body>
    <header>
      @include('navbar.navbar')
  
     </header>
    <main> 
        <div class="post">
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
              <a href="/post/{{ $post->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>{{$count}}</a>
              <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></a>
            </div>
            <br>
            <hr>
            @auth
            <div class="upload">
              <form method="POST" action="{{ route('comment.store') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                  <input type="text" name="isicomment" id="otherText" placeholder="komentar">
                  
                  <div id="image-preview"></div>
                  <button type="submit">Post</button>
              </form>
          </div>
          
            @endauth
           

            @foreach ($comments as $comment)
            <div class="comment">
              @if (isset($comment->user->foto))
              <img class="profile-pic" src="{{ asset($comment->user->foto) }}" alt="">
              @else
              <img class="profile-pic" src="data:image/jpeg;base64,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" alt="">
              @endif
              <div class="comment-content">
                <a href="/profile/{{ $comment->user->username }}"><p class="user-name">{{ $comment->user->name }}</p></a>
                <p class="comment-text">{{ $comment->isicomment }}</p>
              </div>
            </div>
            
        @endforeach
            <hr>
          </div>
        
      

      

    </main>
    <footer>
      {{-- <p>&copy; 2023 Social Media. All rights reserved.</p> --}}
    </footer>
  </body>
</html>
