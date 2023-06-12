<head>
    <link rel="stylesheet" href="/css/chats/style.css">
    <title>chat</title>
</head>
<header>
    @include('navbar.navbar')
</header>

<div class="chat-container">
    <div class="chat-content">
        <!-- Header dengan nama pengguna -->
        <div class="chat-header">
            <div class="profile-pic-container">
                <img class="profile-pic" src="{{ asset($receiver->foto) }}" alt="">
                <span class="receiver-name">{{ $receiver->name }}</span>
            </div>
        </div><br><br>

        <!-- Menampilkan pesan-pesan -->
        <div class="chat-messages">
            @foreach ($chats as $chat)
                @if ($chat->sender_id === auth()->id() && $chat->receiver_id === $receiver->id)
                    <div class="chat-message right">
                        <div class="sender">{{ $chat->sender->name }}</div>
                        <div class="message">{{ $chat->isipesan }}</div>
                    </div>
                @elseif ($chat->receiver_id === auth()->id() && $chat->sender_id === $receiver->id)
                    <div class="chat-message left">
                        <div class="sender">{{ $chat->sender->name }}</div>
                        <div class="message">{{ $chat->isipesan }}</div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Form untuk mengirim pesan -->
        <form class="chat-form" action="{{ route('chats.store') }}" method="POST">
            @csrf
            <input type="hidden" name="sender_id" value="{{ auth()->id() }}">
            <input type="hidden" name="receiver_id" value="{{ $receiver->id }}">
            <input type="text" name="isipesan" placeholder="Ketik pesan..." autocomplete="off">
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>
