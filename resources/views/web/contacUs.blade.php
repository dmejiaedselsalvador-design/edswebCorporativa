@extends('layouts.app') @section('title', 'EDS | Contact Us')
@section('content')
<section
    class="min-h-screen flex items-center justify-center bg-gray-100 relative"
>
    <!-- Imagen de fondo -->
    <div class="absolute inset-0">
        <img
            src="{{ asset('img/quality/conveyorsEK.jpeg') }}"
            alt="Tech background"
            class="w-full h-full object-cover brightness-75"
        />
        <div class="absolute inset-0 bg-blue-900/30"></div>
        <!-- overlay azul -->
    </div>

    <!-- Formulario centrado -->
    <div
        class="relative z-10 w-full max-w-lg p-10 bg-white/20 backdrop-blur-md rounded-3xl shadow-2xl"
    >
        <h2
            class="text-4xl font-extrabold text-white mb-4 text-center drop-shadow-lg"
        >
            Contact Us
        </h2>
        <p class="text-white/80 mb-8 text-center">
            Send us a message and we’ll get back to you shortly.
        </p>

        <form class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-white/90 mb-2"
                    >Full Name</label
                >
                <input
                    required
                    type="text"
                    placeholder="John Doe"
                    class="w-full px-5 py-3 rounded-2xl border border-white/40 bg-white/10 text-white placeholder-white/70 focus:border-blue-300 focus:ring-2 focus:ring-blue-300 outline-none transition-all shadow-md hover:shadow-lg"
                />
            </div>
            <div>
                <label class="block text-sm font-semibold text-white/90 mb-2"
                    >Email</label
                >
                <input
                    required
                    type="email"
                    placeholder="email@example.com"
                    class="w-full px-5 py-3 rounded-2xl border border-white/40 bg-white/10 text-white placeholder-white/70 focus:border-blue-300 focus:ring-2 focus:ring-blue-300 outline-none transition-all shadow-md hover:shadow-lg"
                />
            </div>
            <div>
                <label class="block text-sm font-semibold text-white/90 mb-2"
                    >Message</label
                >
                <textarea
                    placeholder="Write your message..."
                    rows="5"
                    class="w-full px-5 py-3 rounded-2xl border border-white/40 bg-white/10 text-white placeholder-white/70 focus:border-blue-300 focus:ring-2 focus:ring-blue-300 outline-none transition-all shadow-md hover:shadow-lg resize-none"
                ></textarea>
            </div>
            <div class="flex items-start gap-3">
                <input
                    required
                    id="termsCheckbox"
                    type="checkbox"
                    class="mt-1 w-5 h-5 rounded border-white/40 bg-white/10 text-blue-600 focus:ring-blue-300 focus:ring-2"
                />
                <label for="termsCheckbox" class="text-white/80 text-sm">
                    I agree to the
                    <button
                        type="button"
                        id="openTermsModal"
                        class="underline hover:text-blue-200"
                    >
                        Terms & Conditions
                    </button>
                </label>
            </div>
            <button
                type="submit"
                class="w-full py-3 rounded-2xl bg-blue-900 hover:bg-blue-800 text-white font-bold text-lg transition-all shadow-lg hover:shadow-2xl"
            >
                Send Message
            </button>
        </form>
    </div>

    <!-- Modal Términos PDF -->
    <div
        id="termsModal"
        class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50"
    >
        <div
            class="bg-white/90 rounded-3xl max-w-3xl w-full p-6 relative backdrop-blur-md shadow-2xl"
        >
            <h3 class="text-2xl font-bold mb-4 text-gray-800">
                Terms & Conditions
            </h3>

            <div class="h-96 border rounded-lg overflow-hidden shadow">
                <iframe
                    src="{{
                        asset(
                            'certs/EDS_Terms_and_Conditions_of_Purchase_Sept_2020.pdf'
                        )
                    }}"
                    class="w-full h-full"
                ></iframe>
            </div>

            <button
                id="closeTermsModal"
                class="absolute top-4 right-4 text-gray-600 hover:text-gray-800 text-2xl font-bold"
            >
                &times;
            </button>
        </div>
    </div>
</section>

<script>
    const openModalBtn = document.getElementById("openTermsModal");
    const closeModalBtn = document.getElementById("closeTermsModal");
    const termsModal = document.getElementById("termsModal");
    const form = document.querySelector("form");
    const termsCheckbox = document.getElementById("termsCheckbox");

    // Abrir modal
    openModalBtn.addEventListener("click", () => {
        termsModal.classList.remove("hidden");
        termsModal.classList.add("flex");
    });

    // Cerrar modal
    closeModalBtn.addEventListener("click", () => {
        termsModal.classList.add("hidden");
        termsModal.classList.remove("flex");
    });

    // Validar checkbox antes de enviar
    form.addEventListener("submit", function (e) {
        if (!termsCheckbox.checked) {
            e.preventDefault();
            alert("You must accept the Terms & Conditions before sending.");
        }
    });
</script>
@endsection
