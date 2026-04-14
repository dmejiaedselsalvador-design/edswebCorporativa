<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'EDS Manufacturing | Industrial Solutions')</title>

    <!-- SEO -->
    <meta name="description" content="EDS Manufacturing - Wire harness and industrial solutions">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">



    <!-- Tailwind (temporal, luego migrar a Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#0b2b4b",
                    },
                    fontFamily: {
                       sans: ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
<style>
.user {
    align-self: flex-end;
    background: linear-gradient(135deg, #3b82f6, #06b6d4);
    color: white;
    padding: 10px 14px;
    border-radius: 18px 18px 0 18px;
    max-width: 75%;
    font-size: 14px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.bot {
    align-self: flex-start;
    background: white;
    padding: 10px 14px;
    border-radius: 18px 18px 18px 0;
    max-width: 75%;
    font-size: 14px;
    border: 1px solid #eee;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

#chatbox {
    display: flex;
    flex-direction: column;
        }

        /* Para pantallas pequeñas */
@media (max-width: 768px) {
    #chatContainer {
        bottom: 10px !important;
        right: 5% !important;
        width: 90vw !important;
        max-height: 70vh !important;
    }

    /* Ajusta el botón flotante */
    button[onclick="toggleChat()"] {
        bottom: 5px !important;
        right: 5% !important;
    }
    #scrollToTopBtn {
        bottom: 85px !important; /* Lo subimos un poco para que no choque con el botón del chat */
        right: 5% !important;
        width: 45px !important;
        height: 45px !important;
    }
}


</style>


</head>

<body class="bg-gray-50 text-slate-900 font-sans">

    <!-- HEADER -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-gray-200">
       <div class="max-w-7xl mx-auto px-6 flex justify-between items-center h-20">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/eds-manufacturing_logo.png') }}" class="h-12" alt="EDS">
                <span class="font-bold text-primary text-lg hidden sm:block">Inc.</span>
            </div>

            <!-- Desktop Nav -->
           <x-navbar />

            <!-- Right Actions -->
            <div class="flex items-center gap-3">
                <a href="{{ route('web.contact') }}"
                   class="hidden md:inline-block bg-primary text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-primary/90">
                    Contact
                </a>

                <!-- Mobile Button -->
                <button id="menuBtn" class="md:hidden text-primary">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="flex flex-col p-4 gap-4">
                <a href="{{ url('/') }}" class="py-2 border-b">Home</a>
                <a href="{{ route('web.solutions') }}" class="py-2 border-b">Solution</a>
                <a href="{{ route('web.about') }}" class="py-2 border-b">About</a>
                <a href="{{ route('web.support') }}" class="py-2 border-b">Support</a>
                <a href="{{ route('web.engineering') }}" class="py-2 border-b">Engineering</a>
                <a href="{{ route('web.manufacturing') }}" class="py-2 border-b">Manufacturing</a>
                <a href="{{ route('web.quality') }}" class="py-2 border-b">Quality</a>
                  <a href="{{ route('product.list') }}" class="py-2 border-b">Special Inventory</a>
                <a href="{{ route('web.contact') }}" class="py-2 text-primary font-bold">Contact</a>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
 <footer class="bg-slate-900 text-white mt-16">
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-4 gap-10">

        <!-- About -->
        <div>
            <h3 class="font-bold text-lg mb-4">EDS Manufacturing</h3>
            <p class="text-sm text-gray-400 leading-relaxed">
                Specialists in wire harnesses, battery cables, and electro-mechanical assemblies.
            </p>
        </div>

        <!-- Access -->
        <div>
            <h4 class="font-semibold mb-4 text-gray-500 text-xs uppercase tracking-wider">Access</h4>
            <ul class="space-y-2 text-sm text-gray-400">
                @auth
                    <li>
                        <a href="{{ route('dashboard.index') }}" class="hover:text-white transition">
                            Panel
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}" class="hover:text-white transition">
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>

        <!-- Legal -->
        <div>
            <h4 class="font-semibold mb-4 text-gray-500 text-xs uppercase tracking-wider">Legal</h4>
            <ul class="space-y-2 text-sm text-gray-400">
                <li>
                    <a href="{{ route('terms') }}" class="hover:text-white transition flex items-center gap-2">
                        <i class="fa-regular fa-file-pdf text-red-400"></i>
                        Terms & Conditions
                    </a>
                </li>
                <!-- futuro -->
                <!-- <li><a href="#" class="hover:text-white">Privacy Policy</a></li> -->
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="font-semibold mb-4 text-gray-500 text-xs uppercase tracking-wider">Contact</h4>
            <p class="text-sm text-gray-400 leading-relaxed">
                Nogales, Arizona <br>
                <span class="flex items-center gap-2 mt-2">
                    <i class="fa-regular fa-envelope"></i>
                    sales@edsmanufacturing.com
                </span>
            </p>
        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-slate-800 mt-6 pt-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} EDS Manufacturing. All rights reserved.
    </div>
</footer>

    <!-- SCRIPT MOBILE MENU -->
    <script>
        const btn = document.getElementById('menuBtn');
        const menu = document.getElementById('mobileMenu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
 <!-- Boton Back to Top -->
    <button id="scrollToTopBtn"
    onclick="scrollToTop()"
    class="hidden fixed bottom-24 right-5 bg-primary text-white w-12 h-12 rounded-full shadow-2xl hover:bg-slate-700 hover:scale-110 transition-all duration-300 z-50 flex items-center justify-center border border-white/20">
    <i class="fa-solid fa-chevron-up text-xl"></i>
</button>

    <!-- CHATBOT FLOAT -->
<!-- BOTÓN FLOTANTE -->
<button onclick="toggleChat()"
    class="fixed bottom-5 right-5 bg-gradient-to-r from-blue-700 to-blue-500 text-white font-bold py-4 px-6 rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all duration-300 z-50 flex items-center gap-2 border border-white/20">

    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
    </svg>

    <span class="text-sm tracking-wide">EDS CHAT-BOT</span>
</button>

<!-- CHATBOT -->
<div id="chatContainer"
     class="hidden fixed bottom-5 right-5 w-96 max-w-[90vw] max-h-[70vh] flex flex-col rounded-2xl shadow-2xl overflow-hidden backdrop-blur-xl border border-white/20 bg-white/90 z-50">

    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-4 py-3 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
            <span class="font-semibold">EDS AI Assistant</span>
        </div>
        <button onclick="toggleChat()" class="text-white text-xl">✖</button>
    </div>

    <!-- Chat -->
    <div id="chatbox" class="flex-1 overflow-y-auto p-4 space-y-3 bg-gray-50"></div>

    <!-- Typing -->
    <div id="typing" class="hidden px-4 pb-2 text-xs text-gray-400">
        EDS is typing...
    </div>

    <!-- Input -->
    <div class="flex items-center gap-2 p-3 border-t bg-white">
        <input id="message" type="text" placeholder="Ask something..."
            class="flex-1 px-4 py-2 rounded-full border focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">

        <button onclick="sendMessage()"
            class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white p-2 rounded-full hover:scale-105 transition">
            ➤
        </button>
    </div>

</div>

<!-- SCRIPTS CHAT -->
<script>
let firstMessage = true;

function toggleChat() {
    const chat = document.getElementById('chatContainer');
    chat.classList.toggle('hidden');

    if (firstMessage) {
        // Un pequeño delay para que no aparezca de golpe al abrir
        setTimeout(() => sendMessage("hi"), 500);
    }
}

// ENTER PARA ENVIAR
document.getElementById("message").addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
        e.preventDefault();
        sendMessage();
    }
});

function setTyping(show) {
    const typingDiv = document.getElementById('typing');
    typingDiv.classList.toggle('hidden', !show);
}

function sendMessage(customMessage = null) {
    const input = document.getElementById('message');
    const message = customMessage ? customMessage : input.value.trim();
    if (!message) return;

    const chatbox = document.getElementById('chatbox');

    // 1. Mostrar mensaje del usuario con estilo
    if (!customMessage) {
        chatbox.innerHTML += `
            <div class="flex justify-end mb-3">
                <div class="bg-blue-600 text-white px-4 py-2 rounded-2xl rounded-tr-none text-sm shadow-sm max-w-[80%]">
                    ${message}
                </div>
            </div>`;
    }

    input.value = "";
    chatbox.scrollTop = chatbox.scrollHeight;

    setTyping(true);

    fetch('/chatbot', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            message: message,
            first: firstMessage
        })
    })
    .then(res => res.json())
    .then(data => {
        setTyping(false);
        firstMessage = false;

        // 2. Crear contenedor para la respuesta del bot (vacío al inicio)
        const messageId = 'bot-msg-' + Date.now();

        chatbox.innerHTML += `
            <div class="chat-message bot flex items-start gap-2 mb-4">
                <img src="{{ asset('img/chatbot/robot_de_chat_eds_v2.png')}}" class="w-9 h-9 rounded-full shadow-sm" alt="EDA">
                <div id="${messageId}" class="message bg-blue-100 text-gray-800 px-3 py-2 rounded-2xl rounded-tl-none max-w-[80%] text-sm shadow-sm border border-blue-200">
                    </div>
            </div>`;

        // 3. Iniciar el efecto de escritura
        typeWriter(messageId, data.reply);
    })
    .catch(() => {
        setTyping(false);
    });
}

/**
 * Función que escribe el texto letra por letra
 */
function typeWriter(elementId, text) {
    const element = document.getElementById(elementId);
    let i = 0;
    const speed = 15;
    const chatbox = document.getElementById('chatbox');

    function type() {
        if (i < text.length) {
            // DETECTAR INICIO DE CUALQUIER ETIQUETA HTML ( <br>, <b>, </b>, etc.)
            if (text.charAt(i) === "<") {
                // Buscamos dónde termina la etiqueta actual
                let closingTagIndex = text.indexOf(">", i);
                if (closingTagIndex !== -1) {
                    // Copiamos toda la etiqueta de un solo golpe al innerHTML
                    element.innerHTML += text.substring(i, closingTagIndex + 1);
                    // Saltamos el índice hasta después del ">"
                    i = closingTagIndex + 1;
                } else {
                    // Por si acaso hay un "<" suelto que no cierra
                    element.innerHTML += text.charAt(i);
                    i++;
                }
            } else {
                // Si no es una etiqueta, escribe la letra normal
                element.innerHTML += text.charAt(i);
                i++;
            }

            // Mantiene el scroll abajo
            chatbox.scrollTop = chatbox.scrollHeight;

            setTimeout(type, speed);
        }
    }

    type();
}

function quickReply(text) {
    sendMessage(text);
}
</script>

<script>
    //es para el boton back to top
    const scrollBtn = document.getElementById("scrollToTopBtn");

    // Mostrar el botón cuando el usuario baje 300px
    window.onscroll = function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            scrollBtn.classList.remove("hidden");
        } else {
            scrollBtn.classList.add("hidden");
        }
    };

    // Función para subir suavemente
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

</body>
</html>
