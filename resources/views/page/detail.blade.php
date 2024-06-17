<div class="h-screen w-full mb-10 fixed">
    <div class="absolute h-full w-full hidden justify-center items-center" id="modal">
        <div class="h-4/5 w-4/5 bg-gray-400 grid grid-rows-10">

            <div class="row-span-1 flex justify-between items-center mx-2">
                <div></div>
                <h1 class="text-2xl font-bold">Beri Modal</h1>
                <div>
                    <button id="close" class="text-xl font-bold">X</button>
                </div>
            </div>

            <div class="row-span-9 p-2">
                <form action="{{ route('kasihModal') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <input type="text" name="biaya" placeholder="Beri jumlah biaya modal.."><br><br>
                    <button class="p-2 bg-red-200" type="submit">Kasih Modal</button>
                </form>
            </div>

        </div>
    </div>
    <div>
        <h1>{{$data->user_id}}</h1>
        <h1>{{$data->judul_usaha}}</h1>
        <h1>{{$data->deskripsi_usaha}}</h1>
        <h1>{{$data->target_biaya}}</h1>
        <h1>{{$data->biaya}}</h1>
        <h1>{{$data->jaminan}}</h1>
        <h1>{{$data->tenggat}}</h1>
        <h1>{{$data->pemodal}}</h1>
        <h1>{{$data->jumlah_modal}}</h1>
        <button id="modalBtn">Beri Modal</button>
    </div>
</div>

<script>
    var modal_button = document.getElementById("modalBtn");
    var close_button = document.getElementById("close");
    var modal = document.getElementById("modal");

    modal_button.addEventListener('click', function() {
        modal.style.display = 'flex';
    });

    close_button.addEventListener('click', function() {
        modal.style.display = 'none';
    })
</script>