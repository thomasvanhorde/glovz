
/** ContentManager indexes **/
db["ContentManager"].ensureIndex({
  "_id": 1
},[
  
]);

/** projectUser indexes **/
db["projectUser"].ensureIndex({
  "_id": 1
},[
  
]);

/** ContentManager records **/
db["ContentManager"].insert({
  "_id": ObjectId("4d6a111311e18db415000001"),
  "title": "a",
  "strapline": "chp",
  "content": "",
  "date_create": 1298796819,
  "date_update": 1298796819
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7518ba11e18d0c25000010"),
  "collection": "2",
  "date_create": 1299519674,
  "label": "Directeur Technique",
  "initial": "DT",
  "date_update": 1300018994
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7518ec11e18d900500000f"),
  "collection": "2",
  "date_create": 1299519724,
  "label": "Chef de projet",
  "initial": "CP",
  "date_update": 1300018980
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7518fc11e18d9005000014"),
  "collection": "2",
  "date_create": 1299519740,
  "label": "Membre",
  "initial": "M",
  "date_update": 1299611128
});
db["ContentManager"].insert({
  "_id": ObjectId("4d75190c11e18d9005000017"),
  "collection": "1",
  "date_create": 1299519756,
  "date_update": 1299587812,
  "id": "",
  "initial": "Dev",
  "label": "D\u00e9veloppeur"
});
db["ContentManager"].insert({
  "_id": ObjectId("4d75192311e18d0c25000012"),
  "collection": "1",
  "id": "",
  "label": "Infographiste",
  "initial": "Info",
  "date_update": 1299519779,
  "date_create": 1299519779
});
db["ContentManager"].insert({
  "_id": ObjectId("4d75192a11e18dcc18000014"),
  "collection": "1",
  "id": "",
  "label": "Integrateur",
  "initial": "Int",
  "date_update": 1299519786,
  "date_create": 1299519786
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7e6938ddbce0bf01000000"),
  "collection": "6",
  "date_create": 1300130104,
  "label": "Back-office",
  "type": "2",
  "description": "Faire le back-office du site.",
  "duree": "6",
  "projet": "4d76229711e18d9005000031",
  "utilisateur": "4d7519ec11e18d900500001b",
  "submit": "enregistrer",
  "date_update": 1300641238
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7e813eddbce08200000002"),
  "collection": "4",
  "date_create": 1300136254,
  "nom": "Napster",
  "cdp": "4d7519ec11e18d900500001b",
  "client": "4d84769cddbce0cc01000000",
  "url_dev": "dev.napster.fr",
  "url_prod": "naspter.fr",
  "url_mantis": "mantis.napster.fr",
  "duree": "7",
  "cloture": "true",
  "submit": "enregistrer",
  "date_update": 1300979136
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7facdf600362640e000000"),
  "collection": "3",
  "date_create": 1300212959,
  "nom": "Crestot",
  "prenom": "Jean-Baptiste",
  "mail": "jbcrestot@gmail.com",
  "pwd": "aaa",
  "role": "4d7518ba11e18d0c25000010",
  "groupe": "4d75190c11e18d9005000017",
  "submit": "enregistrer",
  "date_update": 1300656604
});
db["ContentManager"].insert({
  "_id": ObjectId("4d811e5711e18dc40e000003"),
  "collection": "7",
  "date_create": 1300307543,
  "label": "test",
  "description": "tergeer",
  "date": "11\/03\/25",
  "projet": "4d76229711e18d9005000031",
  "submit": "enregistrer",
  "date_update": 1300639223
});
db["ContentManager"].insert({
  "_id": ObjectId("4d811f4bddbce01503000001"),
  "collection": "3",
  "date_create": 1300307787,
  "nom": "Nouaillat",
  "prenom": "Fabien",
  "mail": "aenyhm@gmail.com",
  "pwd": "sephiroth",
  "role": "4d7518ba11e18d0c25000010",
  "groupe": "4d75192311e18d0c25000012",
  "submit": "enregistrer",
  "date_update": 1300660735
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7519ec11e18d900500001b"),
  "collection": "3",
  "date_create": 1299519980,
  "nom": "Van Horde",
  "prenom": "Thomas",
  "mail": "listentruth@gmail.com",
  "pwd": "0000",
  "role": "4d7518ba11e18d0c25000010",
  "groupe": "4d75190c11e18d9005000017",
  "date_update": 1300689124
});
db["ContentManager"].insert({
  "_id": ObjectId("4d83d1a911e18d5413000000"),
  "collection": "7",
  "date_create": 1300484521,
  "label": "Reponse appel d'offre client",
  "description": "Le choix du prestataire est rendu aujourd'hui",
  "date": "11\/02\/07",
  "projet": "4d7e813eddbce08200000002",
  "submit": "enregistrer",
  "date_update": 1300800119
});
db["ContentManager"].insert({
  "_id": ObjectId("4d84769cddbce0cc01000000"),
  "collection": "5",
  "id": "",
  "date_create": 1300526748,
  "nom": "Ricard",
  "prenom": "Laurent",
  "mail": "roundandsoft@gmail.com",
  "submit": "enregistrer"
});
db["ContentManager"].insert({
  "_id": ObjectId("4d76229711e18d9005000031"),
  "collection": "4",
  "date_create": 1299587735,
  "nom": "Syst\u00e8me d'\u00e9change local",
  "cdp": "4d7519ec11e18d900500001b",
  "client": "4d76228311e18dcc18000028",
  "url_dev": "http:\/\/google.fr",
  "url_prod": "http:\/\/bing.com",
  "url_mantis": "",
  "duree": "60",
  "submit": "enregistrer",
  "date_update": 1300979289
});
db["ContentManager"].insert({
  "_id": ObjectId("4d84af02ddbce0c80e000001"),
  "collection": "7",
  "id": "",
  "date_create": 1300541186,
  "label": "ghdtfr",
  "description": "",
  "date": "tyryrtrt",
  "projet": "",
  "submit": "enregistrer"
});
db["ContentManager"].insert({
  "_id": ObjectId("4d85d34cddbce0f100000000"),
  "collection": "7",
  "date_create": 1300616012,
  "label": "modifi\u00e9",
  "description": "jalon modifi\u00e9",
  "date": "11\/03\/20",
  "projet": "4d76229711e18d9005000031",
  "submit": "enregistrer",
  "date_update": 1300639209
});
db["ContentManager"].insert({
  "_id": ObjectId("4d85db29ddbce0d901000000"),
  "collection": "5",
  "date_create": 1300618025,
  "nom": "Croiz\u00e9",
  "prenom": "Jean-Yves",
  "mail": "jycroize@jcvd.be",
  "submit": "enregistrer",
  "date_update": 1300647163
});
db["ContentManager"].insert({
  "_id": ObjectId("4d85c5aaddbce0f000000000"),
  "collection": "4",
  "date_create": 1300612522,
  "nom": "Serveur Minecraft",
  "cdp": "4d7facdf600362640e000000",
  "client": "4d76228311e18dcc18000028",
  "url_dev": "minecraft.djlechuck.fr",
  "url_prod": "minecraft.fr",
  "duree": "88",
  "submit": "enregistrer",
  "date_update": 1300645802
});
db["ContentManager"].insert({
  "_id": ObjectId("4d85d57eddbce0f100000001"),
  "collection": "6",
  "date_create": 1300616574,
  "label": "modifi\u00e9e",
  "type": "0",
  "description": "t\u00e2che modifi\u00e9e",
  "duree": "4",
  "projet": "4d76229711e18d9005000031",
  "cloture": "true",
  "utilisateur": "4d811f4bddbce01503000001",
  "submit": "enregistrer",
  "date_update": 1300616652
});
db["ContentManager"].insert({
  "_id": ObjectId("4d85d714ddbce0f100000002"),
  "collection": "7",
  "date_create": 1300616980,
  "label": "encore",
  "description": "salut",
  "date": "11\/03\/26",
  "projet": "4d76229711e18d9005000031",
  "submit": "enregistrer",
  "date_update": 1300639239
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7be38511e18d1825000052"),
  "collection": "7",
  "date_create": 1299964805,
  "label": "Recette 1",
  "description": "1er recette avec client",
  "date": "11\/04\/29",
  "projet": "4d76229711e18d9005000031",
  "submit": "enregistrer",
  "date_update": 1300639261
});
db["ContentManager"].insert({
  "_id": ObjectId("4d76228311e18dcc18000028"),
  "collection": "5",
  "date_create": 1299587715,
  "nom": "Roux",
  "prenom": "Emmanuelle",
  "mail": "emmanuelle.roux@gmail.com",
  "submit": "enregistrer",
  "date_update": 1300624408
});
db["ContentManager"].insert({
  "_id": ObjectId("4d7bdadc11e18de407000001"),
  "collection": "7",
  "date_create": 1299962588,
  "label": "Signature",
  "description": "Signature du devis",
  "date": "11\/03\/19",
  "projet": "4d76229711e18d9005000031",
  "submit": "enregistrer",
  "date_update": 1300639195
});
db["ContentManager"].insert({
  "_id": ObjectId("4d864a9addbce00b02000000"),
  "collection": "7",
  "date_create": 1300646554,
  "label": "modifi\u00e9",
  "description": "nouveau jalon",
  "date": "11\/03\/04",
  "projet": "4d76229711e18d9005000031",
  "submit": "enregistrer",
  "date_update": 1300646742
});
db["ContentManager"].insert({
  "_id": ObjectId("4d864c68ddbce01902000000"),
  "collection": "6",
  "date_create": 1300647016,
  "label": "Batterie de tests",
  "type": "3",
  "description": "\u00c0 faire",
  "duree": "6",
  "projet": "4d76229711e18d9005000031",
  "utilisateur": "4d7facdf600362640e000000",
  "submit": "enregistrer",
  "date_update": 1300647087
});
db["ContentManager"].insert({
  "_id": ObjectId("4d879048ea76e8bc43000000"),
  "collection": "3",
  "id": "",
  "date_create": 1300729928,
  "nom": "ikhlef",
  "prenom": "khelaf",
  "mail": "ikhlef_khelaf@yahoo.fr",
  "pwd": "ikhlef",
  "role": "4d7518ba11e18d0c25000010",
  "groupe": "4d75190c11e18d9005000017",
  "submit": "enregistrer"
});
db["ContentManager"].insert({
  "_id": ObjectId("4d85163311e18d2c1d000000"),
  "collection": "7",
  "date_create": 1300567603,
  "label": "Etude de faisabilit\u00e9",
  "description": "Analyse du besoin client au moyen des documents techniques fournis\r\n- Arborescence du site\r\n- R\u00e8gles de gestion\r\n- R\u00f4le\r\n- BDD",
  "date": "11\/02\/01",
  "projet": "4d7e813eddbce08200000002",
  "submit": "enregistrer",
  "date_update": 1300874374
});
db["ContentManager"].insert({
  "_id": ObjectId("4d84c048ddbce03112000002"),
  "collection": "7",
  "date_create": 1300545608,
  "label": "Proposition ccial",
  "description": "R\u00e9alisation d'une proposition commercial avec devis.\r\n",
  "date": "11\/02\/04",
  "projet": "4d7e813eddbce08200000002",
  "submit": "enregistrer",
  "date_update": 1300799901
});
db["ContentManager"].insert({
  "_id": ObjectId("4d812dd9ddbce02901000000"),
  "collection": "4",
  "date_create": 1300311513,
  "nom": "Internet de demain",
  "cdp": "4d7facdf600362640e000000",
  "client": "4d76228311e18dcc18000028",
  "url_dev": "vdsgs",
  "url_prod": "vdfbdf",
  "url_mantis": "",
  "duree": "42",
  "submit": "enregistrer",
  "date_update": 1300955117
});
db["ContentManager"].insert({
  "_id": ObjectId("4d8a79c511e18d6c16000001"),
  "collection": "6",
  "date_create": 1300920773,
  "label": "Ma t\u00e2che",
  "type": "0",
  "description": "lorem ipsum",
  "duree": "10",
  "travail": "Mon travail 1\r\nMon travail 2\r\n...",
  "mantis": "",
  "commentaire": "",
  "date": "11\/03\/25",
  "projet": "4d812dd9ddbce02901000000",
  "utilisateur": "4d7facdf600362640e000000",
  "submit": "enregistrer",
  "date_update": 1300979558
});
db["ContentManager"].insert({
  "_id": ObjectId("4d8a81ad11e18d6c16000002"),
  "collection": "6",
  "date_create": 1300922797,
  "label": "Design",
  "type": "0",
  "description": "Cr\u00e9ation du design",
  "duree": "4.5",
  "travail": "Mockup & premi\u00e8re maquette",
  "mantis": "http:\/\/mantis.com",
  "commentaire": "voir dans le Svn",
  "date": "11\/03\/24",
  "projet": "4d7e813eddbce08200000002",
  "utilisateur": "4d7519ec11e18d900500001b",
  "valide": "true",
  "submit": "enregistrer",
  "date_update": 1300979194
});
db["ContentManager"].insert({
  "_id": ObjectId("4d84af9cddbce0f402000001"),
  "collection": "6",
  "date_create": 1300541340,
  "label": "Valider le HTML et le CSS",
  "type": "1",
  "description": "V\u00e9rifier la validation du HTML et du CSS aux normes W3C.",
  "duree": "1",
  "travail": "",
  "mantis": "",
  "commentaire": "",
  "date": "11\/03\/24",
  "projet": "4d7e813eddbce08200000002",
  "utilisateur": "4d7519ec11e18d900500001b",
  "valide": "true",
  "submit": "enregistrer",
  "date_update": 1300926558
});
db["ContentManager"].insert({
  "_id": ObjectId("4d76407211e18d702700002e"),
  "collection": "6",
  "date_create": 1299595378,
  "label": "Home",
  "type": "0",
  "description": "Template de la homeP",
  "duree": "8",
  "travail": "",
  "mantis": "",
  "commentaire": "",
  "date": "11\/03\/25",
  "projet": "4d76229711e18d9005000031",
  "utilisateur": "4d7519ec11e18d900500001b",
  "submit": "enregistrer",
  "date_update": 1300928424
});
db["ContentManager"].insert({
  "_id": ObjectId("4d84b05addbce0c80e000003"),
  "collection": "6",
  "date_create": 1300541530,
  "label": "Pre home",
  "type": "1",
  "description": "Int\u00e9gration de la pr\u00e9-home",
  "duree": "2",
  "travail": "Int\u00e9gration au CMS",
  "mantis": "",
  "commentaire": "",
  "date": "11\/03\/25",
  "projet": "4d7e813eddbce08200000002",
  "utilisateur": "4d7facdf600362640e000000",
  "cloture": "true",
  "valide": "true",
  "submit": "enregistrer",
  "date_update": 1300979233
});
db["ContentManager"].insert({
  "_id": ObjectId("4d87af2e11e18dac0b000002"),
  "collection": "6",
  "date_create": 1300737838,
  "label": "Sprite",
  "type": "0",
  "description": "Cr\u00e9ation des sprite du jeux",
  "duree": "5",
  "travail": "",
  "mantis": "http:\/\/mantis.com",
  "commentaire": "",
  "date": "11\/03\/26",
  "projet": "4d85c5aaddbce0f000000000",
  "utilisateur": "4d7519ec11e18d900500001b",
  "cloture": "true",
  "valide": "true",
  "submit": "enregistrer",
  "date_update": 1300979400
});
db["ContentManager"].insert({
  "_id": ObjectId("4d87b08f11e18d6813000005"),
  "collection": "6",
  "date_create": 1300738191,
  "label": "Merge des versions",
  "type": "3",
  "description": "merge des diff\u00e9rentes branches du devellopement",
  "duree": "25",
  "travail": "",
  "mantis": "",
  "commentaire": "",
  "date": "11\/03\/31",
  "projet": "4d85c5aaddbce0f000000000",
  "utilisateur": "4d7519ec11e18d900500001b",
  "cloture": "true",
  "valide": "true",
  "submit": "enregistrer",
  "date_update": 1300979447
});
db["ContentManager"].insert({
  "_id": ObjectId("4d8b5f1311e18de41b000002"),
  "collection": "7",
  "id": "",
  "date_create": 1300979475,
  "label": "Fin de projet",
  "description": "Le jeux doit \u00eatre livr\u00e9",
  "date": "11\/04\/01",
  "projet": "4d85c5aaddbce0f000000000",
  "submit": "enregistrer"
});
db["ContentManager"].insert({
  "_id": ObjectId("4d8b60e611e18d341d000015"),
  "collection": "3",
  "date_create": 1300979942,
  "nom": "Bahr",
  "prenom": "Lenny",
  "mail": "bahr.lenny@simpsons.com",
  "pwd": "1234",
  "role": "4d7518fc11e18d9005000014",
  "groupe": "4d75192a11e18dcc18000014",
  "submit": "enregistrer",
  "date_update": 1300980633
});
db["ContentManager"].insert({
  "_id": ObjectId("4d8b615111e18d381c000003"),
  "collection": "3",
  "date_create": 1300980049,
  "nom": "Christ",
  "prenom": "Jesus",
  "mail": "lechrist@god.com",
  "pwd": "0000",
  "role": "4d7518ba11e18d0c25000010",
  "groupe": "4d75190c11e18d9005000017",
  "submit": "enregistrer",
  "date_update": 1300981901
});
db["ContentManager"].insert({
  "_id": ObjectId("4d8b647911e18d341d000016"),
  "collection": "6",
  "date_create": 1300980857,
  "label": "Zoning",
  "type": "0",
  "description": "zonning de l'application Ipad",
  "duree": "6.25",
  "travail": "Travail sous Balsamiq mockup",
  "mantis": "http:\/\/monurl.com",
  "commentaire": "Voir sur le googleDoc.",
  "date": "11\/03\/05",
  "projet": "4d812dd9ddbce02901000000",
  "utilisateur": "4d8b60e611e18d341d000015",
  "submit": "enregistrer",
  "date_update": 1300981671
});
db["ContentManager"].insert({
  "_id": ObjectId("4d8b64eeb99606b00d000000"),
  "collection": "6",
  "date_create": 1300980974,
  "label": "test",
  "type": "0",
  "description": "ezae",
  "duree": "12",
  "travail": "erzrzear",
  "mantis": "",
  "commentaire": "rez",
  "date": "11\/03\/15",
  "projet": "4d7e813eddbce08200000002",
  "utilisateur": "4d7facdf600362640e000000",
  "submit": "enregistrer",
  "date_update": 1300981473
});

/** projectUser records **/
db["projectUser"].insert({
  "_id": ObjectId("4d851da811e18dd818000001"),
  "projectID": "4d7e813eddbce08200000002",
  "member": "4d7519ec11e18d900500001b"
});
db["projectUser"].insert({
  "_id": ObjectId("4d878524ea76e85f29000000"),
  "projectID": "4d7e813eddbce08200000002",
  "member": "4d7facdf600362640e000000"
});
db["projectUser"].insert({
  "_id": ObjectId("4d88fbeb11e18dac0b000005"),
  "projectID": "4d812dd9ddbce02901000000",
  "member": "4d7519ec11e18d900500001b"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8aa1c211e18d341d000010"),
  "projectID": "4d8aa1c211e18d341d00000f",
  "member": "4d7519ec11e18d900500001b"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8aa20611e18d341d000012"),
  "projectID": "4d8aa20611e18d341d000011",
  "member": "4d7519ec11e18d900500001b"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8b634211e18d381c000004"),
  "projectID": "4d7e813eddbce08200000002",
  "member": "4d8b60e611e18d341d000015"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8b635711e18d6c16000007"),
  "projectID": "4d812dd9ddbce02901000000",
  "member": "4d7facdf600362640e000000"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8b63a711e18d381c000005"),
  "projectID": "4d812dd9ddbce02901000000",
  "member": "4d8b60e611e18d341d000015"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8b67d511e18df419000017"),
  "projectID": "4d85c5aaddbce0f000000000",
  "member": "4d7facdf600362640e000000"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8b687c11e18de41b000003"),
  "projectID": "4d76229711e18d9005000031",
  "member": "4d8b615111e18d381c000003"
});
db["projectUser"].insert({
  "_id": ObjectId("4d851acb11e18d4c2f000001"),
  "projectID": "4d7e813eddbce08200000002",
  "member": "4d811f4bddbce01503000001"
});
db["projectUser"].insert({
  "_id": ObjectId("4d8b5e7c11e18d6c16000006"),
  "projectID": "4d76229711e18d9005000031",
  "member": "4d7519ec11e18d900500001b"
});
