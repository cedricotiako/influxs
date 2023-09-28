SELECT
    SUM(v.value) AS val,
    k.`name` AS nom_actions
FROM
    vue_max_actions_details v
JOIN actions_types k ON
    v.reaction_type_id = k.id
JOIN campaigns AS cp
ON
    v.campaign_id = cp.id
JOIN platforms AS p
ON
    v.platform_id = p.id
JOIN products AS pr
ON
    v.product_id = pr.id
WHERE
    v.influenceur_id = 1 AND(
        v.publication_date BETWEEN '2023-01-01' AND '2023-09-28' OR v.date_j BETWEEN '2023-01-01' AND '2023-09-28'
    )
GROUP BY
    v.influenceur_id,
    v.reaction_type_id;