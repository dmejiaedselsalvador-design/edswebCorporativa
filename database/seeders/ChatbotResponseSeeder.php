<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChatbotResponse;
use Illuminate\Support\Facades\DB;

class ChatbotResponseSeeder extends Seeder
{
    public function run(): void
    {
        // Limpiamos la tabla para evitar duplicados
        DB::table('chatbot_responses')->truncate();

        $data = [
            [
                'keyword' => 'hi,hello,hey,hi eds,hello eds',
                'response' => "Hi 👋 Welcome to EDS Manufacturing.\n\nWe specialize in wire harnesses, battery cables, and electro-mechanical assemblies.\n\nHow can I assist you today?"
            ],
            [
                'keyword' => 'who are you,about eds,company,what is eds',
                'response' => "EDS Manufacturing is a world-class supplier of electrical wire harnesses, battery cables, and electro-mechanical assemblies.\n\nWe are IATF 16949 and ISO 9001 certified, serving Automotive, Appliance, and Commercial Vehicle industries."
            ],
            [
                'keyword' => 'why eds,why choose eds,benefits,advantages',
                'response' => "Why choose EDS?\n\n✔ Certified Quality (IATF 16949 & ISO 9001)\n✔ Engineering + Manufacturing in one place\n✔ Competitive pricing\n✔ High-volume production capacity\n✔ Proven experience since 1990\n\nWe deliver reliable and cost-efficient solutions."
            ],
            [
                'keyword' => 'services,what do you do,solutions',
                'response' => "We provide complete solutions:\n\n⚙ Engineering\n🏭 Manufacturing\n✔ Quality Assurance\n\nFrom design to full production, all in one place."
            ],
            [
                'keyword' => 'engineering,design,cad,development',
                'response' => "Our Engineering capabilities include:\n\n• Advanced CAD & 3D Modeling (CATIA, NX, AutoCAD)\n• Harness routing optimization\n• BOM generation\n• Electrical system design\n\nWe design high-performance electrical systems."
            ],
            [
                'keyword' => 'manufacturing,production,factory',
                'response' => "Our Manufacturing capabilities:\n\n• High-volume production (50M+ units)\n• Automated Komax & Artos machinery\n• Precision up to 0.001mm\n• 95% automation level\n\nWe scale from prototypes to mass production."
            ],
            [
                'keyword' => 'quality,testing,inspection,certifications',
                'response' => "Quality is our priority:\n\n✔ 100% testing\n✔ High-voltage testing (Hipot)\n✔ Crimp analysis\n✔ Fault detection systems\n\nWe follow a zero-defect philosophy."
            ],
            [
                'keyword' => 'certifications,iso,iatf,standards',
                'response' => "We are fully certified:\n\n• ISO 9001\n• IATF 16949\n• ISO 14001\n• CTPAT\n\nEnsuring global manufacturing standards."
            ],
            [
                'keyword' => 'industries,markets,clients',
                'response' => "We serve multiple industries:\n\n🚗 Automotive\n🏠 Appliance\n🚚 Commercial Vehicles\n\nTrusted by global industry leaders."
            ],
            [
                'keyword' => 'capabilities,what can you do,production capacity',
                'response' => "Our capabilities include:\n\n• Wire harness manufacturing\n• Battery cables\n• Electro-mechanical assemblies\n• High-volume production\n\nFrom concept to delivery."
            ],
            [
                'keyword' => 'price,pricing,cost,quote',
                'response' => "Our pricing depends on your project requirements.\n\n👉 We offer competitive pricing with scalable production.\n\nCan I get your email to send you a custom quote?"
            ],
            [
                'keyword' => 'contact,email,phone,sales',
                'response' => "You can contact us at:\n\n📧 sales@edsmanufacturing.com\n📍 Nogales, Arizona\n\nOr leave your email and we will contact you."
            ],
            [
                'keyword' => 'technology,automation,ai,machines',
                'response' => "We use advanced manufacturing technology:\n\n• Komax & Artos machines\n• Automated crimp monitoring\n• AI-driven production lines\n• Injection molding systems\n\nEnsuring precision and efficiency."
            ],
            [
                'keyword' => 'testing,electrical testing,validation',
                'response' => "We perform advanced testing:\n\n✔ Continuity & resistance testing\n✔ High-voltage testing\n✔ Crimp cross-section analysis\n✔ Pull-force verification"
            ],
            [
                'keyword' => 'competitive advantage,why best',
                'response' => "Our competitive advantage:\n\n• Competitive pricing\n• Strong engineering team\n• World-class quality\n• Flexible production\n• Large product range"
            ],
            [
                'keyword' => 'products,what products',
                'response' => "We manufacture:\n\n• Wire harnesses\n• Battery cables\n• Electrical assemblies\n\nFrom simple cables to complex systems."
            ],
            [
                'keyword' => 'process,how you work,workflow',
                'response' => "We support your project from start to finish:\n\n1. Design & Engineering\n2. Prototype\n3. Validation\n4. Production\n5. Quality Testing\n\nFull lifecycle support."
            ],
            [
                'keyword' => 'clients,customers,partners',
                'response' => "We work with global industry leaders and manufacturers delivering precision and innovation."
            ],
            [
                'keyword' => 'help,menu,options',
                'response' => "I can help you with:\n\n• Pricing\n• Engineering\n• Manufacturing\n• Quality\n• Certifications\n\n👉 Just type what you need!"
            ],
            // Variaciones con errores comunes que pediste
            [
                'keyword' => 'pricning,pricin,prce,coste',
                'response' => "Our pricing depends on your project requirements.\n\n👉 Can I get your email to send you a quote?"
            ],
            [
                'keyword' => 'enginering,enginering,enginner',
                'response' => "Our Engineering team provides advanced design, CAD modeling, and system development."
            ]
        ];

        foreach ($data as $item) {
            ChatbotResponse::create($item);
        }
    }
}
