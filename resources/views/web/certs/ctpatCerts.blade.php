@extends('layouts.app')

@section('content')
<div class="w-full max-w-[1400px] mx-auto px-6 py-10">

    <h2 class="text-2xl font-bold text-slate-800 mb-2">
        CTPAT Account Results
    </h2>

    <!-- INDICADOR DE SCROLL -->
    <p class="text-xs text-gray-400 mb-6">
        Scroll horizontally to view all data →
    </p>

    <!-- IMAGEN PROFESIONAL ARRIBA -->
    <div class="flex justify-center mb-6">
        <img src="{{ asset('/img/home/ctpat.png') }}" alt="CTPAT Logo" class="max-h-32 object-contain rounded-lg shadow-lg">
    </div>

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-200">

        <div class="overflow-x-auto px-2 pb-3">

            <table class="min-w-[1300px] w-full text-sm text-left text-gray-600">

                <!-- HEADER -->
                <thead class="bg-slate-900 text-white text-xs uppercase tracking-wider sticky top-0 z-10">
                    <tr>
                        <th class="px-6 py-4">Partner Name</th>
                        <th class="px-6 py-4">Account #</th>
                        <th class="px-6 py-4">Anniversary</th>
                        <th class="px-6 py-4">Business Type</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Sub-Status</th>
                        <th class="px-6 py-4">Certification</th>
                        <th class="px-6 py-4">Last Validation</th>
                        <th class="px-6 py-4">Field Office</th>
                        <th class="px-6 py-4">Assigned SCSS</th>
                    </tr>
                </thead>

                @php
                $partners = [
                    [
                        'name' => 'M3 S. de R.L. de C.V.',
                        'account' => '71272259',
                        'anniversary' => '05/09/2027',
                        'type' => 'Foreign Manufacturer',
                        'status' => 'Validated',
                        'sub_status' => 'Validated',
                        'cert_date' => '05/10/2012',
                        'last_validation' => '02/12/2026',
                        'office' => 'Houston',
                        'assigned' => 'Zacharia, Sunil',
                    ],
                    [
                        'name' => 'EDS Manufacturing, Inc.',
                        'account' => '93807856',
                        'anniversary' => '11/05/2026',
                        'type' => 'Importer',
                        'status' => 'Validated',
                        'sub_status' => 'Validated',
                        'cert_date' => '08/07/2009',
                        'last_validation' => '07/19/2023',
                        'office' => 'Miami',
                        'assigned' => 'Padilla, Dennyson',
                    ],
                    [
                        'name' => 'EDS MFG Mexico S. de R.L. de C.V.',
                        'account' => '78055117',
                        'anniversary' => '12/23/2026',
                        'type' => 'Foreign Manufacturer',
                        'status' => 'Validated',
                        'sub_status' => 'Validated',
                        'cert_date' => '12/23/2009',
                        'last_validation' => '07/19/2023',
                        'office' => 'Miami',
                        'assigned' => 'Padilla, Dennyson',
                    ],
                ];
                @endphp

                <!-- BODY -->
                <tbody class="divide-y divide-gray-100">
                    @foreach($partners as $partner)
                        <tr class="hover:bg-slate-50 transition duration-200">

                            <td class="px-6 py-4 font-semibold text-slate-700 max-w-[220px]">
                                {{ $partner['name'] }}
                            </td>

                            <td class="px-6 py-4 text-blue-600 font-medium whitespace-nowrap">
                                {{ $partner['account'] }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $partner['anniversary'] }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $partner['type'] }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700 font-semibold">
                                    {{ $partner['status'] }}
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700 font-semibold">
                                    {{ $partner['sub_status'] }}
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $partner['cert_date'] }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $partner['last_validation'] }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $partner['office'] }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $partner['assigned'] }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection
