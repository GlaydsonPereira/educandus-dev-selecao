-- Esta consulta calculará os limite de MB ainda disponíveis para o usuário de acordo com a conta do mesmo.

SELECT arq.usuarios_idusuarios,
(CASE WHEN (con.limite_max_conta - agrupamento.somaArquivos) > 0 THEN (con.limite_max_conta - agrupamento.somaArquivos) 
    ELSE 0 END) diferenca 
FROM arquivos arq
	INNER JOIN usuarios usu on (arq.idarquivos = usu.idusuarios)
	INNER JOIN  contas con on (usu.contas_idcontas = con.idcontas), 
	(SELECT arq2.usuarios_idusuarios, SUM(arq2.tamanho) somaArquivos 
 		FROM arquivos arq2 
 		where arq2.usuarios_idusuarios = 1 GROUP BY arq2.usuarios_idusuarios) agrupamento    
WHERE arq.usuarios_idusuarios = 1 and arq.usuarios_idusuarios = agrupamento.usuarios_idusuarios
GROUP BY arq.usuarios_idusuarios;


-- Este query irá consultar todos os arquivos do ususário e quantidade de compartilhamentos

SELECT arquivosCompartilhados.idusuario qtdCompartilhamentos, arq.* FROM arquivos arq,
(SELECT arq2.idarquivos, COUNT(comp.usuarios_idusuarios) idusuario
FROM arquivos arq2 LEFT JOIN compartilhamento comp on (arq2.idarquivos = comp.arquivos_idarquivos)
WHERE arq2.usuarios_idusuarios = $idUsuario GROUP BY arq2.idarquivos) arquivosCompartilhados     
WHERE arq.usuarios_idusuarios = $idUsuario AND arquivosCompartilhados.idarquivos = arq.idarquivos