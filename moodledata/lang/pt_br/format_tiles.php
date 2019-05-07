<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'format_tiles', language 'pt_br', branch 'MOODLE_36_STABLE'
 *
 * @package   format_tiles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsections'] = 'Adicionar blocos';
$string['all'] = 'Todos';
$string['allcomplete'] = 'Tudo completo';
$string['allowlabelconversion'] = 'Permitir a conversão de rótulo para página (experimental)';
$string['allowlabelconversion_desc'] = 'Se estiver marcado, os professores editores terão uma opção nas configurações de edição em cada rótulo para convertê-lo em uma página. Este é um cenário experimental.';
$string['allowsubtilesview'] = 'Permitir visualização de sub-blocos';
$string['allowsubtilesview_desc'] = 'Permitir o uso de uma configuração de curso que, se selecionada, dentro de um bloco mostra atividades (exceto rótulos) como sub-blocos, em vez de lista padrão';
$string['asfraction'] = 'Mostrar como fração';
$string['aspercentagedial'] = 'Mostrar como porcentagem (%) em um círculo';
$string['assumedatastoreconsent'] = 'Aceitar e permitir o uso do armazenamento local do navegador';
$string['assumedatastoreconsent_desc'] = 'Se selecionado, <b>não</b> será mostrado uma caixa de diálogo solicitando consentimento do usuário para armazenar dados no armazenamento local do navegador';
$string['basecolour'] = 'Cor dos blocos';
$string['basecolour_help'] = 'Este conjunto de cores será aplicado a todos os blocos do curso';
$string['brandcolour'] = 'Cor da marca';
$string['browsersessionstorage'] = 'Armazenamento de sessão do navegador (armazenando conteúdo do curso)';
$string['changecourseicon'] = 'Clique para escolher o novo ícone';
$string['close'] = 'Fechar';
$string['collapse'] = 'Recolher seção';
$string['collapsesections'] = 'Recolher todas as seções';
$string['colourblue'] = 'Azul';
$string['colourdarkgreen'] = 'Verde escuro';
$string['colourgreen'] = 'Verde';
$string['colourlightblue'] = 'Azul claro';
$string['colourname_descr'] = 'Nome de exibição da cor (por exemplo, "Azul") a ser usado nos menus suspensos ao escolher uma cor para um curso';
$string['colournamegeneral'] = 'Nome de exibição da cor acima';
$string['colourpurple'] = 'Roxo';
$string['colourred'] = 'Vermelho';
$string['coloursettings'] = 'Configurações de cor';
$string['complete'] = 'completo';
$string['complete-n-auto'] = 'Item não concluído. Ele será marcado como concluído quando você atender aos critérios de conclusão. Você não pode mudar isso manualmente.';
$string['complete-y-auto'] = 'Item concluído. Ele foi marcado como concluído quando você atendeu aos critérios de conclusão. Você não pode mudar isso manualmente.';
$string['completion_help'] = 'Um sinal à direita de uma atividade pode ser usado para indicar quando a atividade está completa (caso contrário, um círculo vazio será mostrado).<br><br>
Dependendo da configuração, um sinal pode aparecer automaticamente quando você completar a atividade de acordo com as condições estabelecidas pelo professor.<br><br>
Em outros casos, você pode clicar no círculo vazio quando achar que completou a atividade e ela se transformará em uma marca verde assinalada. (Clicando novamente, remove se você mudar de idéia).';
$string['completionswitchhelp'] = '<p>Você optou por visualizar o acompanhamento de conclusão em cada bloco. Por isso, definimos "Acompanhamento de Conclusão > Habilitado" mais abaixo nesta página para "Sim".</p>
<p>Além disso, você precisa ativar o acompanhamento de conclusão para <b>cada item</b> que você está acompanhando. Por exemplo: para um PDF, clique em "Editar configurações", procure abaixo de "Conclusão da Atividade" e escolha a configuração desejada.</p>
<p>Você também pode fazer isso em <b>massa</b>, conforme explicado na <a href="https://docs.moodle.org/36/en/Activity_completion_settings" target="_blank">explicação detalhada de acompanhamento de conclusão no moodle.org</a></p>';
$string['completionwarning'] = 'Você tem o acompanhamento de conclusão ativado no nível do curso, mas no nível de atividade individual, nenhum item tem o rastreamento ativado, por isso não há nada para rastrear.';
$string['completionwarning_changeinbulk'] = 'Mudança em massa';
$string['completionwarning_help'] = 'Você precisa tornar os itens individuais rastreáveis para editá-los (em Conclusão da Atividade > Acompanhamento de Conclusão) ou você pode fazer isso em massa em Administração do Curso > Conclusão do Curso > Edição em lote de conclusão de atividade';
$string['contents'] = 'Conteúdo';
$string['converttopage'] = 'Converter para página';
$string['converttopage_confirm'] = 'Você tem certeza? Essa operação não pode ser desfeita (você terá que criar o rótulo novamente manualmente, se precisar).';
$string['courseshowtileprogress'] = 'Progresso em cada bloco';
$string['courseshowtileprogress_error'] = 'Você tem "Rastreamento de conclusão > Ativar rastreamento de conclusão" definido como "Não" (veja mais abaixo nesta página) que está em conflito com essa configuração. Se você deseja exibir o progresso nos blocos, defina "Rastreamento de conclusão > Ativar rastreamento de conclusão" como "Sim". Caso contrário, defina esta configuração como \'Não\'.';
$string['courseshowtileprogress_help'] = '<p>Quando selecionado, o progresso do usuário com as atividades será mostrado em cada bloco, como uma <em>fração</em> (por exemplo: \'Progresso 2/10\' que significa que 2 de 10 atividades serão concluídas) ou como uma <em> porcentagem</em> em um círculo.</p>
<p>Isso só pode ser usado se "Conclusão > Ativar acompanhamento de conclusão" tiver sido ativado.</p>
<p>Se não houverem atividades à acompanhar dentro de um determinado bloco, o indicador não será exibido para esse bloco.</p>';
$string['courseusebarforheadings'] = 'Enfatizar títulos com aba colorida';
$string['courseusebarforheadings_help'] = 'Exibe uma aba colorida à esquerda do cabeçalho do curso sempre que um estilo de título é selecionado no editor de texto';
$string['courseusesubtiles'] = 'Utilizar sub-blocos para atividades';
$string['courseusesubtiles_help'] = 'Em cada bloco, mostre todas as atividades como um sub-bloco, em vez de uma lista de atividades ao longo da página. Isso não se aplica a rótulos que não serão mostrados como sub-blocos, portanto, podem ser usados como títulos entre blocos.';
$string['currentsection'] = 'Este bloco';
$string['customcss'] = 'CSS personalizado';
$string['customcssdesc'] = 'CSS personalizado para aplicar ao conteúdo da seção do curso enquanto este formato de curso é usado. Isso não será validado, portanto, tome cuidado para inserir um código válido. Por exemplo:
<p>.section {color: red; }</p>
<p>li.activity.subtile.resource.pdf {background-color: orange! important; }</p>';
$string['datapref'] = 'Preferência dos dados';
$string['datapreferror'] = 'O recurso de preferência dos dados só estará disponível se você tiver o JavaScript ativado no seu navegador. Caso contrário, o armazenamento de dados não poderá ser ativado.';
$string['dataprefquestion'] = '<p>Para tornar este site mais fácil de usar, armazenamos informações funcionais em seu navegador, como o conteúdo do último bloco que você abriu. Isso permanece na sua máquina por um curto período, caso você visite a página novamente. Nós não usamos estes dados para rastreamento. Tudo bem?</p><p>Armazenaremos sua escolha até você limpar seu histórico de navegação. Escolher "Não" pode resultar no carregamento de página mais lento.</p>';
$string['defaultthiscourse'] = 'Padrão para este curso';
$string['defaulttileicon'] = 'Ícone do bloco';
$string['defaulttileicon_help'] = 'O ícone selecionado aqui aparecerá em <em>todos os</em> blocos neste curso. Os blocos individuais podem ter um ícone diferente selecionado, usando uma configuração específica a nível de bloco.';
$string['deletesection'] = 'Excluir bloco';
$string['displayfilterbar'] = 'Barra de filtro';
$string['displayfilterbar_error'] = 'A menos que tenha configurado os resultados para este curso, você só pode exibir a barra de filtro com base nos números de blocos e não com base nos resultados. Crie alguns resultados primeiro e depois volte aqui. Veja';
$string['displayfilterbar_help'] = '<p>Quando selecionado, exibirá automaticamente uma matriz de botões antes da tela lado a lado de um curso, na qual os usuários podem clicar para filtrar blocos para determinados intervalos.</p><p>Quando \'com base nos números de blocos\' for selecionado, série de botões será exibida por exemplo um botão para telhas 1-4, um botão para fichas 5-8 etc.</p><p>Quando \'com base nos resultados do curso\' for selecionado, haverá um botão por resultado do curso. Cada bloco pode ser atribuído a um determinado resultado (e, portanto, a um determinado botão) da página de configurações do bloco.</p>';
$string['displaytitle_mod_doc'] = 'Documento do Word';
$string['displaytitle_mod_html'] = 'Página da WEB';
$string['displaytitle_mod_jpeg'] = 'Imagem';
$string['displaytitle_mod_mp3'] = 'Áudio';
$string['displaytitle_mod_mp4'] = 'Vídeo';
$string['displaytitle_mod_pdf'] = 'PDF';
$string['displaytitle_mod_ppt'] = 'Apresentação em Powerpoint';
$string['displaytitle_mod_txt'] = 'Texto plano';
$string['displaytitle_mod_xls'] = 'Planilha';
$string['displaytitle_mod_zip'] = 'Zip';
$string['download'] = 'Download';
$string['editsectionname'] = 'Editar nome do bloco';
$string['entersection'] = 'Entrar na seção';
$string['expand'] = 'Expandir';
$string['expandsections'] = 'Revelar todas as atividades (todas as seções)';
$string['fileaddedtobottom'] = 'Arquivo adicionado ao final da seção';
$string['filenoshowtext'] = 'Se o arquivo não aparecer aqui, por favor use os botões à direita para baixar ou visualizar em uma nova janela';
$string['filterboth'] = 'Mostrar botões com base nos números de blocos e nos resultados do curso';
$string['filternumbers'] = 'Mostrar botões baseado nos números dos blocos';
$string['filteroutcomes'] = 'Mostrar botões baseado nos resultados do curso';
$string['filteroutcomesrestore'] = 'O curso original utilizava os resultados na barra de filtros, que ainda não são suportados durante o processo de restauração. Por isso, a configuração da barra de filtro foi alterada no curso restaurado. Se você quer utilizar os resultados para filtrar blocos no curso restaurado, configure novamente os resultados da aprendizagem. O curso original não foi alterado.';
$string['folderdisplayerror'] = 'As pastas configuradas para mostrar o conteúdo online não são compatíveis com o formato de sub-blocos. Por isso, a <a href="{$a}">pasta</a> foi alterada para permitir a exibição numa página separada';
$string['followthemecolour'] = 'Forçar o uso da cor do tema';
$string['followthemecolour_desc'] = 'Se ativar esta opção, os professores não poderão escolher as cores, através deste módulo, e todas as cores dos blocos configuradas abaixo serão ignoradas. Em vez disso, será feita uma tentativa de obter a cor principal personalizada do tema e utilizá-la';
$string['hidden'] = 'Oculto';
$string['hide'] = 'Ocultar';
$string['hidefromothers'] = 'Ocultar bloco';
$string['highlightoff'] = 'Retirar destaque';
$string['home'] = 'Página inicial do curso';
$string['hovercolour'] = 'Cor do bloco ao passar o mouse';
$string['hovercolour_descr'] = 'Cor dos blocos ao passar o mouse por cima';
$string['icontitle-address-book-o'] = 'Lista de contatos';
$string['icontitle-assessment_graded'] = 'Avaliação A+';
$string['icontitle-assessment_timer'] = 'Temporizador da avaliação';
$string['icontitle-asterisk'] = 'Asterisco';
$string['icontitle-award-solid'] = 'Recompensa';
$string['icontitle-balance-scale'] = 'Escalas equilibradas';
$string['icontitle-bar-chart'] = 'Gráfico de Barras';
$string['icontitle-bell-o'] = 'Sino';
$string['icontitle-binoculars'] = 'Binóculos';
$string['icontitle-bitcoin'] = 'Bitcoin';
$string['icontitle-book'] = 'Livro';
$string['icontitle-bookmark-o'] = 'Favoritos';
$string['icontitle-briefcase'] = 'Pasta de documentos';
$string['icontitle-building'] = 'Edifício';
$string['icontitle-bullhorn'] = 'Megafone';
$string['icontitle-bullseye'] = 'Alvo';
$string['icontitle-calculator'] = 'Calculadora';
$string['icontitle-calendar'] = 'Calendário';
$string['icontitle-calendar-check-o'] = 'Marcações no calendário';
$string['icontitle-check'] = 'Verificado';
$string['icontitle-child'] = 'Criança';
$string['icontitle-clock-o'] = 'Relógio';
$string['icontitle-clone'] = 'Clone';
$string['icontitle-cloud-download'] = 'Nuvem (baixar)';
$string['icontitle-cloud-upload'] = 'Nuvem (subir)';
$string['icontitle-comment-o'] = 'Comentário';
$string['icontitle-comments-o'] = 'Comentários';
$string['icontitle-compass'] = 'Bússola';
$string['icontitle-diamond'] = 'Diamante';
$string['icontitle-dollar'] = 'Dólar';
$string['icontitle-euro'] = 'Euro';
$string['icontitle-exclamation-triangle'] = 'Triângulo com exclamação';
$string['icontitle-feed'] = 'Feed';
$string['icontitle-file-text-o'] = 'Arquivo de texto';
$string['icontitle-film'] = 'Filme';
$string['icontitle-flag-checkered'] = 'Bandeira (quadriculada)';
$string['icontitle-flag-o'] = 'Bandeira';
$string['icontitle-flash'] = 'Flash';
$string['icontitle-flask'] = 'Balão de vidro';
$string['icontitle-flipchart'] = 'Tela de apresentação';
$string['icontitle-frown-o'] = 'Triste';
$string['icontitle-gavel'] = 'Martelo do juiz';
$string['icontitle-gbp'] = 'Libra esterlina';
$string['icontitle-globe'] = 'Globo';
$string['icontitle-handshake-o'] = 'Aperto de mãos';
$string['icontitle-headphones'] = 'Fones de ouvido';
$string['icontitle-heartbeat'] = 'Batimento cardiaco';
$string['icontitle-history'] = 'Histórico';
$string['icontitle-home'] = 'Casa';
$string['icontitle-id-card-o'] = 'Cartão de identificação';
$string['icontitle-info'] = 'Informação';
$string['icontitle-jigsaw'] = 'Quebra cabeça';
$string['icontitle-key'] = 'Chave';
$string['icontitle-laptop'] = 'Notebook';
$string['icontitle-life-buoy'] = 'Bóia salva-vida';
$string['icontitle-lightbulb-o'] = 'Lâmpada';
$string['icontitle-line-chart'] = 'Gráfico de linha';
$string['icontitle-list'] = 'Lista (pontos)';
$string['icontitle-list-ol'] = 'Lista (números)';
$string['icontitle-location-arrow'] = 'Seta de localização';
$string['icontitle-map-marker'] = 'Marcador de mapa';
$string['icontitle-map-o'] = 'Mapa';
$string['icontitle-map-signs'] = 'Placas de direção';
$string['icontitle-microphone'] = 'Microfone';
$string['icontitle-mobile-phone'] = 'Celular';
$string['icontitle-mortar-board'] = 'Chapéu de formatura';
$string['icontitle-music'] = 'Música';
$string['icontitle-newspaper-o'] = 'Jornal';
$string['icontitle-number_1'] = 'Número 1';
$string['icontitle-number_10'] = 'Número 10';
$string['icontitle-number_2'] = 'Número 2';
$string['icontitle-number_3'] = 'Número 3';
$string['icontitle-number_4'] = 'Número 4';
$string['icontitle-number_5'] = 'Número 5';
$string['icontitle-number_6'] = 'Número 6';
$string['icontitle-number_7'] = 'Número 7';
$string['icontitle-number_8'] = 'Número 8';
$string['icontitle-number_9'] = 'Número 9';
$string['icontitle-pencil-square-o'] = 'Lápis num quadro';
$string['icontitle-person'] = 'Pessoa';
$string['icontitle-pie-chart'] = 'Gráfico circular';
$string['icontitle-podcast'] = 'Podcast';
$string['icontitle-puzzle-piece'] = 'Peça de quebra cabeça';
$string['icontitle-question-circle'] = 'Interrogação em círculo';
$string['icontitle-random'] = 'Aleatório';
$string['icontitle-refresh'] = 'Atualizar';
$string['icontitle-road'] = 'Estrada';
$string['icontitle-search'] = 'Lupa';
$string['icontitle-sliders'] = 'Slides';
$string['icontitle-smile-o'] = 'Sorriso';
$string['icontitle-star'] = 'Estrela (preenchida)';
$string['icontitle-star-half-o'] = 'Estrela (semi-preenchida)';
$string['icontitle-star-o'] = 'Estrela (sem sombra)';
$string['icontitle-survey'] = 'Pesquisa';
$string['icontitle-tags'] = 'Etiquetas';
$string['icontitle-tasks'] = 'Tarefas';
$string['icontitle-television'] = 'Televisão';
$string['icontitle-thinking-person'] = 'Pessoa com lâmpada';
$string['icontitle-thumbs-o-down'] = 'Polegar para baixo';
$string['icontitle-thumbs-o-up'] = 'Polegar para cima';
$string['icontitle-trophy'] = 'Troféu';
$string['icontitle-umbrella'] = 'Guarda-chuva';
$string['icontitle-university'] = 'Universidade';
$string['icontitle-user-o'] = 'Usuário';
$string['icontitle-users'] = 'Pessoas';
$string['icontitle-volume-up'] = 'Altofalante';
$string['icontitle-wrench'] = 'Chave inglesa';
$string['items'] = 'itens';
$string['jsactivate'] = 'Ativar navegação animada';
$string['jsdeactivate'] = 'Desativar navegação animada';
$string['jsdeactivated'] = 'Você desativou a navegação animada na sua conta';
$string['jsmaxstoreditems'] = 'Máximo de itens do conteúdo no armazenamento da sessão do navegador';
$string['jsmaxstoreditems_desc'] = 'Quando os usuários estiverem na página principal dos blocos, o navegador armazenará o HTML da própria tela da visão global dos blocos e o conteúdo de cada bloco, até ao número máximo de itens aqui selecionado. Permite uma resposta mais rápida quando um novo bloco é clicado. Configurar para um valor muito alto pode fazer com que o armazenamento do navegador fique cheio (embora, até ao momento, não tenha sido um problema)';
$string['jsnavsettings'] = 'Configurações da navegação com JavaScript';
$string['jsreactivated'] = 'Você ativou a navegação animada na sua conta. Esta funcionalidade pode resultar numa navegação mais rápida. Requer o JavaScript ativado.';
$string['jsstoredcontentdeletemins'] = 'Conteúdo armazenado da sessão é excluído após (minutos)';
$string['jsstoredcontentdeletemins_desc'] = 'Após clique em cada bloco, para manter o espaço livre para o HTML atual, o navegador do usuário executa uma limpeza e <em>exclui</em> do armazenamento da sessão todo o conteúdo mais antigo que este (baseado em que já não é atual, e que, de qualquer modo, será necessário obter uma nova cópia do servidor)';
$string['jsstoredcontentexpirysecs'] = 'Conteúdo armazenado da sessão expira após (segundos)';
$string['jsstoredcontentexpirysecs_desc'] = 'Quando um usuário clica num bloco, se o conteúdo do bloco no armazenamento da sessão do navegador for mais antigo, o conteúdo ainda será mostrado, mas será feita uma solicitação ao servidor em segundo plano, para obter uma nova cópia para atualizar o conteúdo. Isto permite atualizações subsequentes do curso depois do navegador armazenar a cópia. Se o conteúdo armazenado for mais recente, será assumido que está atualizado e será mostrado, sem solicitação ao servidor';
$string['labelconverted'] = 'Rótulo convertido';
$string['loading'] = 'Carregando';
$string['modalmodules'] = 'Módulos modais';
$string['modalmodules_desc'] = 'Iniciar estes módulos do curso numa janela modal';
$string['modalresources'] = 'Recursos modais';
$string['modalresources_desc'] = 'Abrir estes recursos numa janela modal';
$string['newsectionname'] = 'Novo nome para o tópico {$a}';
$string['nexttopic'] = 'Próximo tópico';
$string['noconnectionerror'] = 'Erro ao carregar o conteúdo. Verifique a sua conexão à internet';
$string['nojswarning'] = 'O seu navegador parece não suportar Javascript ou está desativado. Uma interface melhorada está disponível se você ativar o Javascript';
$string['none'] = 'Nenhum';
$string['notcomplete'] = 'Não concluído';
$string['notrecommended'] = 'Não recomendado';
$string['other'] = 'Outro';
$string['othersettings'] = 'Outras configurações';
$string['outcomes'] = 'Resultados da aprendizagem';
$string['outcomesunavailable'] = 'Resultados da aprendizagem não disponíveis';
$string['overall'] = 'Global';
$string['overallprogress'] = 'Conclusão da atividade - progresso global';
$string['overallprogressshort'] = 'Progresso global';
$string['pickicon'] = 'Selecione o novo ícone';
$string['pluginname'] = 'Formato blocos';
$string['previoustopic'] = 'Tópico anterior';
$string['privacy:metadata:preference:format_tiles_stopjsnav'] = 'Se o usuráio desativou a navegação animada com Javascript.';
$string['progress'] = 'Progresso';
$string['reactivate'] = 'reativar';
$string['reopenlastsection'] = 'Reabrir o último bloco visitado';
$string['reopenlastsection_desc'] = 'Quando ativar esta opção, se um usuário voltar ao curso mais tarde, a última seção que estava aberta será reaberta ao iniciar';
$string['restricted'] = 'Restrito';
$string['revealcontents'] = 'Mostrar conteúdo';
$string['section0name'] = 'Geral';
$string['sectionerrorstring'] = 'A sua sessão pode ter expirado. Tente atualizar esta página.';
$string['sectionerrortitle'] = 'Erro ao carregar conteúdo';
$string['sectionname'] = 'bloco';
$string['sectionnumber'] = 'Seção/Número do bloco';
$string['selected'] = 'Selecionado';
$string['show'] = 'Mostrar';
$string['showalltiles'] = 'Mostrar todos os blocos';
$string['showfromothers'] = 'Mostrar bloco';
$string['showseczerocoursewide'] = 'Mostrar a seção zero acima de todas as seções';
$string['showseczerocoursewide_desc'] = 'Se ativado, a seção zero (a seção do topo) será mostrada na página inicial do curso e no topo de <b>todas as páginas das seções do curso</b> (ou seja, no topo do conteúdo de cada bloco). Se desativada (recomendado), será mostrada apenas na página inicial do curso';
$string['showseparatewin'] = 'Mostrar arquivo numa janela separada';
$string['snapwarning'] = 'É possível editar o curso no formato blocos utilizando outro tema e, em seguida, mudar para o tema Snap assim que terminar a edição.';
$string['snapwarning_help'] = 'Configurações_Tema#Permitir_temas_usuarios';
$string['subtileszeczerotoggled'] = 'Seção de topo alterna entre o formato de lista e o formato de sub-blocos';
$string['tilecolourgeneral'] = 'Paleta de cores - cor opcional';
$string['tilecolourgeneral_descr'] = 'Cor opcional que será disponibilizada aos usuários, na lista pendente, como cor dos blocos do curso em Administração do curso > Editar configurações - deixe em branco para desativar a cor';
$string['tileicon'] = 'Ícone a mostrar (apenas este bloco)';
$string['tileicon_help'] = 'O item aqui selecionado substituirá, apenas neste bloco, o ícone do bloco definido ao nível de curso';
$string['tileoutcome'] = 'Resultados da aprendizagem para este bloco';
$string['tileoutcome_help'] = 'Se selecionar um resultado da aprendizagem para este bloco, poderá mostrar, nas configurações do curso, um conjunto de <em>botões de filtro</em>, um para cada resultado da aprendizagem, que filtram os blocos a mostrar de acordo com o resultado que lhes foi atribuído';
$string['tileselecttip'] = 'Não tem que se preocupar em usar este formulário para alterar o ícone de um bloco. Uma maneira mais fácil, no curso, é clicar no ícone que pretende alterar (com o modo de edição ativado)';
$string['tip'] = 'Ajuda';
$string['togglecompletion'] = 'Clique para alternar o estado da conclusão';
$string['tooltipchangeicon'] = 'Alterar ícone';
$string['usejavascriptnav'] = 'Usar navegação com Javascript na página principal do curso';
$string['usejavascriptnav_desc'] = 'Se ativar esta opção, o usuário ao clicar num bloco da página principal da visão global do curso e o Javascript estiver ativo, o JS será usado para fazer a transição para o conteúdo do bloco. O conteúdo do bloco será armazenado localmente no navegador de acordo com as outras configurações abaixo. Se desativada, o JS não será usado e será utilizada a navegação normal. As configurações do JS abaixo serão ignoradas.';
$string['usejsnavforsinglesection'] = 'Usar navegação JS na página de seção única';
$string['usejsnavforsinglesection_desc'] = 'Se ativar esta opção, qualquer chamada para uma página de seção única (& seção = xx) será manipulada com Javascript, iniciando a página principal do curso animada para abrir na seção solicitada via JS, em vez de chamar a página de seção única do PHP no estilo antigo';
$string['usesubtilesseczero'] = 'Usar sub-blocos na seção de topo';
$string['usesubtilesseczero_help'] = 'Se ativar esta opção, os sub-blocos serão usados na seção de topo do curso, bem como em todos os blocos. Uma vez que os sub-blocos ocupam muito espaço no topo do curso, talvez seja melhor não ativar para que todos os itens da seção de topo possam ser mostrados no formato de lista normal.';
$string['yourprogress'] = 'Seu progresso';
