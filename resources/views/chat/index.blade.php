
<head>
    <link rel="stylesheet" href="/css/chats/style.css">
</head>


<div class="chat-container">
    <div class="sidebar">
        <div class="sidebar-header">User Lain</div>
        @php
            $userNames = [];
        @endphp
        @foreach ($chats as $chat)
            @if ($chat->sender_id !== auth()->id() && !in_array($chat->sender->name, $userNames))
                @php
                    $userNames[] = $chat->sender->name;
                @endphp
                <div class="sidebar-user">
                    <img src="https://source.unsplash.com/500x400/?cartoon" alt="Profile Picture">
                    <a href="{{ route('chats.index', $chat->sender->username) }}">{{ $chat->sender->name }}</a>
                </div>
            @endif
            @if ($chat->receiver_id !== auth()->id() && !in_array($chat->receiver->name, $userNames))
                @php
                    $userNames[] = $chat->receiver->name;
                @endphp
                <div class="sidebar-user">
                    <img src="https://source.unsplash.com/500x400/?cartoon" alt="Profile Picture">
                    <a href="{{ route('chats.index', $chat->receiver->username) }}">{{ $chat->receiver->name }}</a>
                </div>
            @endif
        @endforeach
        @if (empty($userNames))
            <div class="sidebar-user">
                Tidak ada pengguna lain.
            </div>
        @endif
    </div>

    <div class="chat-content">
        <!-- Header dengan nama pengguna -->
        <div class="chat-header">
            Chat dengan: {{ $receiver->name }}
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
