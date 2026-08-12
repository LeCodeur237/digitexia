<?php

$root = dirname(__DIR__);

$translations = [
    'es' => [
        'DigiTexia | Blog and Technology Insights' => 'DigiTexia | Blog e ideas tecnologicas',
        'Blog' => 'Blog',
        'Technology, innovation and digital transformation insights for Africa.' => 'Perspectivas sobre tecnologia, innovacion y transformacion digital para Africa.',
        'We share what we learn building digital infrastructure across Africa: practical perspectives on AI, enterprise technology and the real-world challenges organizations face.' => 'Compartimos lo que aprendemos construyendo infraestructura digital en Africa: perspectivas practicas sobre IA, tecnologia empresarial y los desafios reales que enfrentan las organizaciones.',
        'Our insight library is being prepared.' => 'Nuestra biblioteca de ideas esta en preparacion.',
        'This space will share practical guidance for leaders working on AI, infrastructure monitoring, automation and digital transformation across Africa.' => 'Este espacio compartira orientacion practica para lideres que trabajan en IA, monitoreo de infraestructura, automatizacion y transformacion digital en Africa.',
        'Articles are published in English so the editorial voice stays consistent across markets.' => 'Los articulos se publican en ingles para mantener una voz editorial coherente en todos los mercados.',
        'Have a digital challenge to solve? Let us talk.' => 'Tiene un desafio digital que resolver? Hablemos.',
        'If something you read here connects to a challenge your organization is facing, we welcome the conversation.' => 'Si algo de lo que lee aqui conecta con un desafio que enfrenta su organizacion, nos interesa conversar.',
        'Write your comment...' => 'Escriba su comentario...',
        'Please login to leave a comment.' => 'Inicie sesion para dejar un comentario.',
        'Comments are disabled for this article.' => 'Los comentarios estan desactivados para este articulo.',
    ],
    'it' => [
        'DigiTexia | Blog and Technology Insights' => 'DigiTexia | Blog e approfondimenti tecnologici',
        'Blog' => 'Blog',
        'Technology, innovation and digital transformation insights for Africa.' => 'Approfondimenti su tecnologia, innovazione e trasformazione digitale per l Africa.',
        'We share what we learn building digital infrastructure across Africa: practical perspectives on AI, enterprise technology and the real-world challenges organizations face.' => 'Condividiamo cio che impariamo costruendo infrastruttura digitale in Africa: prospettive pratiche su IA, tecnologia enterprise e sfide reali affrontate dalle organizzazioni.',
        'Our insight library is being prepared.' => 'La nostra libreria di approfondimenti e in preparazione.',
        'This space will share practical guidance for leaders working on AI, infrastructure monitoring, automation and digital transformation across Africa.' => 'Questo spazio offrira indicazioni pratiche per leader che lavorano su IA, monitoraggio infrastrutturale, automazione e trasformazione digitale in Africa.',
        'Articles are published in English so the editorial voice stays consistent across markets.' => 'Gli articoli sono pubblicati in inglese per mantenere una voce editoriale coerente tra i mercati.',
        'Have a digital challenge to solve? Let us talk.' => 'Avete una sfida digitale da risolvere? Parliamone.',
        'If something you read here connects to a challenge your organization is facing, we welcome the conversation.' => 'Se qualcosa che leggete qui si collega a una sfida della vostra organizzazione, siamo disponibili a parlarne.',
        'Write your comment...' => 'Scrivete il vostro commento...',
        'Please login to leave a comment.' => 'Effettuate il login per lasciare un commento.',
        'Comments are disabled for this article.' => 'I commenti sono disabilitati per questo articolo.',
    ],
    'zh' => [
        'DigiTexia | Blog and Technology Insights' => 'DigiTexia | 博客与技术洞察',
        'Blog' => '博客',
        'Technology, innovation and digital transformation insights for Africa.' => '面向非洲的技术、创新和数字化转型洞察。',
        'We share what we learn building digital infrastructure across Africa: practical perspectives on AI, enterprise technology and the real-world challenges organizations face.' => '我们分享在非洲构建数字基础设施过程中获得的经验：关于 AI、企业技术和组织真实挑战的实践观点。',
        'Our insight library is being prepared.' => '我们的洞察库正在准备中。',
        'This space will share practical guidance for leaders working on AI, infrastructure monitoring, automation and digital transformation across Africa.' => '这里将为从事 AI、基础设施监测、自动化和非洲数字化转型的领导者提供实践指导。',
        'Articles are published in English so the editorial voice stays consistent across markets.' => '文章以英文发布，以保持跨市场的编辑声音一致。',
        'Have a digital challenge to solve? Let us talk.' => '有数字化挑战需要解决？让我们聊聊。',
        'If something you read here connects to a challenge your organization is facing, we welcome the conversation.' => '如果这里的内容与您组织面临的挑战相关，我们欢迎进一步交流。',
        'Write your comment...' => '写下您的评论...',
        'Please login to leave a comment.' => '请登录后发表评论。',
        'Comments are disabled for this article.' => '本文已关闭评论。',
    ],
];

foreach ($translations as $locale => $entries) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true) ?: [];
    foreach ($entries as $key => $value) {
        $json[$key] = $value;
    }
    ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "blog ES/IT/ZH translations fixed\n";
