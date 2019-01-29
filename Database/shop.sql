/* script creare baza de date */

CREATE TABLE useri(
idU INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(40) NOT NULL,
parola VARCHAR(40) NOT NULL,
logat INT
);

insert into useri (username, parola, logat) values ('admin', 'admin', 0);
select * from useri;

CREATE TABLE produse(
idP INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nume TEXT NOT NULL,
poza TEXT NOT NULL,
descriere TEXT,
pret double(10,2)
);

CREATE TABLE comenzi(
idC INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nume varchar(100),
prenume varchar(100),
adresa varchar(100),
telefon int(100)
);

create table comenziProduse(
idC INT(6) UNSIGNED NOT NULL,
idP INT(6) UNSIGNED NOT NULL,
cantitate INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idP) REFERENCES produse(idP),
FOREIGN KEY (idC) REFERENCES comenzi(idC)
);

create table cosDeCumparaturi(
idP INT(6) UNSIGNED NOT NULL PRIMARY KEY,
cantitate INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idP) REFERENCES produse(idP)
);

insert into produse (nume, poza, descriere, pret)
		values (
		'Catan',
        'https://s12emagst.akamaized.net/products/407/406494/images/res_8613d47915c1899d5cb8a2c23da67fe2_450x450_g8ql.jpg',
        'A fost inventat de Klaus Teuber si este cel mai popular joc de  societate al ultimilor 15 ani, atragand milioane de fani  din intreaga  lume.

CATAN este numita insula pe care tu si prietenii tai ati descoperit-o. Sunteti primii locuitori. Sunt construite asezari, apoi drumuri. Materiile prime (resursele) ajung de la sate la orase prin intermediul comertului. Uneori exista lut din abundenta, alteori minereu. Schimburile de resurse deschid noi posibilitati pentru tine si pentru ceilalti colonisti. In curand va fi aglomeratie pe insula - competitia pentru terenuri, materii prime si putere incepe. In final este clar - va ramane doar un conducator al insulei  CATAN.',
		114.45
        );

insert into produse (nume, poza, descriere, pret)
		values (
		 'Activity',
         'https://s12emagst.akamaized.net/products/2378/2377545/images/res_2dd02497223908428d55aaaf8e8ed397_450x450_m5r.jpg',
         'Editia a 2-a a jocului, cu design reinnoit, reguli revizuite si cel mai important cu 440 de carti noi!

Caracteristici:

- Editia a 2-a a jocului, cu design reinnoit, reguli revizuite si cel mai important cu 440 de carti noi!
- Activity Original este un joc creativ si de comunicare, o combinatie de elemente: mima, descriere verbala sau desen.
- Toate aceste elemente trebuie folosite pentru a ajuta partenerii de joc sa ghiceasca anumite cuvinte, expresii.
- Totul se invarte in jurul unor expresii ca „rasarit de soare", „razatoare de legume", „franghie de spanzuratoare"…
- Jucatorii individuali sau echipele incearca printr-un joc actoricesc, desen sau descriere verbala sa ghiceasca diferite cuvinte sau expresii si astfel sa inainteze pe traseul jocului.
- Nu fiti dezamagiti daca ati sarit de doua ori peste masa, ati inconjurat de trei ori masa de joc sau v-ati aruncat de mai multe ori pe canapea si totusi partenerul dumneavoastra nu a recunoscut expresia „atletism".
- Acest joc este foarte distractiv, toata lumea va rade cu lacrimi.
- Jucatorii isi pot pune in evidenta personalitatea, capacitatile artistice, fantezia si indemanarea.',
			94
		);

insert into produse (nume, poza, descriere, pret)
		values (
			'Rummy',
            'https://s12emagst.akamaized.net/products/726/725024/images/res_dbfc3f82ab4a826574a32a332e5f31be_450x450_o8gm.jpg',
            'Jocul de Rummy Medias este un joc de societate cunoscut si indragit de cei impatimiti, ideal pentru a petrece timpul cu familia si prietenii. Piesele jocului, fabricate la Medias, nu sunt din material plastic, au greutate si sunet specific la ciocnirea lor, cat si rezistenta foarte mare la uzura.

Cutia jocului este realizata din lemn masiv lacuit.

Combinatia excelenta de strategie si noroc garanteaza distractie si relaxare pentru toti jucatorii.',
			83.9
		);


insert into produse (nume, poza, descriere, pret)
		values (
			'Saboteur',
            'https://s12emagst.akamaized.net/products/177/176239/images/res_c4045f2a29d073fb5911604dd63cd13f_450x450_ctmg.jpg',
            'Intra in lumea piticilor si incepe o aventura plina de mistere.
Odata ce ai coborat in galerii in cautarea de aur dintr-odata ti se rupe ciocanul de abataj, si ti se stinge lanterna. Sabotorul a lovit din nou!
Acest joc iti rezerva fie rolul unui cautator de aur - vei sapa in galerii adanci in pantecul muntelui - fie rolul sabatorului - in acest caz vei incerca sa impiedici cautarea de aur. Nimeni nu stie cine e sabator, jocul se desfasoara in mister.
Daca cautatorii de aur reusesc sa construiasca o poteca spre comoara da aur, sunt rasplatiti cu bulgari de aur, iar sabatorii sa intorc acasa cu mainile goale. Insa daca cautatorii de aur esueaza, sabotorii obtin recompensa.
Jucatorii isi dezvaluie identitatea doar in momentul in care trebuie impartita comoara de aur.
Dupa prei runde castiga jucatorul care a reusit sa castige cei mai multi bulgari de aur.',
            30.45

		);

 insert into produse (nume, poza, descriere, pret)
		values (
			'Monopoly',
            'https://s12emagst.akamaized.net/products/10297/10296220/images/res_cf9cbf889c2b604725cca9f5800ea203_450x450_4ki6.jpg',
            'Cel mai faimos joc de tranzactii imobiliare, in varianta clasica.

Misca-te pe tabla, vinde si cumpara proprietati si construieste case si hoteluri din mers.

Scopul e sa faci tranzactii profitabile si sa te imbogatesti rapid - in curand vei detine totul!

Jocul este in engleza dar regulile acestui joc sunt traduse .

Proprietatile de pe tabla sunt din Franta. ',
            42
		);

insert into produse (nume, poza, descriere, pret)
		values (
			'Jenga',
            'https://s12emagst.akamaized.net/products/829/828144/images/res_5853ab9d04eb30efb76d92aa569f89ba_450x450_bl61.jpg',
            'Jenga este un joc de indemanare creat de Leslie Scott si produs in prezent de Parker Brothers, o divizie a Hasbro. In timpul jocului, jucatorii scot pe rand cate o piesa dintr-un turn construit din 54 de piese. Fiecare piesa scoasa de jos este pusa in partea de sus a turnului, creand un turn din ce in ce mai inalt, dar mai instabil.',
            79.73
		);

insert into produse (nume, poza, descriere, pret)
		values (
			'Dixit',
            'https://s12emagst.akamaized.net/products/2370/2369372/images/res_c7216261cf9df62525ffac6ffeed0bcb_450x450_l9p6.jpg',
            'Tine-ti respiratia! Ilustratiile sunt dezvaluite. Toate au ceva in comun: o fraza enigmatica. Acum fii atent, numai una din cele cinci imagini este cheia. Va trebui sa-ti folosesti tot flerul si intuitia pentru a descoperi imaginea, ocolind, in acelasi timp, capcanele intinse de ceilalti jucatori.


Ideea jocului: fiecare jucator la randul sau va fi povestitorul. La inceput toti jucatorii primesc cate 6 carti. Povestitorul alege o carte din mana, spune o fraza sau un cuvant in legatura cu imaginea de pe cartea lui de joc, apoi fiecare jucator alege una din cartile lui pentru a licita. Se dezvaluie toate cartile si fiecare jucator trebuie sa ghiceasca imaginea povestitorului.

Dixit este un joc surprinzator, vesel si entuziasmant pe care sa-l joci cu familia si prietenii.',
            109
		);

select * from comenziProduse;
