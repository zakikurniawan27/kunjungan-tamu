@extends('layout')

@section('content')

<section class="flex flex-col justify-center items-center gap-10">
    <h1 class="text-4xl font-bold">Tambah Keperluan</h1>
    <div>
    <div class="w-[30rem] h-max p-10 rounded-md shadow-md">
        @foreach($data as $tamu)
        <form action="{{ route('storeKeperluan', $tamu->kunjungan_id) }}" method="POST" class="flex flex-col gap-5">
            @csrf
            <label for="nama">Keperluan</label>
            <input type="text" name="nama" id="" placeholder="masukan keperluan anda" class="border-[1px] rounded-md p-2">
            <button type="submit" class="w-16 h-10 bg-gray-300 rounded-md hover:cursor-pointer hover:bg-gray-400">Submit</button>
        </form>
        @endforeach
    </div>
    </div>
</section>

@endsection