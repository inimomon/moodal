<h1 class="text-2xl font-bold">Good morning, {{ $user }}!</h1>
<br>
@foreach($data as $d)
<div class="mb-10">
    <h1>{{$d->judul_usaha}}</h1>
    <h1>{{$d->deskripsi_usaha}}</h1>
    <h1>{{$d->target_biaya}}</h1>
    <h1>{{$d->biaya}}</h1>
    <h1>{{$d->jaminan}}</h1>
    <h1>{{$d->tenggat}}</h1>
    <a href="detail/{{ $d->id }}">Detail</a>
</div>
@endforeach