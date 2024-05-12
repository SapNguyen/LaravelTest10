@extends('admin.layouts.app')

@section('content')
    <div class="col-lg-6 col-md-7">
        <div class="table-responsive">
            <table class="table align-items-center ">
                <tbody>
                    <tr>
                        <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                                <div>
                                    <img src="{{ asset('admin/assets/img/icons/flags/US.png') }}" alt="Country flag">
                                </div>
                                <div class="ms-4">
                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                    <h6 class="text-sm font-weight-normal mb-0 ">United States</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">2500</h6>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">$230,900</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                            <div class="col text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">29.9%</h6>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                                <div>
                                    <img src="{{ asset('admin/assets/img/icons/flags/DE.png') }}" alt="Country flag">
                                </div>
                                <div class="ms-4">
                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                    <h6 class="text-sm font-weight-normal mb-0 ">Germany</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">3.900</h6>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">$440,000</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                            <div class="col text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">40.22%</h6>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                                <div>
                                    <img src="{{ asset('admin/assets/img/icons/flags/GB.png') }}" alt="Country flag">
                                </div>
                                <div class="ms-4">
                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                    <h6 class="text-sm font-weight-normal mb-0 ">Great Britain</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">1.400</h6>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">$190,700</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                            <div class="col text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">23.44%</h6>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                                <div>
                                    <img src="{{ asset('admin/assets/img/icons/flags/BR.png') }}" alt="Country flag">
                                </div>
                                <div class="ms-4">
                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                    <h6 class="text-sm font-weight-normal mb-0 ">Brasil</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">562</h6>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">$143,960</h6>
                            </div>
                        </td>
                        <td class="align-middle text-sm">
                            <div class="col text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">32.14%</h6>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-6 col-md-5">
        <div id="map" class="mt-0 mt-lg-n4"></div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
@endsection
