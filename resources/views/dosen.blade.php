
@extends('layout.template')

@section('title')
    Dosen Page
@endsection
@section('content')
<div>
    <center style="margin-top: 100px"><h1>Meet Our Teacher</h1></center>
</div>   
    <div>
        <center style="margin-top: 20px">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum ullam sed est recusandae dicta nisi omnis delectus illo impedit ipsum reiciendis ipsa consequatur similique porro, aliquid asperiores quae sapiente iste.</p>
        </center>
    </div>

    <div>
        @if ($MataKuliah == 'Web Programming')
        <div>
            <h2>Dosen Web Programming</h2>
            <h3>Nama: <?php echo $nama ?></h3>
            <h3>Kode Dosen:<?php echo  $KodeDosen ?></h3>
        </div>            
        @else
            Dosen Web Programming tidak ada
        @endif
    </div>
@endsection
