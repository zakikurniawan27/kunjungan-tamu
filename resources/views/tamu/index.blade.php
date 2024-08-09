@extends('layout')

@section('content')

<section class="flex justify-start mt-10">
    <div class="bg-white">
        <div class="p-10 flex justify-end">
            <a href="/create">
                <button class="w-16 h-10 rounded-md bg-gray-300 hover:cursor-pointer hover:bg-gray-400">
                    Tambah
                </button>
            </a>
        </div>
        <table>
            <thead>
                <th>Nama Tamu</th>
                <th>NIK</th>
                <th>Alamat</th>
            </thead>
            <tbody>
                @foreach($data as $tamu)
                <tr>
                    <td class="px-44">{{ $tamu->nama }}</td>
                    <td class="px-44">{{ $tamu->nik }}</td>
                    <td class="px-44">{{ $tamu->alamat }}</td>
                    <td class="px-20">
                        <a href="{{ route('show', $tamu->id) }}">
                            <button class="w-16 h-10 bg-red-600 rounded-md text-white hover:cursor-pointer hover:bg-red-700">Button</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection