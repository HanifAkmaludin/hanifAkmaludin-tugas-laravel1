<div style="box-shadow: 1px 1px 5px rgba(0,0,0,.5); margin: 20px; border-radius: 20px; width: calc(100% / 5 - 40px); box-sizing: border-box; overflow: hidden">
    <div class="card-img">
        <img src="{{ $user['foto'] }}" alt="" width="100%">
    </div>
    <div class="card-deskripsi" style="padding: 20px">
        <p>{{ $user['nama'] }}</p>
        <p>{{ $user['bio'] }}</p>
        <p>{{ ($user['active']) ? "aktif" : "tidak aktif"}}</p>
        <p>{{ $user['alamat'] }}</p>
        <p>{{ $user['role'] }}</p>
    </div>
</div>