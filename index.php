<?php
Kirby::plugin('mountbatt/accordion-block', [
  'blueprints' => [
    'blocks/accordion' => __DIR__ . '/blueprints/blocks/accordion.yml'
  ],
  'snippets' => [
    'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php'
  ],'translations' => [
    'en' => [
      'field.blocks.accordion.empty' => 'Please add some entries into your accordion …',
      'field.blocks.accordion.name' => 'Accordion',
      'field.blocks.accordion.nameentries' => 'Akkordion entries',
      'field.blocks.accordion.showasfaq' => 'Show as FAQ-Schema for Google?',
      'field.blocks.accordion.question' => 'Question',
       'field.blocks.accordion.answer' => 'Answer',
       'field.blocks.accordion.openonload' => 'Open element on load?',
       'field.blocks.accordion.open' => 'Open',
       'field.blocks.accordion.desc_question' => 'Add title or question here …',
        'field.blocks.accordion.desc_answer' => 'Add collapsed answer here …',
    ],
    'de' => [
       'field.blocks.accordion.empty' => 'Bitte füge ein paar Einträge in Dein Akkordeon ein …',
       'field.blocks.accordion.name' => 'Akkordeon',
       'field.blocks.accordion.nameentries' => 'Akkordeon-Einträge',
       'field.blocks.accordion.showasfaq' => 'Als FAQ-Schema für Google anzeigen?',
       'field.blocks.accordion.question' => 'Frage',
       'field.blocks.accordion.answer' => 'Antwort',
       'field.blocks.accordion.openonload' => 'Element beim Start öffnen?',
       'field.blocks.accordion.open' => 'Offen',
       'field.blocks.accordion.desc_question' => 'Füge hier den Titel oder die Fragestellung ein …',
       'field.blocks.accordion.desc_answer' => 'Füge hier die zugeklappte Antwort ein …',
  
    ],
    // more languages
  ]
]);