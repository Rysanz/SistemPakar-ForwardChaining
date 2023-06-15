@extends('layouts.layout')

@section('title', 'Sistem Pakar')

@section('content')
    <h1>Sistem Pakar Defisiensi Nutrisi Pada Tumbuhan Hidroponik</h1>
    <hr>

    <table >
        <thead>
            <tr>
                <th>Nama - Nama Zat Pada Unsur Hara Nutrisi :
                    <hr>
                </th>
            </tr>
        </thead>
        @foreach ($penyakit as $item)
        <tbody>
            <tr>
                <td>
                    {{$item->penyakit}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <hr>
@endsection
