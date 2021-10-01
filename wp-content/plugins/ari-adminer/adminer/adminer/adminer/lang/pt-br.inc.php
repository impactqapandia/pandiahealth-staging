<?php
defined( 'ABSPATH' ) or die( 'Access forbidden!' );

$translations = array(
	'Login' => 'Entrar',
	'Logout successful.' => 'Saída bem sucedida.',
	'Invalid credentials.' => 'Identificação inválida.',
	'Server' => 'Servidor',
	'Username' => 'Usuário',
	'Password' => 'Senha',
	'Select database' => 'Selecionar Base de dados',
	'Invalid database.' => 'Base de dados inválida.',
	'Table has been dropped.' => 'A Tabela foi eliminada.',
	'Table has been altered.' => 'A Tabela foi alterada.',
	'Table has been created.' => 'A Tabela foi criada.',
	'Alter table' => 'Alterar estrutura',
	'Create table' => 'Criar tabela',
	'Table name' => 'Nome da tabela',
	'engine' => 'motor',
	'collation' => 'collation',
	'Column name' => 'Nome da coluna',
	'Type' => 'Tipo',
	'Length' => 'Tamanho',
	'Auto Increment' => 'Incremento Automático',
	'Options' => 'Opções',
	'Save' => 'Salvar',
	'Drop' => 'Apagar',
	'Database has been dropped.' => 'A Base de dados foi apagada.',
	'Database has been created.' => 'A Base de dados foi criada.',
	'Database has been renamed.' => 'A Base de dados foi renomeada.',
	'Database has been altered.' => 'A Base de dados foi alterada.',
	'Alter database' => 'Alterar Base de dados',
	'Create database' => 'Criar Base de dados',
	'SQL command' => 'Comando SQL',
	'Logout' => 'Sair',
	'database' => 'base de dados',
	'Use' => 'Usar',
	'No tables.' => 'Não existem tabelas.',
	'select' => 'selecionar',
	'Item has been deleted.' => 'O Registro foi deletado.',
	'Item has been updated.' => 'O Registro foi atualizado.',
	'Item%s has been inserted.' => 'O Registro%s foi inserido.',
	'Edit' => 'Editar',
	'Insert' => 'Inserir',
	'Save and insert next' => 'Salvar e inserir outro',
	'Delete' => 'Deletar',
	'Database' => 'Base de dados',
	'Routines' => 'Rotinas',
	'Indexes have been altered.' => 'Os Índices foram alterados.',
	'Indexes' => 'Índices',
	'Alter indexes' => 'Alterar índices',
	'Add next' => 'Adicionar proximo',
	'Language' => 'Idioma',
	'Select' => 'Selecionar',
	'New item' => 'Novo Registro',
	'Search' => 'Procurar',
	'Sort' => 'Ordenar',
	'descending' => 'decrescente',
	'Limit' => 'Limite',
	'No rows.' => 'Não existem registros.',
	'Action' => 'Ação',
	'edit' => 'editar',
	'Page' => 'Página',
	'Query executed OK, %d row(s) affected.' => array('Consulta executada, %d registro afetado.', 'Consulta executada, %d registros afetados.'),
	'Error in query' => 'Erro na consulta',
	'Execute' => 'Executar',
	'Table' => 'Tabela',
	'Foreign keys' => 'Chaves estrangeiras',
	'Triggers' => 'Triggers',
	'View' => 'Visão',
	'Unable to select the table' => 'Não é possivel selecionar a Tabela',
	'Invalid CSRF token. Send the form again.' => 'Token CSRF inválido. Enviar o formulario novamente.',
	'Comment' => 'Comentário',
	'Default values' => 'Valores padrões',
	'%d byte(s)' => array('%d byte', '%d bytes'),
	'No commands to execute.' => 'Nenhum comando para executar.',
	'Unable to upload a file.' => 'Não é possível enviar o arquivo.',
	'File upload' => 'Importar arquivo',
	'File uploads are disabled.' => 'Importação de arquivos desablilitada.',
	'Routine has been called, %d row(s) affected.' => array('Rotina executada, %d registro afetado.', 'Rotina executada, %d registros afetados.'),
	'Call' => 'Chamar',
	'No extension' => 'Não há extension',
	'None of the supported PHP extensions (%s) are available.' => 'Nenhuma das extensões PHP suportadas (%s) está disponivel.',
	'Session support must be enabled.' => 'Suporte a sessões deve estar habilitado.',
	'Session expired, please login again.' => 'Sessão expirada, por favor logue-se novamente.',
	'Text length' => 'Tamanho de texto',
	'Foreign key has been dropped.' => 'A Chave Estrangeira foi apagada.',
	'Foreign key has been altered.' => 'A Chave Estrangeira foi alterada.',
	'Foreign key has been created.' => 'A Chave Estrangeira foi criada.',
	'Foreign key' => 'Chave Estrangeira',
	'Target table' => 'Tabela de destino',
	'Change' => 'Modificar',
	'Source' => 'Origem',
	'Target' => 'Destino',
	'Add column' => 'Adicionar coluna',
	'Alter' => 'Alterar',
	'Add foreign key' => 'Adicionar Chave Estrangeira',
	'ON DELETE' => 'ON DELETE',
	'ON UPDATE' => 'ON UPDATE',
	'Index Type' => 'Tipo de índice',
	'Column (length)' => 'Coluna (tamanho)',
	'View has been dropped.' => 'A Visão foi apagada.',
	'View has been altered.' => 'A Visão foi alterada.',
	'View has been created.' => 'A Visão foi criada.',
	'Alter view' => 'Alterar visão',
	'Create view' => 'Criar visão',
	'Name' => 'Nome',
	'Process list' => 'Lista de processos',
	'%d process(es) have been killed.' => array('%d processo foi terminado.', '%d processos foram terminados.'),
	'Kill' => 'Parar',
	'Parameter name' => 'Nome de Parâmetro',
	'Database schema' => 'Esquema de Base de dados',
	'Create procedure' => 'Criar procedimento',
	'Create function' => 'Criar função',
	'Routine has been dropped.' => 'A Rotina foi apagada.',
	'Routine has been altered.' => 'A Rotina foi alterada.',
	'Routine has been created.' => 'A Rotina foi criada.',
	'Alter function' => 'Alterar função',
	'Alter procedure' => 'Alterar procedimento',
	'Return type' => 'Tipo de valor de retorno',
	'Add trigger' => 'Adicionar trigger',
	'Trigger has been dropped.' => 'O Trigger foi apagado.',
	'Trigger has been altered.' => 'O Trigger foi alterado.',
	'Trigger has been created.' => 'O Trigger foi criado.',
	'Alter trigger' => 'Alterar Trigger',
	'Create trigger' => 'Adicionar Trigger',
	'Time' => 'Tempo',
	'Event' => 'Evento',
	'%s version: %s through PHP extension %s' => 'Versão %s: %s através da extensão PHP %s',
	'%d row(s)' => array('%d registro', '%d registros'),
	'Remove' => 'Remover',
	'Are you sure?' => 'Você tem certeza?',
	'Privileges' => 'Privilégios',
	'Create user' => 'Criar Usuário',
	'User has been dropped.' => 'O Usuário foi apagado.',
	'User has been altered.' => 'O Usuário foi alterado.',
	'User has been created.' => 'O Usuário foi criado.',
	'Hashed' => 'Hash',
	'Column' => 'Coluna',
	'Routine' => 'Rotina',
	'Grant' => 'Conceder',
	'Revoke' => 'Impedir',
	'Too big POST data. Reduce the data or increase the %s configuration directive.' => 'POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.',
	'Logged as: %s' => 'Logado como: %s',
	'Move up' => 'Mover acima',
	'Move down' => 'Mover abaixo',
	'Functions' => 'Funções',
	'Aggregation' => 'Adições',
	'Export' => 'Exportar',
	'Output' => 'Saída',
	'open' => 'abrir',
	'save' => 'salvar',
	'Format' => 'Formato',
	'Tables' => 'Tabelas',
	'Data' => 'Dados',
	'Event has been dropped.' => 'O Evento foi apagado.',
	'Event has been altered.' => 'O Evento foi alterado.',
	'Event has been created.' => 'O Evento foi criado.',
	'Alter event' => 'Modificar Evento',
	'Create event' => 'Criar Evento',
	'At given time' => 'A hora determinada',
	'Every' => 'Cada',
	'Events' => 'Eventos',
	'Schedule' => 'Agenda',
	'Start' => 'Início',
	'End' => 'Fim',
	'Status' => 'Estado',
	'On completion preserve' => 'Ao completar preservar',
	'Tables and views' => 'Tabelas e Visões',
	'Data Length' => 'Tamanho de dados',
	'Index Length' => 'Tamanho de índice',
	'Data Free' => 'Espaço Livre',
	'Collation' => 'Colação',
	'Analyze' => 'Analizar',
	'Optimize' => 'Otimizar',
	'Check' => 'Verificar',
	'Repair' => 'Reparar',
	'Truncate' => 'Truncar',
	'Tables have been truncated.' => 'As Tabelas foram truncadas.',
	'Rows' => 'Registros',
	',' => ' ',
	'0123456789' => '0123456789',
	'Tables have been moved.' => 'As Tabelas foram movidas.',
	'Move to other database' => 'Mover para outra Base de dados',
	'Move' => 'Mover',
	'Engine' => 'Motor',
	'Save and continue edit' => 'Salvar e continuar editando',
	'original' => 'original',
	'Tables have been dropped.' => 'As Tabelas foram eliminadas.',
	'%d item(s) have been affected.' => array('%d item foi afetado.', '%d itens foram afetados.'),
	'Whole result' => 'Resultado completo',
	'Clone' => 'Clonar',
	'Maximum number of allowed fields exceeded. Please increase %s.' => 'Quantidade máxima de campos permitidos excedidos. Por favor aumente %s.',
	'Partition by' => 'Particionar por',
	'Partitions' => 'Partições',
	'Partition name' => 'Nome da Partição',
	'Values' => 'Valores',
	'%d row(s) have been imported.' => array('%d registro foi importado.', '%d registros foram importados.'),
	'anywhere' => 'qualquer local',
	'Import' => 'Importar',
	'Stop on error' => 'Parar em caso de erro',
	'%.3f s' => '%.3f s',
	'$1-$3-$5' => '$5/$3/$1',
	'[yyyy]-mm-dd' => 'dd/mm/[aaaa]',
	'History' => 'Histórico',
	'Variables' => 'Variáveis',
	'Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.' => 'As colunas de origen e destino devem ser do mesmo tipo, deve existir um índice entre as colunas de destino e o registro referenciado deve existir.',
	'Relations' => 'Relações',
	'Run file' => 'Executar Arquivo',
	'Clear' => 'Limpar',
	'Maximum allowed file size is %sB.' => 'Tamanho máximo do arquivo permitido é %sB.',
	'Numbers' => 'Números',
	'Date and time' => 'Data e hora',
	'Strings' => 'Cadena',
	'Binary' => 'Binário',
	'Lists' => 'Listas',
	'Editor' => 'Editor',
	'E-mail' => 'E-mail',
	'From' => 'De',
	'Subject' => 'Assunto',
	'Send' => 'Enviar',
	'%d e-mail(s) have been sent.' => array('%d email foi enviado.', '%d emails foram enviados.'),
	'Webserver file %s' => 'Arquivo do servidor web %s',
	'File does not exist.' => 'Arquivo não existe.',
	'%d in total' => '%d no total',
	'Permanent login' => 'Login permanente',
	'Databases have been dropped.' => 'A Base de dados foi apagada.',
	'Search data in tables' => 'Buscar dados nas Tabelas',
	'Schema' => 'Esquema',
	'Alter schema' => 'Alterar esquema',
	'Create schema' => 'Criar esquema',
	'Schema has been dropped.' => 'O Esquema foi apagado.',
	'Schema has been created.' => 'O Esquema foi criado.',
	'Schema has been altered.' => 'O Esquema foi alterado.',
	'Sequences' => 'Sequências',
	'Create sequence' => 'Criar sequência',
	'Alter sequence' => 'Alterar sequência',
	'Sequence has been dropped.' => 'A Sequência foi apagada.',
	'Sequence has been created.' => 'A Sequência foi criada.',
	'Sequence has been altered.' => 'A Sequência foi alterada.',
	'User types' => 'Tipos definidos pelo usuário',
	'Create type' => 'Criar tipo',
	'Alter type' => 'Alterar tipo',
	'Type has been dropped.' => 'O Tipo foi apagado.',
	'Type has been created.' => 'O Tipo foi criado.',
	'Ctrl+click on a value to modify it.' => 'Ctrl+clique sobre o valor para edita-lo.',
	'Use edit link to modify this value.' => 'Utilize o link editar para modificar este valor.',
	'last' => 'último',
	'From server' => 'A partir do servidor',
	'System' => 'Sistema',
	'Select data' => 'Selecionar dados',
	'Show structure' => 'Mostrar estrutura',
	'empty' => 'vazio',
	'Network' => 'Rede',
	'Geometry' => 'Geometria',
	'File exists.' => 'Arquivo já existe.',
	'Attachments' => 'Anexos',
	'%d query(s) executed OK.' => array('%d consulta sql executada corretamente.', '%d consultas sql executadas corretamente.'),
	'Show only errors' => 'Mostrar somente erros',
	'Refresh' => 'Atualizar',
	'Invalid schema.' => 'Esquema inválido.',
	'Please use one of the extensions %s.' => 'Por favor use uma das extensões %s.',
	'now' => 'agora',
	'ltr' => 'ltr',
);
