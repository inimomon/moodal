<form action="{{ route('insert') }}" method="POST">
    @csrf
    <input type="text" name="judul" placeholder="judul"><br>
    <input type="text" name="deskripsi" placeholder="deskripsi"><br>
    <input type="text" name="target_biaya" placeholder="target biaya kamu"><br>
    <input type="text" name="jaminan" placeholder="jaminan"><br>
    <button type="submit">Submit</button>
</form>