CREATE TABLE articles(
	id int primary key auto_increment,
	titre varchar(100),
	contenu varchar(1000),
	continent varchar(100),
	date date,
	image varchar(50)
);

CREATE TABLE breve(
	id int primary key auto_increment,
	titre varchar(100),
	contenu varchar(1000),
	date date,
	image varchar(100)
);

CREATE TABLE admin(
	id int primary key auto_increment,
	username varchar(255),
	password varchar(255)
);



insert into admin values (0,'admin@gmail.com',sha1('password'));

insert into articles values (0,'Le changement climatique entraîne une augmentation de l’insécurité alimentaire, de la pauvreté et des déplacements en Afrique','L’évolution du régime des précipitations, la hausse des températures et l’augmentation des phénomènes météorologiques extrêmes ont contribué à aggraver l’insécurité alimentaire, la pauvreté et les déplacements de population en Afrique en 2020, ce qui n’a fait qu’accentuer la crise socio-économique et sanitaire déclenchée par la pandémie de COVID-19, selon un nouveau rapport multi‑institutions coordonné par l’Organisation météorologique mondiale','Afrique','2022-05-15','images/afrique1.jpg');
insert into articles values (0,'L Afrique est la plus touchée par les effets du changement climatique, selon la COP26.','L’Afrique continue d’être l’un des continents les plus durement touchés par les conséquences du changement climatique, bien qu’elle émette les plus faibles niveaux de gaz à effet de serre à l’origine de ses impacts. La dernière prédiction en date est la disparition des derniers glaciers d’Afrique.','Afrique','2022-03-12','images/afrique2.jpg');
insert into articles values (0,'Le changement climatique est déjà une réalité pour des millions de personnes en Afrique','À Saint-Louis, une ville du Sénégal baignée par l’Atlantique, le changement climatique est tout ce qu’il y a de concret, le phénomène touchant déjà ses habitants au quotidien. Des centaines d’entre eux ont dû fuir les effets dévastateurs de l’élévation du niveau de la mer et de l’érosion, renonçant à leurs moyens de subsistance, leurs rêves et leurs perspectives.','Afrique','2022-04-12','images/afrique3.jpg');

insert into articles values (0,'La Chine et le climat : une relation très ambiguë','Lors de la COP de Glasgow, la Chine a confirmé sa volonté d’atteindre la neutralité carbone d’ici 2060. Engagement symbolique fort, mais échéance très lointaine. Les actes suivront-ils les paroles ? C’est révélateur de la relation très ambiguë du pouvoir chinois vis-à-vis de la question climatique.','Asie','2022-05-13','images/asie1.jpg');
insert into articles values (0,'Coulées de boue au Japon : quel lien avec le réchauffement climatique ?','Samedi 3 juillet, un glissement de terrain a dévasté la petite ville d’Atami, au centre du Japon, après plusieurs jours de précipitations records. Les autorités dénombrent pour le moment trois morts et une vingtaine de disparus. Mais le sort d’une centaine de personnes demeure inconnu.','Asie','2021-07-04','images/asie2.jpg');
insert into articles values (0,'A cause du changement climatique, Indonesie est obligée de changer de capitale','Jakarta, engloutie par les eaux en raison du changement climatique et de l urbanisation galopante, va bientôt perdre son titre de capitale indonésienne. Les députés viennent officiellement d approuver le projet du Président Joko Widodo de la transférer sur l île de Bornéo. Il promet que Nusantra, la nouvelle capitale, sera zéro émission mais sa localisation, en plein cœur de cette île riche en biodiversité, fait craindre aux écologistes une déforestation massive. ','Asie','2022-01-23','images/asie3.jpg');

insert into articles values (0,'Climat : l’Europe se réchauffera plus vite que le reste du monde','Loin d’être épargnée par le réchauffement climatique, l’Europe devrait voir ses températures moyennes augmenter plus vite que la moyenne mondiale, indique le rapport du Groupe d’experts international sur l’évolution du climat (GIEC) paru le 9 août, qui détaille les évolutions par région.','Europe','2022-02-14','images/europe1.jpg');

insert into articles values (0,'S’adapter au réchauffement climatique : une urgence pour l’Europe, selon le GIEC',' Les demi-mesures ne sont plus une option » a indiqué, dans un communiqué de presse, le Groupe d’experts intergouvernemental sur l’évolution du climat (GIEC), qui a publié, lundi 28 février, le deuxième volet de son 6ème rapport d’évaluation, intitulé « Changement climatique 2022 : Impacts, Adaptation et Vulnérabilité ».','Europe','2022-03-01','images/europe3.jpg');