update `estados`
set nome = 'Maranhão'
where sigla = 'MA'

select est.nome from `estados` est where sigla = "MA"

update estados
set nome = 'Paraná', 
    populacao = 11.32
where sigla = 'PR'

select 
    nome, 
    `sigla`, 
    est.populacao 
from estados est
where sigla = "PR"