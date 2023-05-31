@extends('admin.layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total User Customer: </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $customerCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people-fill fa-3x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total User Admin: </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $adminCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person-fill fa-3x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection