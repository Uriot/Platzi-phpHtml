# Platzi-phpHtml
Curso No. 4 de platzi para la ruta backend con php


# correr archivos 
php -S localhost:8000 NOMBREARCHIVO.php

# Recomendaciones
Pro hack para auto tags de PHP:
1- Vayan a la paleta de comandas y Busquen Preferences: configure user snippets.
2- Busquen la opción de html
3- Peguen el siguiente código:

{
  // Place your snippets for html here. 
  "php": {
    "prefix": "php",
    "body": ["<?php", "$0", "?>"],
    "description": "php tag"
  }
}
https://www.youtube.com/watch?v=nRG5ISvMTS0

Por si desean poner los shortcuts:

Abrir Visual Studio Code.
Ir a File → Preferences → User Snippets.
Buscar y abrir html.json.
Agregar dentro de los {}:

	"php":{
		"prefix":["php"],
		"body": [ "<?php $0?>" ],
		"description": "php code tag"
	},
	
	"if":{
		"prefix": ["if"],
		"body": [
			"<?php if($1): ?>",
			"\t$2",
			"<?php endif; ?>"
		],
		"description": "if php tag"
	},
	
	"else":{
		"prefix": ["else"],
		"body": [
			"<?php else: ?>",
			
		],
		"description": "if php tag"
	},

	"comentario":{
		"prefix": ["comentario"],
		"body": [
			"<!-- $1 -->",
			
		],
		"description": "comentario html"
	},

	"for":{
		"prefix": ["for"],
		"body": [
			"<?php for($$i = ${1}; $$i < ${2}; $$i++): ?>",
			"\t${4}",
			"<?php endfor; ?>"
		],
		"description": "for php tag"
	},
	
	"foreach": {
		"prefix": "foreach",
		"body": [
			"<?php foreach ($$array${1} as $$index => $$value): ?>",
			"\t${4}",
			"<?php endforeach; ?>"
		],
		"description": "foreach loop"
	},

	"while": {
		"prefix": "while",
		"body": [
			"<?php while ($$i < ${1}): ?>",
			"\t${4}",
			"<?php endwhile; ?>"
		],
		"description": "while loop"
	},
