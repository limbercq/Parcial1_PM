INSERT INTO `notas`VALUES ( null,1,'INF - 324',45);
INSERT INTO `notas`VALUES ( null,2,'INF - 324',20);
INSERT INTO `notas`VALUES ( null,3,'INF - 324',69);
INSERT INTO `notas`VALUES ( null,4,'INF - 324',56);
INSERT INTO `notas`VALUES ( null,5,'INF - 324',80);
INSERT INTO `notas`VALUES ( null,8308638,'INF - 324',90);

-- Sentencia de sql para ejercicio 2

select COUNT(residencia) as nro_aprobado,
case residencia 
    when 'lp' then 'La Paz'
    when 'cb' then 'Cochamaba' 
    else 'Oruro' end as depto
FROM identificadors ident, notas nt
where ident.ci = nt.ci
and  nota_final>50
GROUP BY residencia