SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE product_images;
TRUNCATE TABLE products;
TRUNCATE TABLE categories;

SET FOREIGN_KEY_CHECKS = 1;


INSERT INTO chatbot_responses (keywords, response) VALUES

-- SALUDOS
('hi,hello,hey,hi eds,hello eds',
'Hi 👋 Welcome to EDS Manufacturing.\n\nWe specialize in wire harnesses, battery cables, and electro-mechanical assemblies.\n\nHow can I assist you today?'),

-- WHO WE ARE
('who are you,about eds,company,what is eds',
'EDS Manufacturing is a world-class supplier of electrical wire harnesses, battery cables, and electro-mechanical assemblies.\n\nWe are IATF 16949 and ISO 9001 certified, serving Automotive, Appliance, and Commercial Vehicle industries.'),

-- WHY EDS
('why eds,why choose eds,benefits,advantages',
'Why choose EDS?\n\n✔ Certified Quality (IATF 16949 & ISO 9001)\n✔ Engineering + Manufacturing in one place\n✔ Competitive pricing\n✔ High-volume production capacity\n✔ Proven experience since 1990\n\nWe deliver reliable and cost-efficient solutions.'),

-- SERVICES GENERAL
('services,what do you do,solutions',
'We provide complete solutions:\n\n⚙ Engineering\n🏭 Manufacturing\n✔ Quality Assurance\n\nFrom design to full production, all in one place.'),

-- ENGINEERING
('engineering,design,cad,development',
'Our Engineering capabilities include:\n\n• Advanced CAD & 3D Modeling (CATIA, NX, AutoCAD)\n• Harness routing optimization\n• BOM generation\n• Electrical system design\n\nWe design high-performance electrical systems.'),

-- MANUFACTURING
('manufacturing,production,factory',
'Our Manufacturing capabilities:\n\n• High-volume production (50M+ units)\n• Automated Komax & Artos machinery\n• Precision up to 0.001mm\n• 95% automation level\n\nWe scale from prototypes to mass production.'),

-- QUALITY
('quality,testing,inspection,certifications',
'Quality is our priority:\n\n✔ 100% testing\n✔ High-voltage testing (Hipot)\n✔ Crimp analysis\n✔ Fault detection systems\n\nWe follow a zero-defect philosophy.'),

-- CERTIFICATIONS
('certifications,iso,iatf,standards',
'We are fully certified:\n\n• ISO 9001\n• IATF 16949\n• ISO 14001\n• CTPAT\n\nEnsuring global manufacturing standards.'),

-- INDUSTRIES
('industries,markets,clients',
'We serve multiple industries:\n\n🚗 Automotive\n🏠 Appliance\n🚚 Commercial Vehicles\n\nTrusted by global industry leaders.'),

-- CAPABILITIES
('capabilities,what can you do,production capacity',
'Our capabilities include:\n\n• Wire harness manufacturing\n• Battery cables\n• Electro-mechanical assemblies\n• High-volume production\n\nFrom concept to delivery.'),

-- PRICING
('price,pricing,cost,quote',
'Our pricing depends on your project requirements.\n\n👉 We offer competitive pricing with scalable production.\n\nCan I get your email to send you a custom quote?'),

-- CONTACT
('contact,email,phone,sales',
'You can contact us at:\n\n📧 sales@edsmanufacturing.com\n📍 Nogales, Arizona\n\nOr leave your email and we will contact you.'),

-- TECHNOLOGY
('technology,automation,ai,machines',
'We use advanced manufacturing technology:\n\n• Komax & Artos machines\n• Automated crimp monitoring\n• AI-driven production lines\n• Injection molding systems\n\nEnsuring precision and efficiency.'),

-- QUALITY DETAILS
('testing,electrical testing,validation',
'We perform advanced testing:\n\n✔ Continuity & resistance testing\n✔ High-voltage testing\n✔ Crimp cross-section analysis\n✔ Pull-force verification'),

-- ADVANTAGE
('competitive advantage,why best',
'Our competitive advantage:\n\n• Competitive pricing\n• Strong engineering team\n• World-class quality\n• Flexible production\n• Large product range'),

-- PRODUCTS
('products,what products',
'We manufacture:\n\n• Wire harnesses\n• Battery cables\n• Electrical assemblies\n\nFrom simple cables to complex systems.'),

-- PROCESS
('process,how you work,workflow',
'We support your project from start to finish:\n\n1. Design & Engineering\n2. Prototype\n3. Validation\n4. Production\n5. Quality Testing\n\nFull lifecycle support.'),

-- CUSTOMERS
('clients,customers,partners',
'We work with global industry leaders and manufacturers delivering precision and innovation.'),

-- DEFAULT AYUDA
('help,menu,options',
'I can help you with:\n\n• Pricing\n• Engineering\n• Manufacturing\n• Quality\n• Certifications\n\n👉 Just type what you need!');

INSERT INTO chatbot_responses (keywords, response) VALUES
('pricning,pricin,prce,coste',
'Our pricing depends on your project requirements.\n\n👉 Can I get your email to send you a quote?'),

('enginering,enginering,enginner',
'Our Engineering team provides advanced design, CAD modeling, and system development.');
