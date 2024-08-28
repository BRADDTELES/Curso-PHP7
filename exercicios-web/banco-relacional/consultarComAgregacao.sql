select 
    regiao as 'Região',
    sum(populacao) as Total
from `estados`
group by regiao
order by Total desc

select 
    sum(populacao) as Total
from `estados`

select 
    avg(populacao) as Média
from `estados`