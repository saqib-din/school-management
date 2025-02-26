@extends('layouts.master')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Student Fees</a></li>
                                <li class="breadcrumb-item" aria-current="page">List</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xxl-8">
                    <div class="row g-3 mb-3">
                        <div class="col-md-6 col-lg-4">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="mb-2 d-flex align-items-center justify-content-between gap-1">
                                        <h6 class="mb-0">Total</h6>
                                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                            <svg class="pc-icon text-success wid-15 hei-15">
                                                <use xlink:href="#custom-arrow-up"></use>
                                            </svg>
                                            70.5%
                                        </p>
                                    </div>
                                    <div class="row g-2 align-items-center">
                                        <div class="col-6">
                                            <h5 class="mb-2 mt-3">$7,825</h5>
                                            <div class="d-flex align-items-center gap-1">
                                                <h5 class="mb-0">9</h5>
                                                <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div id="total-invoice-1-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="d-flex mb-2 align-items-center justify-content-between gap-1">
                                        <h6 class="mb-0">Paid</h6>
                                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                            <svg class="pc-icon text-warning wid-15 hei-15">
                                                <use xlink:href="#custom-arrow-down"></use>
                                            </svg>
                                            -8.73%
                                        </p>
                                    </div>
                                    <div class="row g-2 align-items-center">
                                        <div class="col-6">
                                            <h5 class="mb-2 mt-3">£5678.09</h5>
                                            <div class="d-flex align-items-center gap-1">
                                                <h5 class="mb-0">5</h5>
                                                <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div id="total-invoice-2-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="mb-2 d-flex align-items-center justify-content-between gap-1">
                                        <h6 class="mb-0">Overdue</h6>
                                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                            <svg class="pc-icon text-danger wid-15 hei-15">
                                                <use xlink:href="#custom-arrow-down"></use>
                                            </svg>
                                            -4.73%
                                        </p>
                                    </div>
                                    <div class="row g-2 align-items-center">
                                        <div class="col-6">
                                            <h5 class="mb-2 mt-3">£5678.09</h5>
                                            <div class="d-flex align-items-center gap-1">
                                                <h5 class="mb-0">5</h5>
                                                <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div id="total-invoice-3-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avtar bg-white bg-opacity-10 text-white">
                                        <i class="ph-duotone ph-user-plus f-22"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-white mb-1 d-flex align-items-center gap-2">Total Recievables <i
                                            data-feather="alert-circle"></i></p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="text-white mb-0 d-flex align-items-center gap-2">Current <span
                                                class="fw-medium f-16">109.1k</span> </p>
                                        <p class="text-white mb-0 d-flex align-items-center gap-2">Overdue <span
                                                class="fw-medium f-16">62k</span> </p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-white mt-3 mb-1">$43,078</h4>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-3">
                                    <div class="progress bg-light-warning" style="height: 7px">
                                        <div class="progress-bar bg-warning" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 text-end wid-30">
                                    <p class="text-white mb-0">90%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs invoice-tab border-bottom mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="analytics-tab-1" data-bs-toggle="tab"
                                        data-bs-target="#analytics-tab-1-pane" type="button" role="tab"
                                        aria-controls="analytics-tab-1-pane" aria-selected="true">
                                        <span class="d-flex align-items-center gap-2">All <span
                                                class="avtar rounded-circle bg-light-primary">5</span></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="analytics-tab-2" data-bs-toggle="tab"
                                        data-bs-target="#analytics-tab-2-pane" type="button" role="tab"
                                        aria-controls="analytics-tab-2-pane" aria-selected="false">
                                        <span class="d-flex align-items-center gap-2">Paid <span
                                                class="avtar rounded-circle bg-light-success">2</span></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="analytics-tab-3" data-bs-toggle="tab"
                                        data-bs-target="#analytics-tab-3-pane" type="button" role="tab"
                                        aria-controls="analytics-tab-3-pane" aria-selected="false">
                                        <span class="d-flex align-items-center gap-2">Unpaid <span
                                                class="avtar rounded-circle bg-light-warning">2</span></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="analytics-tab-4" data-bs-toggle="tab"
                                        data-bs-target="#analytics-tab-4-pane" type="button" role="tab"
                                        aria-controls="analytics-tab-4-pane" aria-selected="false">
                                        <span class="d-flex align-items-center gap-2">Cancelled <span
                                                class="avtar rounded-circle bg-light-danger">1</span></span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                                    aria-labelledby="analytics-tab-1" tabindex="0">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="pc-dt-simple-1">
                                            <thead>
                                                <tr>
                                                    <th>Invoice Id</th>
                                                    <th>Student Name</th>
                                                    <th>Date</th>
                                                    <th>Payment Type</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-5.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Saqib Din</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>cash</td>
                                                    <td>275$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-9.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>cheque</td>
                                                    <td>290$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-10.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Liana Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>330$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-1.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>cash</td>
                                                    <td>260$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-2.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>230$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-3.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>cheque</td>
                                                    <td>350$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-4.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>cash</td>
                                                    <td>270$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-7.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>cheque</td>
                                                    <td>340$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-8.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Airi Satuo</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel"
                                    aria-labelledby="analytics-tab-2" tabindex="0">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="pc-dt-simple-2">
                                            <thead>
                                                <tr>
                                                    <th>Invoice Id</th>
                                                    <th>Student Name</th>
                                                    <th>Date</th>
                                                    <th>Payment Type</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-2.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-3.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Airi Satuo</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-5.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-9.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                        
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-10.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-1.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-4.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-7.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-8.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel"
                                    aria-labelledby="analytics-tab-3" tabindex="0">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="pc-dt-simple-3">
                                            <thead>
                                                <tr>
                                                    <th>Invoice Id</th>
                                                    <th>Student Name</th>
                                                    <th>Date</th>
                                                    <th>Payment Type</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-5.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-9.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-10.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Airi Satuo</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-1.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-2.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-3.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-4.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-7.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-8.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="analytics-tab-4-pane" role="tabpanel"
                                    aria-labelledby="analytics-tab-4" tabindex="0">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="pc-dt-simple-4">
                                            <thead>
                                                <tr>
                                                    <th>Invoice Id</th>
                                                    <th>Student Name</th>
                                                    <th>Date</th>
                                                    <th>Payment Type</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-2.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-3.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-5.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-9.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-10.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Airi Satuo</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-1.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-4.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Mickie Melmoth</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5/5/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-success">Paid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-7.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Shelba Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>7/6/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-danger">Cancelled</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto pe-0">
                                                                <img src="../assets/images/user/avatar-8.jpg"
                                                                    alt="user-image"
                                                                    class="wid-40 hei-40 rounded-circle" />
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-1"><span
                                                                        class="text-truncate w-100">Liana Thews</span>
                                                                </h6>
                                                                <p class="f-12 mb-0"><a href="#!"
                                                                        class="text-muted"><span
                                                                            class="text-truncate w-100">0316-8336096</span></a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05/01/2022</td>
                                                    <td>credit card</td>
                                                    <td>240$</td>
                                                    <td><span class="badge bg-light-info">Unpaid</span></td>
                                                    <td class="text-end">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="invoice-details.php"
                                                                    class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                        class="ti ti-eye f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="invoice-edit.php"
                                                                    class="avtar avtar-s btn-link-success btn-pc-default"><i
                                                                        class="ti ti-edit f-20"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"
                                                                    class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                        class="ti ti-trash f-20"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        import {
            DataTable
        } from '../assets/js/plugins/module.js';
        window.dt = new DataTable('#pc-dt-simple-1');
        window.dt = new DataTable('#pc-dt-simple-2');
        window.dt = new DataTable('#pc-dt-simple-3');
        window.dt = new DataTable('#pc-dt-simple-4');
   </script>

@endsection
