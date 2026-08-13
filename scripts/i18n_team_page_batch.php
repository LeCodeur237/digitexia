<?php

$root = dirname(__DIR__);
$view = $root . '/resources/views/pages/team.blade.php';
$content = file_get_contents($view);

preg_match_all("/__\(\s*'((?:\\\\'|[^'])*)'\s*\)/", $content, $single);
preg_match_all('/__\(\s*"((?:\\\\"|[^"])*)"\s*\)/', $content, $double);

$keys = [];
foreach (array_merge($single[1], $double[1]) as $key) {
    $keys[stripcslashes($key)] = true;
}
$keys = array_keys($keys);

$translations = [
    'en' => [],
    'fr' => [
        'DigiTexia | Team' => 'DigiTexia | Equipe',
        'Team' => 'Equipe',
        'Chief Executive Officer & Co-Founder' => 'Directrice generale et cofondatrice',
        'Co-founder and CEO, setting DigiTexia strategic direction.' => 'Cofondatrice et CEO, responsable de l orientation strategique de DigiTexia.',
        'Anne Marie NTAP co-founded DigiTexia and leads the company as CEO, guiding its strategic direction and vision as it builds digital infrastructure for organizations across Africa.' => 'Anne Marie NTAP a cofonde DigiTexia et dirige l entreprise comme CEO, en portant sa vision et son orientation strategique pour construire des infrastructures digitales au service des organisations africaines.',
        'Business Strategy' => 'Strategie business',
        'Leadership' => 'Leadership',
        'Chief Technology Officer & Co-Founder' => 'Directeur technique et cofondateur',
        'Co-founder and CTO, leading technology and engineering.' => 'Cofondateur et CTO, responsable de la technologie et de l ingenierie.',
        'Lucien co-founded DigiTexia and leads its technology and engineering direction as CTO. His work spans full-stack development, AI-powered product design, IoT and digital transformation.' => 'Lucien a cofonde DigiTexia et pilote la direction technologique et l ingenierie comme CTO. Son travail couvre le developpement full-stack, les produits alimentes par l IA, l IoT et la transformation digitale.',
        'Software Engineering' => 'Ingenierie logicielle',
        'Artificial Intelligence' => 'Intelligence artificielle',
        'Product Development' => 'Developpement produit',
        'Engineering' => 'Ingenierie',
        'Modern software architecture, enterprise platforms and systems built to scale.' => 'Architecture logicielle moderne, plateformes d entreprise et systemes concus pour passer a l echelle.',
        'AI-powered applications, intelligent automation and decision-support systems.' => 'Applications alimentees par l IA, automatisation intelligente et systemes d aide a la decision.',
        'Digital Transformation' => 'Transformation digitale',
        'Process digitalization, workflow optimization and enterprise modernization.' => 'Digitalisation des processus, optimisation des workflows et modernisation des organisations.',
        'Designing, building and evolving digital products around real user needs.' => 'Concevoir, construire et faire evoluer des produits digitaux autour de besoins utilisateurs reels.',
        'IoT & Smart Infrastructure' => 'IoT et infrastructure intelligente',
        'Connected systems, monitoring, sensors and digital infrastructure where applicable.' => 'Systemes connectes, supervision, capteurs et infrastructure digitale lorsque cela est pertinent.',
        'Business & Strategy' => 'Business et strategie',
        'Technology strategy, partnerships, product positioning and business development.' => 'Strategie technologique, partenariats, positionnement produit et developpement business.',
        'The people building what comes next.' => 'Les personnes qui construisent la suite.',
        'DigiTexia brings together technology, product and business expertise to design and deploy digital solutions that address real operational challenges, led by a founding team committed to that mission.' => 'DigiTexia rassemble des expertises technologiques, produit et business pour concevoir et deployer des solutions digitales qui repondent a de vrais defis operationnels, avec une equipe fondatrice engagee dans cette mission.',
        'Meet the team' => 'Voir l equipe',
        'Build with us' => 'Construire avec nous',
        'Team image placeholder' => 'Placeholder image equipe',
        'AI & Data' => 'IA et Data',
        'Decision systems for real operations' => 'Systemes de decision pour operations reelles',
        'Infrastructure' => 'Infrastructure',
        'Products built for African realities' => 'Produits concus pour les realites africaines',
        'Our strength' => 'Notre force',
        'DigiTexia is built around capabilities, not job titles.' => 'DigiTexia est construit autour des competences, pas des intitules.',
        'Our work combines engineering, product development, digital transformation, AI and business understanding, with different disciplines pulling toward the same mission: technology that solves real problems for organizations across Africa.' => 'Notre travail combine ingenierie, developpement produit, transformation digitale, IA et comprehension business, avec plusieurs disciplines orientees vers une meme mission : une technologie qui resout de vrais problemes pour les organisations africaines.',
        'Building AI-powered digital infrastructure for Africa.' => 'Construire une infrastructure digitale alimentee par l IA pour l Afrique.',
        'Founding team' => 'Equipe fondatrice',
        'The people responsible for DigiTexia strategic direction and technical vision.' => 'Les personnes responsables de l orientation strategique et de la vision technique de DigiTexia.',
        'Profile image placeholder' => 'Placeholder image profil',
        'DigiTexia day-to-day work is also carried out by engineers, designers and specialists across our projects. As team profiles are confirmed, they will be added here.' => 'Le travail quotidien de DigiTexia est aussi porte par des ingenieurs, designers et specialistes sur nos projets. Les profils seront ajoutes ici au fur et a mesure de leur confirmation.',
        'Collective expertise' => 'Expertise collective',
        'What the team brings together' => 'Ce que l equipe rassemble',
        'Not a list of job titles, but the actual disciplines behind DigiTexia work.' => 'Pas une liste d intitules, mais les disciplines concretes derriere le travail de DigiTexia.',
        'Products' => 'Produits',
        'Real people, behind real products.' => 'De vraies personnes derriere de vrais produits.',
        'The team technical and product work spans DigiTexia flagship suite, from architecture and engineering to deployment support.' => 'Le travail technique et produit de l equipe couvre la suite phare de DigiTexia, de l architecture et l ingenierie jusqu au support de deploiement.',
        'How we work' => 'Notre facon de travailler',
        'Culture & collaboration' => 'Culture et collaboration',
        'Curiosity' => 'Curiosite',
        'Asking why before deciding how.' => 'Demander pourquoi avant de decider comment.',
        'Engineering Excellence' => 'Excellence d ingenierie',
        'Built to standard, not to deadline pressure alone.' => 'Construire selon des standards, pas seulement sous la pression des delais.',
        'Ownership' => 'Responsabilite',
        'Seeing problems through, not just tickets closed.' => 'Aller au bout des problemes, pas seulement fermer des tickets.',
        'Impact' => 'Impact',
        'Measuring work by the difference it makes.' => 'Mesurer le travail par la difference qu il cree.',
        'Our mission' => 'Notre mission',
        'Built for African realities. Held to global standards.' => 'Concu pour les realites africaines. Aligne sur des standards mondiaux.',
        'The team works to design technology adapted to the operational realities organizations face across Africa, while holding every platform to the same engineering and product standards expected anywhere in the world.' => 'L equipe concit des technologies adaptees aux realites operationnelles des organisations africaines, tout en maintenant chaque plateforme au niveau des standards d ingenierie et de produit attendus partout dans le monde.',
        'Build what matters.' => 'Construire ce qui compte.',
        'Whether you are a prospective client, a technology partner, an investor, or someone who wants to build meaningful technology with us, we would welcome the conversation.' => 'Que vous soyez client potentiel, partenaire technologique, investisseur ou une personne souhaitant construire une technologie utile avec nous, nous serions heureux d echanger.',
        'Connect With Us' => 'Contactez-nous',
        'Explore Partnerships' => 'Explorer les partenariats',
    ],
    'es' => [
        'DigiTexia | Team' => 'DigiTexia | Equipo',
        'Team' => 'Equipo',
    ],
    'it' => [
        'DigiTexia | Team' => 'DigiTexia | Team',
        'Team' => 'Team',
    ],
    'zh' => [
        'DigiTexia | Team' => 'DigiTexia | 团队',
        'Team' => '团队',
    ],
];

foreach ($keys as $key) {
    $translations['en'][$key] = $key;
}

$machineDefaults = [
    'es' => [
        'Chief Executive Officer & Co-Founder' => 'Directora ejecutiva y cofundadora',
        'Co-founder and CEO, setting DigiTexia strategic direction.' => 'Cofundadora y CEO, responsable de la direccion estrategica de DigiTexia.',
        'Anne Marie NTAP co-founded DigiTexia and leads the company as CEO, guiding its strategic direction and vision as it builds digital infrastructure for organizations across Africa.' => 'Anne Marie NTAP cofundó DigiTexia y dirige la empresa como CEO, guiando su vision y direccion estrategica mientras construye infraestructura digital para organizaciones en Africa.',
        'Business Strategy' => 'Estrategia empresarial',
        'Leadership' => 'Liderazgo',
        'Chief Technology Officer & Co-Founder' => 'Director de tecnologia y cofundador',
        'Co-founder and CTO, leading technology and engineering.' => 'Cofundador y CTO, responsable de tecnologia e ingenieria.',
        'Lucien co-founded DigiTexia and leads its technology and engineering direction as CTO. His work spans full-stack development, AI-powered product design, IoT and digital transformation.' => 'Lucien cofundó DigiTexia y lidera su direccion tecnologica e ingenieria como CTO. Su trabajo abarca desarrollo full-stack, productos impulsados por IA, IoT y transformacion digital.',
        'Software Engineering' => 'Ingenieria de software',
        'Artificial Intelligence' => 'Inteligencia artificial',
        'Product Development' => 'Desarrollo de producto',
        'Engineering' => 'Ingenieria',
        'Modern software architecture, enterprise platforms and systems built to scale.' => 'Arquitectura de software moderna, plataformas empresariales y sistemas preparados para escalar.',
        'AI-powered applications, intelligent automation and decision-support systems.' => 'Aplicaciones impulsadas por IA, automatizacion inteligente y sistemas de apoyo a la decision.',
        'Digital Transformation' => 'Transformacion digital',
        'Process digitalization, workflow optimization and enterprise modernization.' => 'Digitalizacion de procesos, optimizacion de flujos de trabajo y modernizacion empresarial.',
        'Designing, building and evolving digital products around real user needs.' => 'Disenar, construir y evolucionar productos digitales en torno a necesidades reales de usuarios.',
        'IoT & Smart Infrastructure' => 'IoT e infraestructura inteligente',
        'Connected systems, monitoring, sensors and digital infrastructure where applicable.' => 'Sistemas conectados, monitoreo, sensores e infraestructura digital cuando corresponde.',
        'Business & Strategy' => 'Negocio y estrategia',
        'Technology strategy, partnerships, product positioning and business development.' => 'Estrategia tecnologica, alianzas, posicionamiento de producto y desarrollo empresarial.',
        'The people building what comes next.' => 'Las personas que construyen lo que viene.',
        'DigiTexia brings together technology, product and business expertise to design and deploy digital solutions that address real operational challenges, led by a founding team committed to that mission.' => 'DigiTexia reúne experiencia tecnologica, de producto y de negocio para disenar y desplegar soluciones digitales que responden a desafios operativos reales, lideradas por un equipo fundador comprometido con esa mision.',
        'Meet the team' => 'Conocer al equipo',
        'Build with us' => 'Construir con nosotros',
        'Team image placeholder' => 'Marcador de imagen del equipo',
        'AI & Data' => 'IA y datos',
        'Decision systems for real operations' => 'Sistemas de decision para operaciones reales',
        'Infrastructure' => 'Infraestructura',
        'Products built for African realities' => 'Productos creados para realidades africanas',
        'Our strength' => 'Nuestra fortaleza',
        'DigiTexia is built around capabilities, not job titles.' => 'DigiTexia se construye alrededor de capacidades, no de cargos.',
        'Our work combines engineering, product development, digital transformation, AI and business understanding, with different disciplines pulling toward the same mission: technology that solves real problems for organizations across Africa.' => 'Nuestro trabajo combina ingenieria, desarrollo de producto, transformacion digital, IA y comprension empresarial, con distintas disciplinas orientadas a una misma mision: tecnologia que resuelve problemas reales para organizaciones en Africa.',
        'Building AI-powered digital infrastructure for Africa.' => 'Construyendo infraestructura digital impulsada por IA para Africa.',
        'Founding team' => 'Equipo fundador',
        'The people responsible for DigiTexia strategic direction and technical vision.' => 'Las personas responsables de la direccion estrategica y la vision tecnica de DigiTexia.',
        'Profile image placeholder' => 'Marcador de imagen de perfil',
        'DigiTexia day-to-day work is also carried out by engineers, designers and specialists across our projects. As team profiles are confirmed, they will be added here.' => 'El trabajo diario de DigiTexia tambien lo realizan ingenieros, disenadores y especialistas en nuestros proyectos. A medida que se confirmen los perfiles, se agregaran aqui.',
        'Collective expertise' => 'Experiencia colectiva',
        'What the team brings together' => 'Lo que el equipo reúne',
        'Not a list of job titles, but the actual disciplines behind DigiTexia work.' => 'No una lista de cargos, sino las disciplinas reales detras del trabajo de DigiTexia.',
        'Products' => 'Productos',
        'Real people, behind real products.' => 'Personas reales detras de productos reales.',
        'The team technical and product work spans DigiTexia flagship suite, from architecture and engineering to deployment support.' => 'El trabajo tecnico y de producto del equipo cubre la suite principal de DigiTexia, desde arquitectura e ingenieria hasta soporte de despliegue.',
        'How we work' => 'Como trabajamos',
        'Culture & collaboration' => 'Cultura y colaboracion',
        'Curiosity' => 'Curiosidad',
        'Asking why before deciding how.' => 'Preguntar por que antes de decidir como.',
        'Engineering Excellence' => 'Excelencia en ingenieria',
        'Built to standard, not to deadline pressure alone.' => 'Construido segun estandares, no solo por presion de plazos.',
        'Ownership' => 'Responsabilidad',
        'Seeing problems through, not just tickets closed.' => 'Resolver los problemas hasta el final, no solo cerrar tickets.',
        'Impact' => 'Impacto',
        'Measuring work by the difference it makes.' => 'Medir el trabajo por la diferencia que genera.',
        'Our mission' => 'Nuestra mision',
        'Built for African realities. Held to global standards.' => 'Construido para realidades africanas. Sostenido con estandares globales.',
        'The team works to design technology adapted to the operational realities organizations face across Africa, while holding every platform to the same engineering and product standards expected anywhere in the world.' => 'El equipo diseña tecnologia adaptada a las realidades operativas de las organizaciones en Africa, manteniendo cada plataforma al nivel de estandares de ingenieria y producto esperados en cualquier lugar del mundo.',
        'Build what matters.' => 'Construir lo que importa.',
        'Whether you are a prospective client, a technology partner, an investor, or someone who wants to build meaningful technology with us, we would welcome the conversation.' => 'Ya sea cliente potencial, socio tecnologico, inversor o alguien que quiere construir tecnologia significativa con nosotros, nos encantaria conversar.',
        'Connect With Us' => 'Contacta con nosotros',
        'Explore Partnerships' => 'Explorar alianzas',
    ],
    'it' => [
        'Chief Executive Officer & Co-Founder' => 'Amministratrice delegata e cofondatrice',
        'Co-founder and CEO, setting DigiTexia strategic direction.' => 'Cofondatrice e CEO, responsabile della direzione strategica di DigiTexia.',
        'Anne Marie NTAP co-founded DigiTexia and leads the company as CEO, guiding its strategic direction and vision as it builds digital infrastructure for organizations across Africa.' => 'Anne Marie NTAP ha cofondato DigiTexia e guida l azienda come CEO, definendone visione e direzione strategica mentre costruisce infrastrutture digitali per organizzazioni in Africa.',
        'Business Strategy' => 'Strategia aziendale',
        'Leadership' => 'Leadership',
        'Chief Technology Officer & Co-Founder' => 'Direttore tecnico e cofondatore',
        'Co-founder and CTO, leading technology and engineering.' => 'Cofondatore e CTO, responsabile di tecnologia e ingegneria.',
        'Lucien co-founded DigiTexia and leads its technology and engineering direction as CTO. His work spans full-stack development, AI-powered product design, IoT and digital transformation.' => 'Lucien ha cofondato DigiTexia e guida la direzione tecnologica e ingegneristica come CTO. Il suo lavoro copre sviluppo full-stack, prodotti basati su IA, IoT e trasformazione digitale.',
        'Software Engineering' => 'Ingegneria software',
        'Artificial Intelligence' => 'Intelligenza artificiale',
        'Product Development' => 'Sviluppo prodotto',
        'Engineering' => 'Ingegneria',
        'Modern software architecture, enterprise platforms and systems built to scale.' => 'Architettura software moderna, piattaforme aziendali e sistemi progettati per scalare.',
        'AI-powered applications, intelligent automation and decision-support systems.' => 'Applicazioni basate su IA, automazione intelligente e sistemi di supporto decisionale.',
        'Digital Transformation' => 'Trasformazione digitale',
        'Process digitalization, workflow optimization and enterprise modernization.' => 'Digitalizzazione dei processi, ottimizzazione dei flussi di lavoro e modernizzazione aziendale.',
        'Designing, building and evolving digital products around real user needs.' => 'Progettare, costruire ed evolvere prodotti digitali intorno a bisogni reali degli utenti.',
        'IoT & Smart Infrastructure' => 'IoT e infrastruttura intelligente',
        'Connected systems, monitoring, sensors and digital infrastructure where applicable.' => 'Sistemi connessi, monitoraggio, sensori e infrastruttura digitale quando necessario.',
        'Business & Strategy' => 'Business e strategia',
        'Technology strategy, partnerships, product positioning and business development.' => 'Strategia tecnologica, partnership, posizionamento prodotto e sviluppo business.',
        'The people building what comes next.' => 'Le persone che costruiscono cio che viene dopo.',
        'DigiTexia brings together technology, product and business expertise to design and deploy digital solutions that address real operational challenges, led by a founding team committed to that mission.' => 'DigiTexia unisce competenze tecnologiche, di prodotto e di business per progettare e distribuire soluzioni digitali che affrontano sfide operative reali, guidate da un team fondatore impegnato in questa missione.',
        'Meet the team' => 'Conosci il team',
        'Build with us' => 'Costruisci con noi',
        'Team image placeholder' => 'Segnaposto immagine team',
        'AI & Data' => 'IA e dati',
        'Decision systems for real operations' => 'Sistemi decisionali per operazioni reali',
        'Infrastructure' => 'Infrastruttura',
        'Products built for African realities' => 'Prodotti costruiti per le realta africane',
        'Our strength' => 'La nostra forza',
        'DigiTexia is built around capabilities, not job titles.' => 'DigiTexia e costruita intorno alle capacita, non ai titoli.',
        'Our work combines engineering, product development, digital transformation, AI and business understanding, with different disciplines pulling toward the same mission: technology that solves real problems for organizations across Africa.' => 'Il nostro lavoro combina ingegneria, sviluppo prodotto, trasformazione digitale, IA e comprensione del business, con discipline diverse orientate alla stessa missione: tecnologia che risolve problemi reali per organizzazioni in Africa.',
        'Building AI-powered digital infrastructure for Africa.' => 'Costruire infrastruttura digitale basata su IA per l Africa.',
        'Founding team' => 'Team fondatore',
        'The people responsible for DigiTexia strategic direction and technical vision.' => 'Le persone responsabili della direzione strategica e della visione tecnica di DigiTexia.',
        'Profile image placeholder' => 'Segnaposto immagine profilo',
        'DigiTexia day-to-day work is also carried out by engineers, designers and specialists across our projects. As team profiles are confirmed, they will be added here.' => 'Il lavoro quotidiano di DigiTexia e svolto anche da ingegneri, designer e specialisti sui nostri progetti. Man mano che i profili saranno confermati, verranno aggiunti qui.',
        'Collective expertise' => 'Competenza collettiva',
        'What the team brings together' => 'Cosa unisce il team',
        'Not a list of job titles, but the actual disciplines behind DigiTexia work.' => 'Non una lista di titoli, ma le discipline reali dietro il lavoro di DigiTexia.',
        'Products' => 'Prodotti',
        'Real people, behind real products.' => 'Persone reali dietro prodotti reali.',
        'The team technical and product work spans DigiTexia flagship suite, from architecture and engineering to deployment support.' => 'Il lavoro tecnico e di prodotto del team copre la suite principale di DigiTexia, dall architettura e ingegneria al supporto al deploy.',
        'How we work' => 'Come lavoriamo',
        'Culture & collaboration' => 'Cultura e collaborazione',
        'Curiosity' => 'Curiosita',
        'Asking why before deciding how.' => 'Chiedere perche prima di decidere come.',
        'Engineering Excellence' => 'Eccellenza ingegneristica',
        'Built to standard, not to deadline pressure alone.' => 'Costruito secondo standard, non solo sotto pressione delle scadenze.',
        'Ownership' => 'Responsabilita',
        'Seeing problems through, not just tickets closed.' => 'Seguire i problemi fino in fondo, non solo chiudere ticket.',
        'Impact' => 'Impatto',
        'Measuring work by the difference it makes.' => 'Misurare il lavoro dalla differenza che crea.',
        'Our mission' => 'La nostra missione',
        'Built for African realities. Held to global standards.' => 'Costruito per le realta africane. Allineato a standard globali.',
        'The team works to design technology adapted to the operational realities organizations face across Africa, while holding every platform to the same engineering and product standards expected anywhere in the world.' => 'Il team progetta tecnologie adatte alle realta operative delle organizzazioni in Africa, mantenendo ogni piattaforma agli stessi standard di ingegneria e prodotto attesi ovunque nel mondo.',
        'Build what matters.' => 'Costruisci cio che conta.',
        'Whether you are a prospective client, a technology partner, an investor, or someone who wants to build meaningful technology with us, we would welcome the conversation.' => 'Che tu sia un potenziale cliente, un partner tecnologico, un investitore o una persona che vuole costruire tecnologia significativa con noi, saremo felici di parlarne.',
        'Connect With Us' => 'Contattaci',
        'Explore Partnerships' => 'Esplora le partnership',
    ],
    'zh' => [
        'Chief Executive Officer & Co-Founder' => '首席执行官兼联合创始人',
        'Co-founder and CEO, setting DigiTexia strategic direction.' => '联合创始人兼CEO，负责DigiTexia的战略方向。',
        'Anne Marie NTAP co-founded DigiTexia and leads the company as CEO, guiding its strategic direction and vision as it builds digital infrastructure for organizations across Africa.' => 'Anne Marie NTAP 共同创立了 DigiTexia，并担任 CEO，带领公司为非洲组织建设数字基础设施。',
        'Business Strategy' => '商业战略',
        'Leadership' => '领导力',
        'Chief Technology Officer & Co-Founder' => '首席技术官兼联合创始人',
        'Co-founder and CTO, leading technology and engineering.' => '联合创始人兼CTO，负责技术和工程方向。',
        'Lucien co-founded DigiTexia and leads its technology and engineering direction as CTO. His work spans full-stack development, AI-powered product design, IoT and digital transformation.' => 'Lucien 共同创立了 DigiTexia，并作为 CTO 领导技术和工程方向。他的工作涵盖全栈开发、AI 产品设计、物联网和数字化转型。',
        'Software Engineering' => '软件工程',
        'Artificial Intelligence' => '人工智能',
        'Product Development' => '产品开发',
        'Engineering' => '工程',
        'Modern software architecture, enterprise platforms and systems built to scale.' => '现代软件架构、企业平台和可扩展系统。',
        'AI-powered applications, intelligent automation and decision-support systems.' => 'AI 应用、智能自动化和决策支持系统。',
        'Digital Transformation' => '数字化转型',
        'Process digitalization, workflow optimization and enterprise modernization.' => '流程数字化、工作流优化和企业现代化。',
        'Designing, building and evolving digital products around real user needs.' => '围绕真实用户需求设计、构建和迭代数字产品。',
        'IoT & Smart Infrastructure' => '物联网与智能基础设施',
        'Connected systems, monitoring, sensors and digital infrastructure where applicable.' => '连接系统、监测、传感器以及适用的数字基础设施。',
        'Business & Strategy' => '商业与战略',
        'Technology strategy, partnerships, product positioning and business development.' => '技术战略、合作伙伴、产品定位和业务发展。',
        'The people building what comes next.' => '建设未来的人。',
        'DigiTexia brings together technology, product and business expertise to design and deploy digital solutions that address real operational challenges, led by a founding team committed to that mission.' => 'DigiTexia 汇聚技术、产品和商业能力，设计并部署解决真实运营挑战的数字解决方案，由坚定使命的创始团队领导。',
        'Meet the team' => '认识团队',
        'Build with us' => '与我们共建',
        'Team image placeholder' => '团队图片占位',
        'AI & Data' => 'AI 与数据',
        'Decision systems for real operations' => '面向真实运营的决策系统',
        'Infrastructure' => '基础设施',
        'Products built for African realities' => '为非洲现实打造的产品',
        'Our strength' => '我们的优势',
        'DigiTexia is built around capabilities, not job titles.' => 'DigiTexia 围绕能力建设，而不是职位名称。',
        'Our work combines engineering, product development, digital transformation, AI and business understanding, with different disciplines pulling toward the same mission: technology that solves real problems for organizations across Africa.' => '我们的工作结合工程、产品开发、数字化转型、AI 和商业理解，让不同学科服务同一使命：用技术解决非洲组织的真实问题。',
        'Building AI-powered digital infrastructure for Africa.' => '为非洲建设 AI 驱动的数字基础设施。',
        'Founding team' => '创始团队',
        'The people responsible for DigiTexia strategic direction and technical vision.' => '负责 DigiTexia 战略方向和技术愿景的人。',
        'Profile image placeholder' => '个人照片占位',
        'DigiTexia day-to-day work is also carried out by engineers, designers and specialists across our projects. As team profiles are confirmed, they will be added here.' => 'DigiTexia 的日常工作也由工程师、设计师和项目专家共同完成。团队资料确认后会添加到这里。',
        'Collective expertise' => '集体专长',
        'What the team brings together' => '团队整合的能力',
        'Not a list of job titles, but the actual disciplines behind DigiTexia work.' => '这不是职位列表，而是 DigiTexia 工作背后的真实专业能力。',
        'Products' => '产品',
        'Real people, behind real products.' => '真实产品背后的真实团队。',
        'The team technical and product work spans DigiTexia flagship suite, from architecture and engineering to deployment support.' => '团队的技术和产品工作覆盖 DigiTexia 核心套件，从架构和工程到部署支持。',
        'How we work' => '我们的工作方式',
        'Culture & collaboration' => '文化与协作',
        'Curiosity' => '好奇心',
        'Asking why before deciding how.' => '先问为什么，再决定怎么做。',
        'Engineering Excellence' => '工程卓越',
        'Built to standard, not to deadline pressure alone.' => '按标准构建，而不是只受期限压力驱动。',
        'Ownership' => '责任感',
        'Seeing problems through, not just tickets closed.' => '真正解决问题，而不是只关闭任务。',
        'Impact' => '影响力',
        'Measuring work by the difference it makes.' => '用实际产生的改变衡量工作。',
        'Our mission' => '我们的使命',
        'Built for African realities. Held to global standards.' => '面向非洲现实，遵循全球标准。',
        'The team works to design technology adapted to the operational realities organizations face across Africa, while holding every platform to the same engineering and product standards expected anywhere in the world.' => '团队设计适应非洲组织运营现实的技术，同时让每个平台达到全球应有的工程和产品标准。',
        'Build what matters.' => '建设真正重要的东西。',
        'Whether you are a prospective client, a technology partner, an investor, or someone who wants to build meaningful technology with us, we would welcome the conversation.' => '无论你是潜在客户、技术伙伴、投资者，还是希望与我们共同建设有意义技术的人，我们都欢迎交流。',
        'Connect With Us' => '联系我们',
        'Explore Partnerships' => '探索合作',
    ],
];

foreach ($machineDefaults as $locale => $items) {
    foreach ($items as $key => $value) {
        $translations[$locale][$key] = $value;
    }
}

foreach (['es', 'it', 'zh'] as $locale) {
    foreach ($keys as $key) {
        if (!array_key_exists($key, $translations[$locale])) {
            $translations[$locale][$key] = $key;
        }
    }
}

foreach (['en', 'fr', 'es', 'it', 'zh'] as $locale) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = file_get_contents($path);
    $json = preg_replace('/^\xEF\xBB\xBF/', '', $json);
    $data = json_decode($json, true);

    if (!is_array($data)) {
        fwrite(STDERR, "Invalid JSON: {$path}\n");
        exit(1);
    }

    foreach ($translations[$locale] as $key => $value) {
        $data[$key] = $value;
    }

    ksort($data, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents(
        $path,
        json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL
    );
}

echo "Team page translations updated: " . count($keys) . " keys.\n";
