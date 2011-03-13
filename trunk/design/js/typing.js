var Typing =
{
	/* --- Déclaration des attributs --- */
	lettres	: new Array,
	score	: new Array,
	niveau	: null,
	
	/* --- Méthode de (ré)initialisation --- */
	reset: function()
	{
		this.niveau = '0';
		// score[0] = frappes correctes
		// score[1] = nombre total de frappes
		this.score = [0, 0];
		
		this.choisirNiveau(this.niveau);
		this.afficherScore();
	},
	
	/* --- Méthode qui change le niveau de difficulté --- */
	choisirNiveau: function(niv)
	{
		this.niveau = niv;
		
		switch (this.niveau)
		{
			case '0':
				document.getElementById('jeu').style.display = 'none';
				document.getElementById('niveau').value = '0';
			break;
			case '1':
				this.lettres = ['q', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm'];
			break;
			case '2':
				this.lettres = ['a', 'z', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p'];
			break;
			case '3':
				this.lettres = ['w', 'x', 'c', 'v', 'b', 'n'];
			break;
			default:
				this.lettres = [];
			break;
		}
		
		if (this.niveau > 0)
		{
			this.afficherLettre();
			document.getElementById('jeu').style.display = 'block';
		}
	},
	
	/* --- Méthode qui affiche la lettre à saisir --- */
	afficherLettre: function()
	{
		var indice = Math.floor(Math.random() * Typing.lettres.length);
		document.getElementById('lettre').innerHTML = Typing.lettres[indice];
	},
	
	/* --- Méthode qui vérifie le caractère saisie par l'utilisateur --- */
	verifierValeur: function(caractere)
	{
		if (caractere == document.getElementById('lettre').innerHTML)
			this.score[0]++;
		this.score[1]++;
		
		this.afficherScore();
		this.afficherLettre();
	},
	
	/* --- Méthode qui transcrit le caractère ASCII saisi par l'utilisateur en lettre --- */
	saisirTouche: function(event)
	{
		if (this.niveau > 0)
			this.verifierValeur(String.fromCharCode(event.charCode));
	},
	
	/* --- Méthode qui affiche le score --- */
	afficherScore: function()
	{
		document.getElementById('score').innerHTML = 'Score : ' + this.score[0] + ' / ' + this.score[1];
	}
};
