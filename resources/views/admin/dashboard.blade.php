
@extends('layouts.admin')

@section('title', 'Dashboard')
@section('subtitle', 'Selamat Datang di Halaman Admin SiPerdu')

@section('content')

<div class="row g-4 dashboard-statistics">

    <!-- Card Total Buku -->
    <div class="col-md-4">
        <div class="dashboard-stat-card">
            <div>
                <h6>Total Buku</h6>
                <h3>1,245</h3>
            </div>
            <i class="bi bi-book text-primary"></i>
        </div>
    </div>

    <!-- Card Buku Tersedia -->
    <div class="col-md-4">
        <div class="dashboard-stat-card">
            <div>
                <h6>Buku Tersedia</h6>
                <h3>1,024</h3>
            </div>
            <i class="bi bi-check-circle text-success"></i>
        </div>
    </div>

    <!-- Card Buku Habis -->
    <div class="col-md-4">
        <div class="dashboard-stat-card">
            <div>
                <h6>Buku Habis</h6>
                <h3>221</h3>
            </div>
            <i class="bi bi-x-circle text-danger"></i>
        </div>
    </div>

    <!-- Card Peminjaman -->
    <div class="col-md-4">
        <div class="dashboard-stat-card">
            <div>
                <h6>Peminjaman Hari Ini</h6>
                <h3>56</h3>
            </div>
            <i class="bi bi-clock-history text-warning"></i>
        </div>
    </div>

</div>

@endsection
