<?php

/**
 * Inclui o arquivo de configuração global do aplicativo:
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/**
 * Título desta página:
 * 
 * A variável '$page_title' especifica o título da página, que aparece 
 * na tag <title>...</title>. Esta variável não pode ser vazia.
 * 
 * Conforme o case, a tag title terá os seguintes formatos:
 *  • Na página inicial → <title>Nome do site .:. Slogan do site</title>
 *  • Em páginas estáticas → <title>Nome do site .:. Nome da página</title>
 *  • Na página de artigos → <title>Nome do site .:. Título do artigo</title>
 * 
 */
$page_title = 'Página modelo';

/**
 * Conteúdo desta página:
 * 
 * Esta viarável será exibida dentro da tag <article>...</article>.
 */
$page_article = '';

/**
 * Barra lateral desta página:
 * 
 * Esta variável será exibida na tag <aside>...</aside>.
 */
$page_aside = '';

/***********************************************
 * Todo o código PHP desta página começa aqui! *
 ***********************************************/



/***********************************
 * Fim do código PHP desta página! *
 ***********************************/

/**
 * Inclui o cabeçalhodo template nesta página:
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<article><?php echo $page_article ?></article>

<aside><?php echo $page_aside ?></aside>

<?php

/**
 * Inclui o rodapé do template nesta página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');

?>