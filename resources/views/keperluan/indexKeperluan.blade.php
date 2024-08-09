@extends('layout')

@section('content')


<section class="flex flex-col gap-10 p-10">
    <h1 class="text-4xl font-bold">{{ $dataTamu->nama }}</h1>
    <div class="flex flex-col gap-2">
        <label for="keperluan">keperluan</label>
        <div class="flex flex-row gap-10">
            @foreach($data as $tamu)
            <div class="flex flex-row gap-5">
                <div class="w-[40rem] h-max rounded-md border">
                    <p class="p-1">{{ $tamu->keperluan }}</p>
                </div>
                <div class="mt-2">
                    <a href="">
                        <button>delete</button>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="ml-5">
                <button type="submit">
                    <a href="{{ route('create', $tamu->id) }}">
                        <p class="text-3xl font-bold">+</p>
                    </a>
                </button>
            </div>
        </div>
    </div>    
</section>


@endsection