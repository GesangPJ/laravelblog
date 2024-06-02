DELIMITER //
CREATE TRIGGER tr_posts_after_insert
AFTER INSERT ON posts
FOR EACH ROW
BEGIN
    INSERT INTO postingans (id, slug, id_author, name, title, body, created_at, updated_at)
    VALUES (NEW.id, NEW.slug, NEW.id_author, (SELECT name FROM users WHERE id = NEW.id_author), NEW.title, NEW.body, NEW.created_at, NEW.updated_at);
END;
//
DELIMITER ;