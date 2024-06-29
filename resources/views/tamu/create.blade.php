@extends('layout')

@section('content')

<section class="flex flex-col justify-center items-center gap-5">
    <h1 class="font-bold text-4xl">Tambah Tamu</h1>
    <div class="w-[30rem] h-max p-10 rounded-md shadow-md">
        <form action="{{ route('store') }}" method="POST" class="flex flex-col gap-5">
            @csrf
            <label for="nama">Nama Tamu</label>
            <input type="text" name="nama" id="" placeholder="masukan nama anda" class="border-[1px] rounded-md p-2">
            <label for="nik">NIK</label>
            <input type="number" name="nik" id="" placeholder="masukan nik anda" class="border-[1px] rounded-md p-2">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="" placeholder="masukan alamat anda" class="border-[1px] rounded-md p-2">
            <button type="submit" class="w-16 h-10 bg-gray-300 rounded-md hover:cursor-pointer hover:bg-gray-400">Submit</button>
        </form>
    </div>
</section>

@endsection