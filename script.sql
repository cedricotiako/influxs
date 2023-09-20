CREATE TABLE IF NOT EXISTS objectif_influenceur (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    influenceur_id INT,
    influenceur_name VARCHAR(512),
	Status VARCHAR(512),
    Video INT,
    Post INT,
    Comment INT,
    Others INT,
    Ayoba INT,
    Engagement INT
    
);

INSERT INTO objectif_influenceur (id, influenceur_id, influenceur_name, Status, Video, Post, Comment, Others, Ayoba, Engagement) 
VALUES
	(NULL, NULL, 'Moustik Le Charismatik', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'MURIEL BLANCHE', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Filatrio', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'FINGON', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Caro and Copees', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Sénior Pastor', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Frida Choco Bronze', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Peupah Zouzoua', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'AMINATOU NIHAD', 'Signed', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Fanoul Farik', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Ulrich Nguegang', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Philippe Simo', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Annie Payep Teleasu.TV', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Mola Mongombe', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Petit Gougou', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Ndockbidi', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Chouchou Mpacko', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'LYNN FRANCINE', 'Status', '0', '0', '0', '0', '0', '0'),
	(NULL, NULL, 'Bonas', 'Status', '0', '0', '0', '0', '0', '0');