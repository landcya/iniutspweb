@extends('layouts.layout')

@section('title', 'Contact')

@section('konten')
<div class="bg-purple-200 min-h-screen p-6">
    <h1 class="text-4xl font-bold mb-6 text-center text-purple-800">Contacts</h1>

    <div class="relative overflow-x-auto p-4 bg-purple-50 rounded-lg shadow-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-800 bg-purple-200 rounded-lg">
            <thead class="text-xs uppercase bg-purple-300">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-white">No</th>
                    <th scope="col" class="px-6 py-3 text-center text-white">Nama</th>
                    <th scope="col" class="px-6 py-3 text-center text-white">Email</th>
                    <th scope="col" class="px-6 py-3 text-center text-white">Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="bg-purple-100 border-b hover:bg-purple-300 transition-colors duration-300">
                        <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 text-center">{{ $contact['nama'] }}</td>
                        <td class="px-6 py-4 text-center">{{ $contact['email'] }}</td>
                        <td class="px-6 py-4 text-center">{{ $contact['no'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
