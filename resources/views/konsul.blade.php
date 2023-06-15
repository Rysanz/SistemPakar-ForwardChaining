@extends('layouts.layout')

@section('title', 'Sistem Pakar')

@section('content')
    <h1>Silahkan Jawab Pertanyaan Ini:</h1>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th><h2>Apakah Tumbuhan Hidroponik Anda Mengalami</h2></th>
            </tr>
        </thead>
        <tbody>
            @if(isset($users[0]))
                <tr>
                    <td><h2>{{ $users[0]->gejala }} ?</h2></td>
                </tr>
                <td>
                    <h4>
                        <form action="{{ url('input') }}" method="post" id="inputForm">
                            @csrf
                            <div class="br">
                            <div class="form-check" style="margin-right: 30px">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="ya">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    YA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="tidak">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Tidak
                                </label>
                            </div>
                        </div>
                            <input type="hidden" name="id_table1" value="{{ $users[0]->id_gejala}}">
                            <div class="br">
                            <button type="submit" class="btn btn-success" style="margin-top: 10px;margin-right:30px" onclick="validateForm(event)">Process</button>
                        </form>
                        <form action="{{ url('hapus') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="margin-top: 10px; display: flex;">Ulangi Pertanyaan</button>
                        </form>
                    </div>
                    </h4>
                </td>
            @endif
        </tbody>
        <script>
            function validateForm(event) {
                event.preventDefault(); // Mencegah submit form secara langsung
        
                var radios = document.getElementsByName("flexRadioDefault");
                var isChecked = false;
        
                for (var i = 0; i < radios.length; i++) {
                    if (radios[i].checked) {
                        isChecked = true;
                        break;
                    }
                }
        
                if (!isChecked) {
                    alert("Silakan pilih salah satu opsi (YA atau Tidak).");
                } else {
                    document.getElementById("inputForm").submit();
                }
            }
        </script>
    </table>
    <hr>
    <div><h1>Defisiensi Nutrisi Pada Tumbuhan Anda</h1></div>
    @if(isset($penyakit))
    <div>
        <h4>Hasil Diagnosa:</h4>
        <hr width="160px">
        <ul>
            @foreach($penyakit as $item)
                <li>{{ $item->penyakit }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
