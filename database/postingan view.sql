CREATE TABLE postingans AS
SELECT
    p.id,
    p.slug,
    p.id_author,
    u.name,
    p.title,
    p.body,
    p.created_at,
    p.updated_at
FROM
    posting p
JOIN
    users u ON p.id_author = u.id