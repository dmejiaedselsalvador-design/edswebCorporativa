@extends('layouts.app') @section('title', 'EDS | terms and conditions')
@section('content')

<section class="max-w-5xl mx-auto px-6 py-16">
    <!-- PDF Viewer -->
    <div class="w-full h-[80vh] border rounded-xl overflow-hidden shadow">
        <iframe
            src="{{
                asset(
                    'certs/EDS_Terms_and_Conditions_of_Purchase_Sept_2020.pdf'
                )
            }}"
            class="w-full h-full"
        >
        </iframe>
    </div>

    <!-- Download Button -->
    <div class="mt-6">
        <a
            href="{{
                asset(
                    'certs/EDS_Terms_and_Conditions_of_Purchase_Sept_2020.pdf'
                )
            }}"
            target="_blank"
            class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700"
        >
            <i class="fa-solid fa-download"></i>
            Download PDF
        </a>
    </div>
</section>

@endsection
