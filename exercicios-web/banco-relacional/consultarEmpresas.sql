select e.nome Empresa, c.nome as `Cidade` 
from empresas e, empresas_unidades eu, cidades c
where e.id = eu.empresas_id 
and c.id = eu.cidades_id
and sede